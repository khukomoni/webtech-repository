<?php  
require_once '../model/model.php';


if (isset($_POST['editProduct'])) {
	//var_dump($_POST);
	//exit();
	$data['name'] = $_POST['name'];
	$data['buyingPrice'] = $_POST['buyingPrice'];
	$data['sellingPrice'] = $_POST['sellingPrice'];

	// var_dump($data);
	// exit();

  if (editProduct($_POST['id'], $data)) {
  	echo 'Successfully Edited!!';
  	//redirect to showStudent
  	header('Location: ../editProduct.php?id=' . $_POST["id"]);
  }
} else {
	echo 'You are not allowed to access this page.';
}
