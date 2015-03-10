<?php
	
	include("Index.php");
	include("DatabaseConnection.php");
	$database = new DatabaseConnection();
	
	
	$conn = new mysqli('localhost', 'root', '', 'websites');
	$database->connect($conn);