<?php
define("TOUCHED_BY_PORTAL", 0);
define("TOUCHED_BY_API", 1);
define("TOUCHED_BY_CONNECTOR", 2);

define("PRODUCT_TYPE_PRODUCT", 0);
define("PRODUCT_TYPE_SERVICE", 1);
define("PRODUCT_TYPE_VIRTUAL", 2);
define("PRODUCT_TYPE_PAYMENT", 3);
define("PRODUCT_TYPE_SHIPPING", 4);
define("PRODUCT_TYPE_DISCOUNT", 5);
define("PRODUCT_TYPE_OTHER", 6);

define("EVENT_DELETE_PRODUCT","deleteProduct");
define("EVENT_DELETE_PRODUCT_FROM_CATEGORY","deleteProductCategory");
define("EVENT_DELETE_PURCHASE","deletePurchase");
define("EVENT_DELETE_CATEGORY","deleteCategory");


?>