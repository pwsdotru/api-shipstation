<?php
/**
 * Class APIShipstation_Model_OrderItem
 * Model for OrderItem object
 * Details: http://www.shipstation.com/developer-api/#/reference/model-orderitem
 */
class APIShipstation_Model_OrderItem extends APIShipstation_Model {
  /** @var integer  The system generated identifier for the OrderItem. This is a read-only field. */
  public $orderItemId = null;
  /** @var string  An identifier for the OrderItem in the originating system. */
  public $lineItemKey = null;
  /** @var string  The SKU (stock keeping unit) identifier for the product associated with this line item. */
  public $sku = null;
  /** @var string  The name of the product associated with this line item. */
  public $name = null;
  /** @var string  The public URL to the product image. */
  public $imageUrl = null;
  /** @var APIShipstation_Model_Weight	The weight of a single item. */
  public $weight = null;
  /** @var integer  The quantity of product ordered. */
  public $quantity = null;
  /** @var double  The sell price of a single item. */
  public $unitPrice = null;
  /** @var string  The location of the product within the seller's warehouse (e.g. Aisle 3, Shelf A, Bin 5) */
  public $warehouseLocation = null;
  /** @var array APIShipstation_Model_ItemOption[] */
  public $options = null;
  /** @var integer The identifier for the Product Resource associated with this OrderItem. */
  public $productId = null;
}