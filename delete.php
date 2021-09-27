<?php 
include 'db_connection.php';

$conn = OpenCon();



// if the 'id' variable is set in the URL, we know that we need to edit a record
if (isset($_GET['id'])) {
	$user_id = $_GET['id'];

	// write delete query
	$sql = "DELETE FROM `korisniks` WHERE `korisnik_id`='$user_id'";

	// Execute the query

	$result = $conn->query($sql);

	if ($result == TRUE) {
		header("Location: view.php");
	    exit();
	}else{
		echo "Error:" . $sql . "<br>" . $conn->error;
	}
}
CloseCon($conn);
?>