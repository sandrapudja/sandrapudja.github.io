<?php
// Included at the top of every page. Without a valid sp_access cookie the visitor gets the curtain (gate.php).
if (!defined('SP_TOKEN')) define('SP_TOKEN', '55d7d9864b8a4de9d461dd4357da6428');
header('Cache-Control: private, no-store, max-age=0');
header('Vary: Cookie');
if (!isset($_COOKIE['sp_access']) || !hash_equals(SP_TOKEN, (string)$_COOKIE['sp_access'])) {
  require __DIR__ . '/gate.php';
  exit;
}
