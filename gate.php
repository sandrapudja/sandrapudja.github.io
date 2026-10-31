<?php
// Password gate with curtain — sandrapudja.com
// Temporary: remove the GATE block in .htaccess to open the site to everyone.
if (!defined('SP_TOKEN')) define('SP_TOKEN', '55d7d9864b8a4de9d461dd4357da6428');
if (!defined('SP_ANSWER')) define('SP_ANSWER', 'zmaj');   // accepted: Zmaj, zmaj, Zmaj!, zmaj!, ZMAJ

header('X-Robots-Tag: noindex, nofollow');
header('Cache-Control: private, no-store, max-age=0');
header('Vary: Cookie');

$back = $_SERVER['REQUEST_URI'] ?? '/';
if (!is_string($back) || $back === '' || $back[0] !== '/' || substr($back, 0, 2) === '//' || strpos($back, '/gate.php') === 0) $back = '/';

function norm($s){ $s = trim((string)$s); $s = function_exists('mb_strtolower') ? mb_strtolower($s, 'UTF-8') : strtolower($s); return rtrim($s, "! \t"); }

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $ok = hash_equals(SP_ANSWER, norm($_POST['pw'] ?? ''));
  if ($ok) {
    header('Set-Cookie: sp_access=' . SP_TOKEN . '; Expires=' . gmdate('D, d M Y H:i:s', time()+60*60*24*90) . ' GMT; Max-Age=' . (60*60*24*90) . '; Path=/; Secure; HttpOnly; SameSite=Lax', false);
  } else {
    usleep(600000);
  }
  if (($_SERVER['HTTP_X_REQUESTED_WITH'] ?? '') === 'fetch') {
    header('Content-Type: application/json; charset=utf-8');
    echo json_encode(['ok'=>$ok]); exit;
  }
  if ($ok) { header('Location: ' . $back, true, 303); exit; }
  $err = true;
}
http_response_code(200);
?><!doctype html>
<html lang="hr">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
<title>Sandra Pudja — TV producer, Berlin</title>
<meta name="description" content="Sandra Pudja — freelance TV producer in Berlin.">
<meta property="og:type" content="website">
<meta property="og:title" content="Sandra Pudja — TV producer, Berlin">
<meta property="og:description" content="TV producer and organisational wonder. Studio, live and location productions in Berlin and across Europe.">
<meta property="og:image" content="https://sandrapudja.com/og.jpg">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">
<meta property="og:url" content="https://sandrapudja.com/">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:image" content="https://sandrapudja.com/og.jpg">
<meta name="theme-color" content="#0c0c0e">
<link rel="icon" href="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 32 32'%3E%3Crect width='32' height='32' rx='6' fill='%230c0c0e'/%3E%3Ccircle cx='16' cy='16' r='6' fill='%23ff3b30'/%3E%3C/svg%3E">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Instrument+Sans:wght@400;500;600;700&family=IBM+Plex+Mono:wght@400;500&display=swap">
<style>
:root{--bg:#0c0c0e;--fg:#ecebe6;--muted:#8c8b86;--line:#3a3a42;--rec:#ff3b30;color-scheme:dark}
*{box-sizing:border-box}
html,body{height:100%}
body{margin:0;background:var(--bg);color:var(--fg);font-family:"Instrument Sans","Helvetica Neue",Arial,sans-serif;overflow:hidden}
.stage{position:fixed;inset:0;background:radial-gradient(60% 50% at 50% 40%,#1a1a1f 0%,var(--bg) 70%)}
.c{position:fixed;top:0;bottom:0;width:51%;z-index:2;transition:transform 1.5s cubic-bezier(.77,0,.18,1);
  background:
   linear-gradient(180deg,rgba(0,0,0,.35) 0%,rgba(0,0,0,0) 18%,rgba(0,0,0,0) 80%,rgba(0,0,0,.55) 100%),
   repeating-linear-gradient(90deg,#5c1016 0px,#7a1820 22px,#8f1f28 34px,#6a141b 52px,#4a0c11 70px);}
.c.l{left:0;box-shadow:inset -30px 0 40px rgba(0,0,0,.45)}
.c.r{right:0;box-shadow:inset 30px 0 40px rgba(0,0,0,.45)}
.val{position:fixed;left:0;right:0;top:0;height:56px;z-index:3;background:repeating-linear-gradient(90deg,#4a0c11 0,#6a141b 18px,#4a0c11 36px);box-shadow:0 10px 30px rgba(0,0,0,.6);border-bottom:2px solid #2a0508;transition:transform 1.2s .3s ease}
.open .c.l{transform:translateX(-102%)}
.open .c.r{transform:translateX(102%)}
.open .val{transform:translateY(-110%)}
.open .box{opacity:0;transform:translate(-50%,-46%) scale(.96)}
.box{position:fixed;left:50%;top:50%;transform:translate(-50%,-50%);z-index:4;width:min(360px,calc(100vw - 32px));background:rgba(12,12,14,.92);border:1px solid var(--line);border-radius:18px;padding:28px 24px 22px;display:grid;gap:16px;box-shadow:0 40px 100px rgba(0,0,0,.6);transition:opacity .4s,transform .4s;backdrop-filter:blur(6px)}
.brand{display:flex;align-items:center;gap:10px;font-weight:600;font-size:17px;letter-spacing:-.01em}
.dot{width:8px;height:8px;border-radius:50%;background:var(--rec);animation:b 1.4s steps(1) infinite}
@keyframes b{50%{opacity:.15}}
.hint{font-family:"IBM Plex Mono",monospace;font-size:12px;letter-spacing:.14em;text-transform:uppercase;color:var(--muted)}
.hint b{font-family:"Instrument Sans",sans-serif;font-size:30px;letter-spacing:-.02em;text-transform:none;color:var(--fg);display:block;margin-top:6px;font-weight:700}
form{display:grid;gap:10px}
input{width:100%;background:#17171b;border:1px solid var(--line);border-radius:12px;padding:14px 16px;font:inherit;font-size:17px;color:var(--fg);-webkit-appearance:none;appearance:none}
input:focus{outline:0;border-color:var(--fg)}
button{background:var(--fg);color:var(--bg);border:0;border-radius:999px;padding:13px 18px;font:inherit;font-weight:600;font-size:15px;cursor:pointer;display:flex;align-items:center;justify-content:center;gap:10px}
button:hover,button:focus-visible{background:var(--rec);color:#fff;outline:0}
.err{min-height:18px;font-size:13px;color:var(--rec)}
.shake{animation:sh .4s}
@keyframes sh{20%,60%{transform:translateX(-6px)}40%,80%{transform:translateX(6px)}}
@media (prefers-reduced-motion:reduce){.c,.val,.box{transition:none}.dot{animation:none}}
</style>
</head>
<body>
<div class="stage" aria-hidden="true"></div>
<div class="c l" aria-hidden="true"></div><div class="c r" aria-hidden="true"></div><div class="val" aria-hidden="true"></div>
<main class="box" id="box">
  <div class="brand"><span class="dot"></span>Sandra Pudja</div>
  <div class="hint">Hint<b>Kaj?</b></div>
  <form id="f" method="post" action="/gate.php" autocomplete="off">
    <label for="pw" style="position:absolute;left:-9999px">Lozinka</label>
    <input id="pw" name="pw" type="password" placeholder="Lozinka" autofocus required>
    <button type="submit"><span>Otvori zavjesu</span></button>
    <div class="err" id="err"><?php echo !empty($err) ? 'Ne. Probaj opet.' : ''; ?></div>
  </form>
</main>
<script>
(function(){
  var f=document.getElementById('f'), pw=document.getElementById('pw'), err=document.getElementById('err'), box=document.getElementById('box');
  f.addEventListener('submit', function(e){
    e.preventDefault(); err.textContent='';
    var fd=new FormData(f);
    fetch('/gate.php',{method:'POST',body:fd,headers:{'X-Requested-With':'fetch'},credentials:'same-origin'})
      .then(function(r){return r.json();})
      .then(function(j){
        if(j.ok){ document.body.classList.add('open'); setTimeout(function(){ location.reload(); }, 1500); }
        else { err.textContent='Ne. Probaj opet.'; box.classList.remove('shake'); void box.offsetWidth; box.classList.add('shake'); pw.select(); }
      })
      .catch(function(){ f.submit(); });
  });
})();
</script>
</body>
</html>
