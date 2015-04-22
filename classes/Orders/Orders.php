<?php
/**
 * Class for get list of orders
 */
class APIShipstation_Orders extends APIShipstation_Request {

  public function __construct($key, $secret) {
    parent::__construct($key, $secret);
    $this->EndPoint = "orders";
  }
}