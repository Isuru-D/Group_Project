<?php
    require 'config/config.php';
    require 'config/path.php';

    spl_autoload_register( function($class) {
        if (is_file('core/'.$class.'.php')) {
            require 'core/'.$class.'.php';
        }
    });

    $app = new Brandweb();

?>
