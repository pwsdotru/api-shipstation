<?php
/**
 * Common class for API request
 */
class APIShipstation_Request {
  private $APIKey = null;
  private $APISecret = null;

  protected $EndPoint = null;
  protected $HttpMethod = "get";

  public $IsDebug = false;
  /**
   * @param $key - API Key for access to API
   * @param $secret - API Secret
   */
  public function __construct($key, $secret) {
    $this->APIKey = $key;
    $this->APISecret = $secret;
  }

  public function query() {
    $info = null;
    $json = $this->curl($info);
    if (is_array($info) && isset($info["http_code"]) && $info["http_code"] == 200) {
      return json_decode($json, true);
    }
    $info["response_body"] = json_decode($json, true);
    $this->ErrorResponse = $info;
    return null;
  }

  protected function params() {
    return "";
  }
  /**
   * Return error message for last API call
   * @return string
   */
  public function error() {
    $error_str = "";
    if (isset($this->ErrorResponse) && is_array($this->ErrorResponse)) {
      if(isset($this->ErrorResponse["http_code"])) {
        $error_str .= $this->ErrorResponse["http_code"] . ": ";
      }
      if(isset($this->ErrorResponse["response_body"]) && isset($this->ErrorResponse["response_body"]["Message"])) {
        $error_str .=  $this->ErrorResponse["response_body"]["Message"];
      }
      if(isset($this->ErrorResponse["response_body"]) && $this->IsDebug) {
        $error_str .= "\n\n" . print_r($this->ErrorResponse["response_body"], true);
      }
    }
    return $error_str;
  }
  /**
   * Make request to API url
   * @return string
   */
  private function curl(&$info) {
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
    $info = curl_getinfo($ch);
    curl_close($ch);
    return $data;
  }
}