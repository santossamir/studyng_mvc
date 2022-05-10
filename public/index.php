<?php
    require_once "../vendor/autoload.php";

    $route = new \App\Route;
    echo "This is working!";
    echo "<hr>";
    echo "<pre>";
    print_r($route->getUrl());
    echo "</pre>";
?>