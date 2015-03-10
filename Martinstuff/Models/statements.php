<?php

function getAllCategories(){
	$query = "SELECT * FROM categories";
	$result = $conn->query($query);

	$result->close();
	$conn->close();
}

function getAllProducts($category){
	$query = "SELECT * FROM products WHERE category = $category";
	$result = $conn->query($query);

	$result->close();
	$conn->close();
}

function getSingleProduct($ID){
	$query = "SELECT * FROM products WHERE productid = $ID";
	$result = $conn->query($query);

	$result->close();
	$conn->close();
}