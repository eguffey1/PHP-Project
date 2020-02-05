<?php

if(isset($_POST["login"]))  
{
     if(empty($_POST["username"]) || empty($_POST["password"]))  
     {  
          echo '<script>alert("Both Fields are required")</script>';  
     }  
     else  
     {  
          $username = $_POST["username"];
          $password = $_POST["password"];
          $query = "SELECT * FROM users WHERE username = '$username'";  
          $result = mysqli_query($connect, $query); 
          if(mysqli_num_rows($result) > 0)  
          {  
               while($row = mysqli_fetch_array($result))  
               {  
                    if(password_verify($password, $row["password"]))  
                    {  
                         //return true;  
                         $_SESSION["username"] = $username;  
                         header("location:index.php");
                    }  
                    else  
                    {  
                         //return false;  
                         echo '<script>alert("Invalid User Login, please re-enter username/password")</script>';  
                    }  
               }  
          }  
          else  
          {  
               echo '<script>alert("Invalid User Login, please re-enter username/password")</script>';  
          }  
     }  
}  
?>