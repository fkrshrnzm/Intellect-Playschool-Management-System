<?php
ob_start();
// Set sessions
if(!isset($_SESSION)){session_start();}

// Database config
$servername = "localhost";
$username = "id20252008_iptestv31";
$password = "Intellect-123";
$dbname = "id20252008_iptestv3";

//create DB Connections
$con = mysqli_connect($servername, $username, $password, $dbname);

//Check DB Connections
if(mysqli_connect_errno()){
    // If there is an error with the connection, stop the script and display the error.
    exit('Failed to connect to MySQL: ' .mysqli_connect_errno());
}
?>