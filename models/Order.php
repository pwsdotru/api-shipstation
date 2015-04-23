<?php
/**
 * Class APIShipstation_Model_Order
 * Model for Order object
 * Details: http://www.shipstation.com/developer-api/#/reference/model-order
 */
class APIShipstation_Model_Order extends APIShipstation_Model {
  /** @var integer  The system generated identifier for the order. This is a read-only field.*/
  public $orderId = null;
  /** @var string  A user-defined order number used to identify an order. */
  public $orderNumber = null;
  /** @var string  A user-provided key that should be unique to each order. */
  public $orderKey = null;
  /** @var string  The date the order was placed. */
  public $orderDate = null;
  /** @var string  The date the order was paid for. */
  public $paymentDate = null;
  /** @var string  The order's status. Possible values: "awaiting_payment", "awaiting_shipment", "shipped", "on_hold", "cancelled" */
  public $orderStatus = null;
  /** @var string  Identifier for the customer in the originating system. This is typically a username or email address. */
  public $customerUsername = null;
  /** @var string  The customer's email address. */
  public $customerEmail = null;
  /** @var APIShipstation_Model_Address  The recipients billing address. */
  public $billTo = null;
  /** @var APIShipstation_Model_Address  The recipients shipping address. */
  public $shipTo = null;
  /** @var array APIShipstation_Model_OrderItem  Array of purchased items.*/
  public $items	= null;
  /** @var integer  The order total. Please note is this a read-only field. */
  public $orderTotal = null;
  /** @var double  The total amount paid for the Order. */
  public $amountPaid = null;
  /** @var double  The total tax amount for the Order. */
  public $taxAmount	= null;
  /** @var double  Shipping amount paid by the customer, if any. */
  public $shippingAmount = null;
  /** @var string  Notes left by the customer when placing the order. */
  public $customerNotes = null;
  /** @var string  Private notes that are only visible to the seller. */
  public $internalNotes = null;
  /** @var bool  Specifies whether or not this Order is a gift */
  public $gift = null;
  /** @var string  Gift message left by the customer when placing the order. */
  public $giftMessage = null;
  /** @var string  Method of payment used by the customer. */
  public $paymentMethod	= null;
  /** @var string  Identifies the shipping service selected by the customer when placing this order.  */
  public $requestedShippingService = null;
  /** @var string  The code for the carrier that is to be used(or was used) when this order is shipped(was shipped). */
  public $carrierCode = null;
  /** @var string  The code for the shipping service that is to be used(or was used) when this order is shipped(was shipped). */
  public $serviceCode = null;
  /** @var string  The code for the package type that is to be used(or was used) when this order is shipped(was shipped). */
  public $packageCode = null;
  /** @var string  The type of delivery confirmation that is to be used(or was used) when this order is shipped(was shipped). */
  public $confirmation = null;
  /** @var string  The date the order was shipped. */
  public $shipDate = null;
  /** @var string  If placed on hold, this date is the expiration date for this order's hold status. The order is moved back to awaiting_shipment on this date. */
  public $holdUntilDate	= null;
  /** @var Weight  Weight of the order. */
  public $weight = null; //:TODO: Model for Weight
  /** @var  Dimensions  Dimensions of the order. */
  public $dimensions = null; //:TODO: Model for Dimensions
  /** @var InsuranceOptions	 The shipping insurance information associated with this order. */
  public $insuranceOptions = null; //:TODO: Model for InsuranceOptions
  /** @var InternationalOptions	 Customs information that can be used to generate customs documents for international orders. */
  public $internationalOptions = null; //:TODO: Model for InternationalOptions
  /** @var AdvancedOptions	Various advanced options that may be available depending on the shipping carrier that is used to ship the order. */
  public $advancedOptions = null; //:TODO: Model for AdvancedOptions
  /** @var array integer  Array of tagId's. Each tagId identifies a tag that has been associated with this order. */
  public $tagIds = null;
}