<?php

class shop_product_id {

	protected $shop_name;
	protected $product_id;

	function __construct($shop_name, $product_id) {
		$this->shop_name = $shop_name;
		$this->product_id = $product_id;
	}

	function __toString() {
		return $this->shop_name . ':' . $this->product_id;
	}
}

$shop_name = 'Shopping Praça das Moças';
$product_id = 158;
$demo_id = $shop_name . ':' . $product_id;
$demo_name = 'Some Product in shop A';

$all_products = [$demo_id => $demo_name];
$pid = new shop_product_id($shop_name, $product_id);

echo "with type hinting: ";
echo ($demo_name === $all_products[(string) $pid]) ? "ok" : "fail";
echo "\n";

echo "Without type hinting: ";
echo ($demo_name === $all_products[(string) $pid]) ? "ok" : "fail";
echo "\n";

?>
