<!DOCTYPE html>
<html>

<head>
    <title>Insert Page page</title>
    <meta http-equiv="refresh" content="0; url='CommentsAdmin.php'" />
</head>

<body>
    <?php
		// servername => localhost
		// username => root
		// password => empty
		// database name => portfolio_website
		$conn = mysqli_connect("localhost", "root", "", "portfolio_website");
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		// Taking all values from the form data(input)
		$user_name = $_REQUEST['user_name'];
		$comment = $_REQUEST['comment'];
		$current_time =  date("Y/m/d H:i:s");
		// Performing insert query execution
		$sql = "INSERT INTO comments VALUES ('', '$user_name', '$comment', '$current_time')";
		//if succesvol
		if(mysqli_query($conn, $sql)){
			echo "<h3>data stored in a database successfully."
				. " Please browse your localhost php my admin"
				. " to view the updated data</h3>";
			echo nl2br("\n$user_name\n $comment\n");
		} 		//if failed
		else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		// Close connection
		mysqli_close($conn);
		?>
</body>

</html>