<?php
error_reporting(E_ALL ^ E_DEPRECATED);
// www/routing.php
if (preg_match('/\.(?:png|jpg|jpeg|gif|css|js)$/', $_SERVER["REQUEST_URI"])) {
    return false;
}
else {
    include 'public/index.php';
}
