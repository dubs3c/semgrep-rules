<?php
$parts = explode('.', $_GET['jwt']);
$algorithms = array('HS256', 'HS384', 'HS512');
if (3 !== count($parts)) {
  throw new \InvalidArgumentException('Invalid or malformed JWT supplied.');
}
$header = json_decode(self::decode($parts[0]), true);
if (in_array($header['alg'], $algorithms, true)) {
  echo "yayy";
}

if (in_array($header['alg'], $algorithms, false)) {
  echo "yayy";
}

if (in_array($header['alg'], $algorithms)) {
  echo "yayy";
}

if (in_array(0, $algorithms)) {
  echo "yayy but no";
}

?>
