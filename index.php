<?php

require_once 'vendor/autoload.php';

use App\Container;

$urls = Container::url();
$url = isset($_GET['url']) ? $_GET['url'] : 'home';
$urls->urls($url);

 ?>
