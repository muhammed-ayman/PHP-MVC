<?php

  namespace PHPMVC;

  // INTIT THE DIRECTORY SEPARATOR
  if (!defined('DS')) {
    define('DS', DIRECTORY_SEPARATOR);
  }

  // CONFIG FILE && AUTOLOAD CLASS
  require_once '..' . DS . 'App' . DS . 'Configs' . DS . 'main.config.php';
  require_once LIB_PATH . DS . 'autoload.php';

  $cls = new Lib\front;
  $cls->dispatch();
