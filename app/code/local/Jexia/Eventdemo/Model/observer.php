<?php
class Jexia_Eventdemo_Model_Observer {

  public function logCustomer($observer) {
    $customer=$observer->getCustomer();
    //print_r($customer);
    Mage::log('['.date('dd-mm-yyyy H:i:s').']'.$customer->getName.' logged-in');

    return $this;
  }

}
