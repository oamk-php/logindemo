<?php
session_start();
require_once 'inc/headers.php';
require_once 'inc/functions.php';

if (!isset($_SESSION['user'])) {
  header('HTTP/1.1 401 Unauthorized');
  exit;
}

header('HTTP/1.1 200 OK');
$data = array('message' => "This is top secret information.");
echo json_encode($data);
