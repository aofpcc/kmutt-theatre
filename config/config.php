<?php
// www/routing.php
if (preg_match('/\.(?:png|jpg|jpeg|gif|css)$/', $_SERVER["REQUEST_URI"])) {
    return false;
}
else {
    include 'public/index.php';
}
