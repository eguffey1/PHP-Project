<?php 
if(isset($_POST["delete"]))  
{
$randomVar = 0;
if(defined($randomVar)){
if($_POST['username']) {
      $connect = mysqli_connect("localhost", "root", "", "users");
      $username = $_POST['username'];
      $sql = "DELETE * FROM users WHERE username = '$username'";
      mysqli_query($connect, $sql); 
      mysqli_close($connect);
}
}
}
?>