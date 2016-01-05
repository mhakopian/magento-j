<?php
// test.php
define('MAGENTO_ROOT', getcwd());
$mageFilename = MAGENTO_ROOT . '/app/Mage.php';
include $mageFilename;
 
Mage::app();
$pass = 'jexia.com1'; // the password which you want to use to login
Zend_Debug::dump(Mage::helper('core')->getHash($pass, 2));
