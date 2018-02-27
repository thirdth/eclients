<?php
// database functions
// TODO: confirm that this DB is protected
function get_connected()  {
  static $conn;
  if (!isset($conn))  {
    $db = parse_ini_file($_SERVER[DOCUMENT_ROOT] . '/../config/config.ini');
    $conn = mysqli_connect($db['host'], $db['user'], $db['pass'], $db['name']);
  }
  if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
  }
  return $conn;
}
?>
