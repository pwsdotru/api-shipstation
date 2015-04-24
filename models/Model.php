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
}
