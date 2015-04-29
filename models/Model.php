<?php

/**
 * Class APIShipstation_Model common class for data models
 */
class APIShipstation_Model {

  /**
   * Remove from class unused properties
   */
  public function prepare() {
    $vars = get_object_vars($this);
    foreach($vars AS $name => $value) {
      if ($value === null) {
        unset($this->$name);
      }
    }
    return $this;
  }

  /**
   * Map - set object value by map and from src array
   * @param $src - source array with data
   * @param $map - map array "property of object" => "key in src array"
   * @return $this
   */
  public function map($src, $map) {
    $vars = get_object_vars($this);
    foreach($map AS $property => $key) {
      $value = "";
      if(is_array($key)) {
        $val = array();
        foreach($key AS $k) {
          if (isset($src[$k]) && $src[$k] != "") {
            $val[] = $src[$k];
          }
        }
        $value = implode(" ", $val);
      } else {
        if (isset($src[$key])) {
          $value = $src[$key];
        }
      }
      if (array_key_exists($property, $vars) && $value != "")  {
        $this->$property = $value;
      }
    }
    return $this;
  }
}
