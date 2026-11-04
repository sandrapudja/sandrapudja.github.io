<?php
// Booking form handler — sandrapudja.com
// Sends the request to Sandra and a confirmation to the sender. Returns JSON.

header('Content-Type: application/json; charset=utf-8');
header('X-Content-Type-Options: nosniff');

$TO       = 'hello@sandrapudja.com';           // Sandra's inbox  <-- change here
$FROM     = 'hello@sandrapudja.com';           // must be a mailbox on this domain (hello@ exists in hPanel → Emails) or Hostinger may drop it
$SITE     = 'sandrapudja.com';

function fail($code, $msg){ http_response_code($code); echo json_encode(['ok'=>false,'error'=>$msg]); exit; }

if ($_SERVER['REQUEST_METHOD'] !== 'POST') fail(405, 'method');

// honeypot: bots fill hidden fields
if (!empty($_POST['website'])) { echo json_encode(['ok'=>true]); exit; }

// basic rate limit: one request per 20 s per IP
$ip = $_SERVER['REMOTE_ADDR'] ?? '0';
$lock = sys_get_temp_dir() . '/sp-' . md5($ip);
if (file_exists($lock) && time() - filemtime($lock) < 20) fail(429, 'slow');
@touch($lock);

$clean = function($k, $max = 500){ $v = isset($_POST[$k]) ? trim((string)$_POST[$k]) : ''; $v = str_replace(["\r","\n"], ' ', $v); return mb_substr($v, 0, $max); };

$name  = $clean('name', 120);
$email = $clean('email', 200);
$type  = $clean('type', 80);
$date  = $clean('date', 40);
$lang  = $clean('lang', 5);
$msg   = isset($_POST['message']) ? mb_substr(trim((string)$_POST['message']), 0, 4000) : '';

if ($name === '')                                   fail(422, 'name');
if (!filter_var($email, FILTER_VALIDATE_EMAIL))     fail(422, 'email');
if (mb_strlen($msg) < 10)                           fail(422, 'message');

$types = ['live'=>'Live & event production','media'=>'Media & creator projects','ops'=>'Operations & project support','hand'=>'Your right hand'];
$typeLabel = $types[$type] ?? $type;

// ---- mail to Sandra ----
$subject = "Booking request: $typeLabel — $name";
$body  = "New booking request from $SITE\n\n";
$body .= "Name:     $name\n";
$body .= "Email:    $email\n";
$body .= "Project:  $typeLabel\n";
if ($date !== '') $body .= "Date:     $date\n";
$body .= "Language: " . strtoupper($lang ?: 'en') . "\n";
$body .= "IP:       $ip\n\n";
$body .= "Message:\n$msg\n";

$enc = fn($s) => '=?UTF-8?B?' . base64_encode($s) . '?=';
$headers  = "From: " . $enc('Sandra Pudja website') . " <$FROM>\r\n";
$headers .= "Reply-To: " . $enc($name) . " <$email>\r\n";
$headers .= "MIME-Version: 1.0\r\nContent-Type: text/plain; charset=UTF-8\r\nContent-Transfer-Encoding: 8bit\r\n";
$headers .= "X-Mailer: PHP/" . phpversion() . "\r\n";

$sent = @mail($TO, $enc($subject), $body, $headers, "-f$FROM");
if (!$sent) fail(500, 'send');

// ---- confirmation to sender (best effort) ----
$conf = [
  'en' => ["Your request reached Sandra Pudja", "Hi $name,\n\nthanks for your request ($typeLabel). Sandra replies within 48 hours, usually faster.\n\nYour message:\n$msg\n\n— $SITE"],
  'de' => ["Deine Anfrage ist bei Sandra Pudja angekommen", "Hallo $name,\n\ndanke für deine Anfrage ($typeLabel). Sandra antwortet innerhalb von 48 Stunden, meist schneller.\n\nDeine Nachricht:\n$msg\n\n— $SITE"],
  'hr' => ["Tvoj upit je stigao Sandri Pudji", "Bok $name,\n\nhvala na upitu ($typeLabel). Sandra odgovara unutar 48 sati, obično brže.\n\nTvoja poruka:\n$msg\n\n— $SITE"],
];
[$cs, $cb] = $conf[$lang] ?? $conf['en'];
$ch  = "From: " . $enc('Sandra Pudja') . " <$FROM>\r\nReply-To: <$TO>\r\nMIME-Version: 1.0\r\nContent-Type: text/plain; charset=UTF-8\r\nContent-Transfer-Encoding: 8bit\r\n";
@mail($email, $enc($cs), $cb, $ch, "-f$FROM");

echo json_encode(['ok'=>true]);
