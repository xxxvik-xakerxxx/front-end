<?php
define('ROOT',dirname(__FILE__).'/');
define('SPEED',dirname(__FILE__).'/speed/');
define('APP',dirname(__FILE__).'/application/');
include SPEED.'framework.php';
app::gi()->start();