<?php
	require_once('siteRoot.php');
	session_start();
	if(!isset($_SESSION['email'])){
		header('Location: index.php');
	}
	require_once('connection.php');
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Cart | E-Store</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/main.css" rel="stylesheet" type="text/css">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
<?php
	require_once('navbarLoggedIn.php');
?>
	<div class="container-fluid" style="margin-top: 80px">
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Item Number</th>
                            <th>Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
							$sum = 0;
							$id = null;
							$query = "SELECT Id, Price FROM items WHERE Cart = 1";
							$result = $conn->query($query);
							while($row = mysqli_fetch_array($result)) {
								$sum += $row['Price'];
								$id = $row['Id'].', ';
								echo "<tr><td>"."#".$row['Id']."</td><td>".$row['Price']."</td><td><a href='remove.php?id={$row['Id']}' style='color: #0000ff;'>Remove</a></td></tr>";
							}
							$id?$btnState='active':$btnState='disabled';
							echo "<tr><td>Total</td><td>".$sum."</td><td><a href='success.php?itemsid=".$id."' class='btn btn-primary $btnState'>Confirm</a></td></tr>";
						?>
                    </tbody>
                </table>
    		</div>
    	</div>
	</div>
</body>
</html>