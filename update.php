<?php 
include 'php/update.php';

session_start();

if($_SESSION['Uloga'] == 'admin'){

?>

<!DOCTYPE html>
<html>
<head>
	<title>Update</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js" type="text/javascript"></script>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="assets/css/main.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/paget.css" />
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
    
    
    
	<div class="header">
		<form action="php/update.php" 
		      method="post">
            <br>
            <br>
		   <h2 class="">UPDATE</h2><hr><br>
		   <?php if (isset($_GET['error'])) { ?>
		   <div class="" role="alert">
			  <?php echo $_GET['error']; ?>
		    </div>
		   <?php } ?>
		   <div class="">
		     <label for="name">Name:</label>
		     <input type="name" 
		           class="" 
		           id="name" 
		           name="Ime_prezime" 
		           value="<?=$row['Ime_prezime'] ?>" >
		   </div>

		   <div class="">
		     <label for="email">Email:</label>
		     <input type="email" 
		           class="" 
		           id="email" 
		           name="Email" 
		           value="<?=$row['Email'] ?>" >
		   </div>
		   <div class="">
		     <label for="email">Pass:</label>
		     <input type="password" 
		           class="" 
		           id="password" 
		           name="Lozinka" 
		           value="<?=$row['Lozinka'] ?>" >
		   </div>
		   <div class="">
		     <label for="email">Role:</label>
             <input type="text" name="Uloga" value="<?=$row['Uloga'] ?>" >
            
            <br><br>

		   <input type="text" 
		          name="id"
		          value="<?=$row['korisnik_id']?>"
		          hidden >

		   <button type="submit" 
		           class=""
		           name="update">Update</button>
		  <br>
		  <a class="button" href="view.php" >BACK TO VIEW</a>
		    
	    </form>
	</div>
</body>
</html>

<?php
}
?>

    