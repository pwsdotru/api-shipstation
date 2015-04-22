<?php
/**
 * Common class for API request
 */
class APIShipstation_Request {
  private $APIKey = null;
  private $APISecret = null;

  protected $EndPoint = null;
  protected $HttpMethod = "get";

  /**
   * @param $key - API Key for access to API
   * @param $secret - API Secret
   */
  public function __construct($key, $secret) {
    $this->APIKey = $key;
    $this->APISecret = $secret;
  }

  public function query() {

    $json = $this->curl();
    $data = json_decode($json, true);
    if (isset($data["Head"]) && isset($data["Head"]["ErrorCode"])) {
      $this->ErrorResponse = $data["Head"];
      return null;
    }
    return $data;
  }

  protected function params() {
    return "";
  }
  /**
   * Return error message for last API call
   * @return string
   */
  public function error() {
    if (isset($this->ErrorResponse) && is_array($this->ErrorResponse) && isset($this->ErrorResponse["ErrorCode"])) {
      return $this->ErrorResponse["ErrorMessage"];
    }
    return "";
  }
  /**
   * Make request to API url
   * @return string
   */
  private function curl() {
    $url = trim(API_SHIPSTATION_URL, "/") . "/" . $this->EndPoint;
    if ($this->HttpMethod == "get") {
      $query = $this->params();
      if ($query != "") {
        $url .= "?" . $query;
      }
      $method = "get";
    } else {
      $query = $this->params();
      if (is_object($query)) {
        $body = json_encode($query);
      } else {
        $body = "";
      }
      $method = "post";
    }
    // Open Curl connection
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION,1);
    curl_setopt($ch, CURLOPT_USERPWD, $this->APIKey . ":" . $this->APISecret);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    if ($method == "post") {
      curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
      curl_setopt( $ch, CURLOPT_POSTFIELDS, $body);
      curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
    }
    $data = curl_exec($ch);
    curl_close($ch);
    return $data;
  }
}