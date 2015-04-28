<?php
/**
 * Class APIShipstation_Model_AdvancedOptions
 * Model for Address object
 * Details: http://www.shipstation.com/developer-api/#/reference/model-advancedoptions
 */
class APIShipstation_Model_AdvancedOptions extends APIShipstation_Model {
  /** @var integer Specifies the warehouse where to the order is to ship from.
   * If the order was fulfilled using a fill provider, no warehouse is attached
   * to these orders and will result in a null value being returned. */
  public $warehouseId = null;
  /** @var boolean  Specifies whether the order is non-machinable. */
  public $nonMachinable = null;
  /** @var boolean  Specifies whether the order is to be delivered on a Saturday. */
  public $saturdayDelivery = null;
  /** @var boolean  Specifies whether the order contains alcohol. */
  public $containsAlcohol = null;
  /** @var integer  ID of store that is associated with the order. */
  public $storeId = null;
  /** @var string  Field that allows for custom data to be associated with an order. */
  public $customField1 = null;
  /** @var string  Field that allows for custom data to be associated with an order. */
  public $customField2 = null;
  /** @var string  Field that allows for custom data to be associated with an order. */
  public $customField3 = null;
  /** @var string  Identifies the original source/marketplace of the order. */
  public $source = null;
  /** @var string  Identifies which party to bill. Possible values: "my_account", "recipient", "third_party". */
  public $billToParty = null;
  /** @var string  Account number of billToParty. */
  public $billToAccount = null;
  /** @var string  Postal Code of billToParty. */
  public $billToPostalCode = null;
  /** @var string  Country Code of billToParty. */
  public $billToCountryCode = null;
}