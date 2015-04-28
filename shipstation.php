<?php
/**
 * Main section for init ShipStation API
 */

require_once(__DIR__ . "/settings.php");

/* Models */
require_once(API_SHIPSTATION_MODEL_PATCH . "/Model.php");
require_once(API_SHIPSTATION_MODEL_PATCH . "/Address.php");
require_once(API_SHIPSTATION_MODEL_PATCH . "/Order.php");
require_once(API_SHIPSTATION_MODEL_PATCH . "/AdvancedOptions.php");
/* Common */
require_once(API_SHIPSTATION_CLASS_PATCH . "/Request.php");
/* Orders */
require_once(API_SHIPSTATION_CLASS_PATCH . "/Orders/Orders.php");
require_once(API_SHIPSTATION_CLASS_PATCH . "/Orders/CreateOrder.php");