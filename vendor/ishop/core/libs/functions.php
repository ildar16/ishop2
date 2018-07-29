<?php

function debug($arr, $stop = false)
{
    echo '<pre>';
    print_r($arr);
    echo '</pre>';
    if ($stop){
        exit;
    }

}

function redirect($http = false)
{
    if ($http){
        $redirect = $http;
    }else{
        $redirect = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : PATH;
    }
    header("Location: $redirect");
    exit;
}

function h($str)
{
    return htmlspecialchars($str, ENT_QUOTES);
}