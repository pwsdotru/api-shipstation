<?php
/**
 * Class APIShipstation_Model_Weight
 * Model for Weight object
 * Details: http://www.shipstation.com/developer-api/#/reference/model-weight
 */
class APIShipstation_Model_Weight extends APIShipstation_Model {
  /** @var double  weight value. */
  public $value = null;
  /** @var string  units of weight. Allowed units are: "pounds", "ounces", or "grams" */
  public $units	= null;
}
