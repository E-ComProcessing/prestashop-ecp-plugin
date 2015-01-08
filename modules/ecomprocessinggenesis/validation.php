<?php

include(dirname(__FILE__) . '/../../config/config.inc.php');
include(dirname(__FILE__) . '/../../init.php');

if (!defined('_PS_VERSION_'))
	exit;

include(dirname(__FILE__) . '/ecomprocessinggenesis.php');

$EComProcessingGenesis = new EComProcessingGenesis();
$EComProcessingGenesis->processPayment();