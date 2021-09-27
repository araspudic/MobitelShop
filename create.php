<?php
include 'db_connection.php';

$conn = OpenCon();
session_start();

if($_SESSION['Uloga'] == 'admin'){


if (isset($_POST['submit'])){
    $first_name = $_POST['firstname'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $uloga = $_POST['uloga'];
    
    
    

    $sql = "INSERT INTO `korisniks`(`Ime_prezime`, `Email`, `Lozinka`, `Uloga`) VALUES ('$first_name', '$email', '$password', '$uloga')";
    //text
    //text
    $result = $conn->query($sql);
    if ($result == TRUE){
        echo '<span style="font-size:15px; font-color: red; display: inline-block; padding-top:7em;">' . 'Uspjesno dodan kornsik.' . '</span>';
    }else{
        echo "Error: ". $sql . "<br>". $conn->error;
    }

   
    $conn->close();
}
?>

<!DOCTYPE html>
<html>
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js" type="text/javascript"></script>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" type="text/css" href="assets/css/main.css" />
        <link rel="stylesheet" type="text/css" href="assets/css/paget.css" />
        <title>VIEW</title>
    </head>
    <body>
        <script src="app.js"></script>
		
	
		<!-- Page transision -->
		<div class="loader-wrapper">
			<span class="loader"><span class="loader-inner"></span></span>
		</div>
        
        <!-- Header -->
			<header id="header">
                    

				<div class="inner">	
				
						<a href="index.php">POČETNA</a>
						<a href="vizija.pdf">VIZIJA</a>	
                        <a href="/login-system/logout.php">User: <?php echo $_SESSION['name']; ?>. Role:<?php echo $_SESSION['Uloga']; ?> Logout?</a>
                        
                        <label>ADMIN MENU</label>
                            <select onchange="location = this.value;">
                            <option value="index.php">SELECT</option>
                            <option value="view.php">VIEW</option>
                            <option value="create.php">CREATE</option>
                            </select>
                            
                       
				</div>
				 
			</header>
        
    

    
    <div vlass="banner">
    <form action="" method="POST">
        <br>
        <br>
        <br>
        <br>
        <h1>CREATE</h1>
        <fieldset>
            Ime kor.:
            <input type="text" name="firstname">
            <br>
            Email:&nbsp&nbsp&nbsp
            <input type="email" name="email">
            <br>
            Lozinka:
            <input type="password" name="password">
            <br>
            Uloga:&nbsp&nbsp
            <input type="radio" checked="checked" name="uloga" value="admin" />admin
            <input type="radio" name="uloga" value="korisnik" />korisnik
           

            <br><br>
            <input type="submit" name="submit" value="submit">
        </fieldset>
    </form>
</div>
</body>
</html>

<?php
    }else{
       header("Location: index.php");
	exit();
    }
?>