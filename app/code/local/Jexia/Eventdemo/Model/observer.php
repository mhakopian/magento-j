<?php
class Jexia_Eventdemo_Model_Observer {
  public function Mytestmethod($observer) {
    $event = $observer->getEvent(); //Fetches the current event
    $product = $event->getProduct();
    $eventmsg = "Current Event Triggered : " . $event->getName() . "Currently Added Product : " . $product->getName();
    //Adds Custom message to shopping cart
    echo Mage::getSingleton('checkout/session')->addSuccess($eventmsg);
    //Your Custom Logic Here
    //you can use print_r($product) here to get more details
    print_r($product);
  }
}
