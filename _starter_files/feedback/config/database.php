<?php
  define('DB_HOST', 'localhost');
  define('DB_USER', 'root');
  define('DB_PASS', 'root');
  define('DB_NAME', 'php_dev');

  $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME, 3307);

  if($conn->connect_error) {
    die('Connection failed   ' . $conn->connect_error);
  }
