<?php
/**
 * Class for create order
 */
class APIShipstation_CreateOrder extends APIShipstation_Request {

    private $order = null;

    public function __construct($key, $secret) {
      parent::__construct($key, $secret);
      $this->EndPoint = "orders/createorder";
      $this->HttpMethod = "post";
    }

    public function order($order = null) {
      if ($order != null) {
        $this->order = $order;
      }
      return $this->order;
    }

    protected function params() {
      if ($this->order != null && is_object($this->order)) {
        return $this->order;
      }
      return null;
    }
}