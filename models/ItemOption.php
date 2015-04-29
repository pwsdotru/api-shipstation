<?php
/**
 * Class APIShipstation_Model_ItemOption
 * Model for ItemOption object
 * Details: http://www.shipstation.com/developer-api/#/reference/model-itemoption
 */
class APIShipstation_Model_ItemOption extends APIShipstation_Model {
  /** @var string  Name of item option. Example: "Size" */
  public $name = null;
  /** @var string  The value of the item option. Example: "Medium" */
  public $value = null;
}
