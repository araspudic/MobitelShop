<?php 
include '../db_connection.php';

$conn = OpenCon();
session_start(); 


if (isset($_POST['Ime_prezime']) && isset($_POST['Lozinka']) ) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['Ime_prezime']);
	$pass = validate($_POST['Lozinka']);

	if (empty($uname)) {
		header("Location: index.php?error=User Name is required");
	    exit();
	}else if(empty($pass)){
        header("Location: index.php?error=Password is required");
	    exit();
	}else{
		$sql = "SELECT * FROM korisniks WHERE Ime_prezime='$uname' AND Lozinka='$pass'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['Ime_prezime'] === $uname && $row['Lozinka'] === $pass) {
            	$_SESSION['Ime_prezime'] = $row['Ime_prezime'];
            	$_SESSION['name'] = $row['Ime_prezime'];
            	$_SESSION['Uloga'] = $row['Uloga'];
            	$_SESSION['korisnik_id'] = $row['korisnik_id'];
            	header("Location: ../index.php");
		        exit();
            }else{
				header("Location: index.php?error=Incorect User name or password");
		        exit();
			}
		}else{
			header("Location: index.php?error=Incorect User name or password");
	        exit();
		}
	}
	
}else{
	header("Location: index.php");
	exit();
}

