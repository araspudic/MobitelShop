<?php
include 'db_connection.php';

$conn = OpenCon();
session_start();



    $cus_id = $_SESSION['korisnik_id'];
    $cus_name = $_SESSION['Ime_prezime'];
    echo "kor id:" . "$cus_id";
    echo "kor ime:" . "$cus_name";
    
    
?>


<!DOCTYPE HTML>

<html>
	<head>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js" type="text/javascript"></script>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" href="assets/css/paget.css" />
	</head>
	


	<body>
	    <script src="app.js"></script>
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



 
<!--cart summery-->
<div class="split right">
  <div class="centered">
      <form method="POST" action="cartt.php?action=add">
        <div class="col-25">
          <div class="container">
            <h4>Cart summary
              <span class="price" style="color:black">
                <i class="fa fa-shopping-cart"></i>
                <b></b><br/>
              </span><br/><br/>
            </h4>
            <?php
                    
                  $total = 0;
                
                  
                  $query = "SELECT * FROM mobitel INNER JOIN kosaricas ON kosaricas.proizvod_fk = mobitel.proizvod_id WHERE kosaricas.korisnik_fk = '" . $cus_id ."'";
                  
                  $result = mysqli_query($conn, $query) or die( mysqli_error($con));
                  while($row = mysqli_fetch_array($result))
                    {
                      echo'
                            <p>Naziv: '.$row[1].' <span class="price">KM'.$row[6].'</span>  <button name="btn_remove">Remove</button></p>
                            
                            
                          ';
                          $total = $total + $row[6];
                          $price = $row['Cijena'];
                          $id = $row[0];
                          
                    }
                    if (isset($_POST["btn_remove"])){
                        
                        $conn = mysqli_connect('localhost', 'id17498138_dbandro', '6}I-w7~3A^QXdBrS', 'id17498138_database');
                        $query = "DELETE FROM `kosaricas` WHERE `kosaricas`.`proizvod_fk` = '$id'";
                        if(mysqli_query($conn, $query) or die( mysqli_error($conn)))
                          {
                               echo '<script>window.location="cartt.php"</script>';
                          }
    }
                    if (isset($_POST["btn_order"])){
                                    $query="SELECT * FROM `kosaricas` WHERE korisnik_fk='$cus_id'";
                                    
                                    
                                    $conn = new mysqli('localhost', 'id17498138_dbandro', '6}I-w7~3A^QXdBrS', 'id17498138_database');
                                    $result = mysqli_query($conn, $query) or die( mysqli_error($conn));
                                    while($row = mysqli_fetch_array($result))
                                    {
                                      //simple order records insert into order table
                                       mysqli_query($conn, "INSERT INTO `kupovinas` (`id_proizvoda`, `id_korisnika`, `Placeni_iznos`) VALUES ('$row[2]', '$cus_id', '$price')") or die( mysqli_error($conn));
                                        
                                     }
                                     
                                     //delete current data drom from cart table after place order
                                     mysqli_query($conn, "delete from kosaricas where korisnik_fk='$cus_id'") or die( mysqli_error($conn));
                                     //order successfully message
                                     echo '<script>alert("Order placed successfully")</script>';
                                     //redirect site
                                     echo '<script>window.location="shop.php"</script>';
  }
             ?>
            <hr>
            <p>Total <span class="price" style="color:black"><b>KM<?php echo''.$total.''; ?></b></span></p>
            <hr>
            <p><button name="btn_order">Order</button></p>
            <a class="button" href="shop.php">BACK TO SHOP</a>
          </div>
        </div>
      </form>
 </div>
</div>
</body>
</html>

<?php


  
 

?>
<?php

?>
