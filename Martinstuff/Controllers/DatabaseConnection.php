<?php
	
	class databaseConnection{
	
		function connect($conn){
			
			if ($conn->connect_errno != 0) //er gaat iets fout ...
			{
				die("Probleem bij het leggen van connectie of selecteren van database");
			}
			else{
				echo "connection established!";
			}	
		}
	}
?>