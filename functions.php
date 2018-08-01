<?php
	function message($id) {
		require('connection.php');
		$query = "SELECT Cart FROM items WHERE Id = ".$id;
		$result = $conn->query($query);
		while($row = mysqli_fetch_array($result)) {
			if($row['Cart'] == 0) {
				return "Add to Cart";
			}else{
				return "Added!";
			}
		}
	}
?>