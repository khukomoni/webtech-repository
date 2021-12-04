<?php

require_once '../model/model.php';

if (isset($_POST['findProduct'])) {

	echo $_POST['Name'];

	try {

		$products = searchProduct($_POST['Name']);
		require_once '../showSearchedProducts.php';
	} catch (Exception $ex) {
		echo $ex->getMessage();
	}
}
