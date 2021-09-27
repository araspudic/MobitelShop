<?php
include 'db_connection.php';

$conn = OpenCon();
session_start();



$user = $_SESSION['korisnik_id'];
$did = $_GET['id'];

$sql ="INSERT INTO `kosaricas`(`korisnik_fk`, `proizvod_fk`, `Kolicina`) VALUES ('$user','$did','1')";

$result = $conn->query($sql);
    if ($result == TRUE){
        header("Location: shop.php");
	    exit();
   
    }else{
        echo "Error: ". $sql . "<br>". $conn->error;
    }

    
    $conn->close();
?>

