<?php

  namespace PHPMVC\Lib;

  class Front {

    private $_controller = 'home';
    private $_method = 'default';
    private $_params = array();

    public function __construct(){
      $this->_parseUrl();
    }

    private function _parseUrl(){
      $url = explode('/', trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH),'/'), 3);
      if (isset($url[0]) && $url[0] != '') {
        $this->_controller = $url[0];
      }
      if (isset($url[1]) && $url[1] != '') {
        $this->_method = $url[1];
      }
      if (isset($url[2]) && $url[2] != '') {
        $this->_params = explode('/', $url[2]);
      }
    }

    public function dispatch(){
      $className = 'PHPMVC\Controllers\\' . $this->_controller;
      $classMethod = $this->_method;
      if (!class_exists($className)){
        $className = 'PHPMVC\Controllers\NotFound';
      }
      $controller = new $className;
      $controller->setController($this->_controller);
      $controller->setMethod($this->_method);
      $controller->setParams($this->_params);
      $controller->_render();
    }

  }
