<?php

session_start();

define('APP_URL', 'http://localhost/blog');
define('APP_PATH', __DIR__);

include_once APP_PATH . '/helper.php';
include_once APP_PATH . '/db.php';