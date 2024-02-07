<?php
// base directory
$base_dir = __DIR__;

// server protocol
$protocol = empty($_SERVER['HTTPS']) ? 'http' : 'https';

// domain name
$domain = $_SERVER['SERVER_NAME'];
$urlpath = $_SERVER['REQUEST_URI'];
$hosturl = $_SERVER['HTTP_HOST'];

$drupalurl = 'https://dev-gametest.pantheonsite.io'; 


?>