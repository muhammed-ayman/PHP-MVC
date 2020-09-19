<?php

  namespace PHPMVC\LIB;

  class AutoLoad {

    public static function autoload($class){
        $className = explode('\\', $class)[2];
        $classFolder = ucfirst(explode('\\', $class)[1]);
        $classExtension = '.cont.php';
        if ($classFolder == 'Models') {
          $classExtension = '.model.php';
        }
        $class_path = APP_PATH . DS . $classFolder . DS . $className . $classExtension;
        if (!file_exists($class_path)) {
          return;
        }
        require $class_path;
    }

  }

  spl_autoload_register(__NAMESPACE__ . '\Autoload::autoload');
