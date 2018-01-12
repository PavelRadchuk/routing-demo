<?php
/**
 * Created by PhpStorm.
 * User: BBTL
 * Date: 1/12/18
 * Time: 11:10 AM
 */
    require_once ("vendor/autoload.php");

    $f3 = Base::instance();

    $f3->set('DEBUG', 3);

    $f3->route("GET /", function(){
        echo '<h1>Routing Demo</h1>';
    });

    $f3->route("GET /page1", function() {
        echo '<h1>This is page one</h1>';
    });
    $f3->route("GET /page2", function() {
        echo '<h1>This is page two</h1>';
    });
    $f3->route("GET /page1/subpage-a", function() {
        echo '<h1>This is page one,subpage-a</h1>';
    });
    $f3->run();