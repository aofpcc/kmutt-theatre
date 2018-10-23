<?php
require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../config/database.php';


$klein = new \Klein\Klein();
$database = new \Database();

require_once __DIR__ . '/../groups/group1.php';

$klein->dispatch();
