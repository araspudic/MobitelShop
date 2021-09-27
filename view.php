<?php
include 'db_connection.php';

$conn = OpenCon();
session_start();



if($_SESSION['Uloga'] == 'admin'){

    // function to connect and execute the query
    function filterTable($query){
        $conn = OpenCon();
        $filter_Result = mysqli_query($conn, $query);
        return $filter_Result;
        CloseCon($conn);
    }

    if(isset($_POST['search'])){
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM korisniks WHERE CONCAT(`korisnik_id`, `Ime_prezime`, `Email`, `Lozinka`, `Uloga`) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
    
    }else {
        $query = "SELECT * FROM korisniks";
        $search_result = filterTable($query);
    }

    

?>

<?php
   
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
        <br>
                    <br>
                <form class="moblista" action="view.php" method="post">
                    
                    <input type="text" name="valueToSearch" placeholder="Search"><br><br>
                    <input type="submit" name="search" value="SEARCH"><br><br>
                    
                </form>
        
       
    <div>
    
    <h3 class="naslov">USERS</h3>
    
     
    <table class="center">
        
        <thead>
           
            <tr>
                <th>ID</th>
                <th>Ime i prezime</th>
                <th>Email</th>
                <th>Lozinka</th>
                <th>Uloga</th>
            </tr>
        </thead>
    <tbody>
        <?php
        $conn = new mysqli('localhost', 'id17498138_dbandro', '6}I-w7~3A^QXdBrS', 'id17498138_database');  

        $sql = "SELECT * FROM korisniks";
        $result = mysqli_query($conn, $query);
        
        if(mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_array($result)){
        ?>
            <tr>
            <td><?php echo $row['korisnik_id']; ?></td>
            <td><?php echo $row['Ime_prezime']; ?></td>
            <td><?php echo $row['Email']; ?></td>
            <td><?php echo $row['Lozinka']; ?></td>
            <td><?php echo $row['Uloga']; ?></td>
            <td><a class="button" href="update.php?id=<?php echo $row['korisnik_id']; ?>">Edit</a><a class="button" href="delete.php?id=<?php echo $row['korisnik_id']; ?>">Delete</a></td>
            
            </tr>
          
        
    <?php  }
            }
    }else{
        header("Location: index.php?error=Zabrana");
        exit();
    }  
    CloseCon($conn);
        ?>
        
    </tbody>
    </table>
    </div>

</body>
</html>

