<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "music";

// Create connection
// $conn = mysqli_connect($servername, $username, $password,$db);

// Check connection
// if (!$conn) {
//   die("Connection failed: " . mysqli_connect_error());
// }


$conn = mysqli_connect($servername,$username,$password,$db) or die("error");
$selectdb= mysqli_select_db($conn,$db) or die("error");



if(isset($_COOKIE["login"])){
  $login = $_COOKIE["login"];
}else{
  $login=0;
}
?>