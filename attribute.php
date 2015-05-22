<?php
Mage::getResourceModel('catalog/product')
	->getAttributeRawValue(
		$productId, 
		'attribute_code', 
		$storeId);
