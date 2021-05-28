<?php
function OpenCon()
 {
 $dbhost = "sql6.freesqldatabase.com";
 $dbuser = "sql6415415";
 $dbpass = "aUXv9VRmD7";
 $db = "sql6415415";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 
 return $conn;
 }
 
function CloseCon($conn)
 {
 $conn -> close();
 }
   
?>