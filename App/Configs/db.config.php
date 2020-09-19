<?php

  // GENERAL DATABASE CONFIG
  define('DB_TYPE', 'mysql');
  define('DB_HOST', 'localhost');
  define('DB_NAME', 'mvc');
  define('DB_USERNAME', 'root');
  define('DB_PASSWORD', '');

  // PDO CONFIG
  define('PDO_DNS', DB_TYPE . ':host=' . DB_HOST . ';dbname=' . DB_NAME);
