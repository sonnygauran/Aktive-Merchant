<?php

if (!defined('AKTIVE_MERCHANT_CORE')) {
    define('AKTIVE_MERCHANT_CORE', dirname(__FILE__) . DIRECTORY_SEPARATOR);
}
if (!defined('AKTIVE_MERCHANT_ROOT')) {
    define('AKTIVE_MERCHANT_ROOT', dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR);
}

date_default_timezone_set('UTC');
require_once dirname(__FILE__) .  '/merchant/billing.php';
require_once dirname(__FILE__) .  '/merchant/common.php';
?>
