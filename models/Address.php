<?php
/**
 * Class APIShipstation_Model_Address
 * Model for Address object
 * Details: http://www.shipstation.com/developer-api/#/reference/model-address
 */
class APIShipstation_Model_Address extends APIShipstation_Model {
  /** @var string  Name of person */
  public $name = null;
  /** @var string  Name of company */
  public $company = null;
  /** @var string  First line of address */
  public $street1 = "";
  /** @var string  Second line of address */
  public $street2 = null;
  /** @var string  Third line of address */
  public $street3 = null;
  /** @var string  City */
  public $city = "";
  /** @var string  State */
  public $state	= null;
  /** @var string  Postal Code */
  public $postalCode = "";
  /** @var string  Country Code. The two-character ISO country code is required */
  public $country = null;
  /** @var string  Telephone number */
  public $phone	= null;
  /** @var boolean  Specifies whether the given address is residential */
  public $residential = null;
  /** @var  string */
  public $addressVerified = null;
}