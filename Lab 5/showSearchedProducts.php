<?php
require_once 'controller/productInfo.php';

$products = fetchAllProducts();

?>

<!DOCTYPE html>
<html>

<head>
	<title></title>
	<style></style>
</head>

<body>


	<table>
		<thead>
			<tr>
				<th>Name</th>
				<th>BuyingPrice</th>
				<th>SellingPrice</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($products as $i => $product) : ?>
				<tr>
					<td><a href="searchProduct.php?id=<?php echo $product['ID'] ?>"><?php echo $product['Name'] ?></a></td>
					<td><?php echo $product['BuyingPrice'] ?></td>
					<td><?php echo $product['SellingPrice'] ?></td>
					<td><a href="../editProduct.php?id=<?php echo $product['ID'] ?>">Edit</a>&nbsp<a href="deleteProduct.php?id=<?php echo $product['ID'] ?>">Delete</a></td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>

</body>

</html>