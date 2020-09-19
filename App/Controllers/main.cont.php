<?php

  namespace PHPMVC\Controllers;

  class Main {

    protected $_controller;
    protected $_method;
    protected $_params = array();

    public function setController($controller){
      $this->_controller = $controller;
    }
    public function setMethod($method){
      $this->_method = $method;
    }
    public function setParams($params){
      $this->_params = $params;
    }
    public function _render(){
      $view_path = VIEWS_PATH . DS . strtolower($this->_controller) . DS . $this->_method . '.view.php';
      if (!file_exists($view_path)) {
        $view_path = VIEWS_PATH . DS . 'notFound' . DS . 'notFound.view.php';
      }
      require_once($view_path);
    }

  }
