<?php 
include 'db_connection.php';

$conn = OpenCon();
session_start();

if($_SESSION['Uloga'] == 'admin'){



// if the 'id' variable is set in the URL, we know that we need to edit a record
if (isset($_GET['id'])) {
	$pr_id = $_GET['id'];

	// write delete query
	$sql = "DELETE FROM `mobitel` WHERE `proizvod_id`='$pr_id'";

	// Execute the query

	$result = $conn->query($sql);

	if ($result == TRUE) {
		header("Location: shop.php");
	    exit();
	}else{
		echo "Error:" . $sql . "<br>" . $conn->error;
	}
}
}else{
    header('Location: shop.php');
    exit();
}
CloseCon($conn);
?>