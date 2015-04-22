<?php
/**
 * Class APIShipstation_Model_Address
 * Model for Address object
 * Details: http://www.shipstation.com/developer-api/#/reference/model-address
 */
class APIShipstation_Model_Address {
  /** @var string  Name of person */
  public $name = "";
  /** @var string  Name of company */
  public $company = "";
  /** @var string  First line of address */
  public $street1 = "";
  /** @var string  Second line of address */
  public $street2 = "";
  /** @var string  Third line of address */
  public $street3 = "";
  /** @var string  City */
  public $city = "";
  /** @var string  State */
  public $state	= "";
  /** @var string  Postal Code */
  public $postalCode = "";
  /** @var string  Country Code. The two-character ISO country code is required */
  public $country = "";
  /** @var string  Telephone number */
  public $phone	= "";
  /** @var boolean  Specifies whether the given address is residential */
  public $residential;
  /** @var  string */
  public $addressVerified;
}