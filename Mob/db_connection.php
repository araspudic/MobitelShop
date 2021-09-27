<?php
function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "id17498138_dbandro";
 $dbpass = "6}I-w7~3A^QXdBrS";
 $db = "id17498138_database";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 
 return $conn;
 }
 
function CloseCon($conn)
 {
 $conn -> close();
 }
   
?>
