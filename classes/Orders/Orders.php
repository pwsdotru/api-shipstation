<?php
/**
 * Class for get list of orders
 */
class APIShipstation_Orders extends APIShipstation_Request {

  private $filter = array();

  public function __construct($key, $secret) {
    parent::__construct($key, $secret);
    $this->EndPoint = "orders";
  }

  public function query($filter = array()) {
    if (is_array($filter) && count($filter) > 0) {
      $this->filter = $filter;
    }
    return parent::query();
  }

  protected function params() {
    return $this->filter;
  }
}