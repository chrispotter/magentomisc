<?php
error_reporting(E_ALL);

include 'app/Mage.php';
Varien_Profiler::enable();
Mage::setIsDeveloperMode(true);
ini_set('display_errors', 1);
umask(0);
Mage::app('default');
Mage::register('isSecureArea', 1);

//put test code here:
