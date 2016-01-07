<?php
class Jexia_Eventdemo_Model_Observer {

  public function logCustomer($observer) {
    $customer=$observer->getCustomer();
    Mage::log('['.date('dd-mm-yyyy H:i:s').']'.$customer->getName.' Logged in at: ');
  }

}
