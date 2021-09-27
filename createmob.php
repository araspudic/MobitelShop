<?php
include 'db_connection.php';

$conn = OpenCon();
session_start();

if($_SESSION['Uloga'] == 'admin'){


if (isset($_POST['submit'])){
    $naziv = $_POST['Naziv_proizvoda'];
    $cpu = $_POST['CPU'];
    $ram = $_POST['RAM'];
    $mem = $_POST['Memorija'];
    $ekran = $_POST['Ekran'];
    $cijena = $_POST['Cijena'];
    $slika = $_POST['Slika'];
    $kat = 1;
    
    
    $conn = new mysqli('localhost', 'id17498138_dbandro', '6}I-w7~3A^QXdBrS', 'id17498138_database');

    $sql = "INSERT INTO `mobitel`(`Naziv_proizvoda`, `CPU`, `RAM`, `Memorija`, `Ekran`, `Cijena`, `Slika`, `kategorija_fk`) VALUES ('$naziv', '$cpu', '$ram', '$mem', '$ekran', '$cijena', '$slika', '$kat')";
    //text
    //text
    $result = $conn->query($sql);
    if ($result == TRUE){
       header("Location: shop.php");
	    exit();
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
        
    

    

    <form action="" method="POST">
        <br>
        <br>
        <br>
        <br>
        <h1>ADD PHONE</h1>
        <fieldset>
            
            Naziv:
            <input type="text" name="Naziv_proizvoda">
            <br>
            CPU:
            <input type="text" name="CPU">
            <br>
            RAM:
            <input type="text" name="RAM">
            <br>
            Mem:
            <input type="text" name="Memorija">
            <br>
            Ekran:
            <input type="text" name="Ekran">
            <br>
            Cijena:
            <input type="text" name="Cijena">
            <br>
            Slika:
            <input type="text" name="Slika">
            <br>

            <br><br>
            <input type="submit" name="submit" value="submit">
            <br>
            <a href="shop.php" class="button">BACK TO SHOP</a>
        </fieldset>
    </form>

</body>
</html>

<?php
    }else{
        header('Location: shop.php');
        exit();
    }
    CloseCon($conn);
?>