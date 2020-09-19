<?php

  // APPLICATION CONSTANTS
  if (!defined('DS')) {
    define('DS', DIRECTORY_SEPARATOR);
  }
  define('APP_PATH', realpath(dirname(dirname(__FILE__))));
  define('LIB_PATH', APP_PATH . DS . 'lib' );
  define('VIEWS_PATH', APP_PATH . DS . 'views' );
  define('MODELS_PATH', APP_PATH . DS . 'models' );

  // DATABASE CONFIG
  require_once('db.config.php');
