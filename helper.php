<?php

function dd($data) {
    echo '<pre>';
    var_dump($data);
    echo '</pre>';
    die();
}

function redirect($url) {
    header("Location: $url");
    die();
}