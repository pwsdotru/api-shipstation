<?php
/**
 * Class for get info for order
 */
class APIShipstation_Order extends APIShipstation_Request {

  private $order_number = null;

  public function __construct($key, $secret) {
    parent::__construct($key, $secret);
    $this->EndPoint = "orders";
  }

  public function get($number = null) {
    if ($number !== null) {
      $this->order_number = $number;
    }
    $response = $this->query();
    if (is_array($response) && isset($response["orders"]) &&
      is_array($response["orders"]) && isset($response["orders"][0])) {
      return new APIShipstation_Model_Order($response["orders"][0]);
    }
    $this->ErrorResponse["response_body"]["Message"] = "Order # " . $this->order_number . " not found";
    $this->ErrorResponse["http_code"] = 404;
    return null;
  }

  protected function params() {
    return array("orderNumber" => $this->order_number);
  }
}