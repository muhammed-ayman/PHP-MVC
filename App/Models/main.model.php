<?php

  use PDO;
  namespace PHPMVC\Models;

  class Main {

    private $_connection;

    public function __construct(){
      try {
        $this->_connection = new PDO(PDO_DNS, DB_USERNAME, DB_PASSWORD);
        $this->_connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      } catch (\PDOException $e) {
        die('Error: ' . $e->getMessage());
      }
    }

  }
