<?php
/**
 * Created by PhpStorm.
 * User: BBTL
 * Date: 1/12/18
 * Time: 11:10 AM
 */
    require_once ("vendor/autoload.php");

    $f3 = Base::instance();

    $f3->route("GET /", function(){
        echo '<h1>Routing Demo</h1>';
    });

    $f3->run();