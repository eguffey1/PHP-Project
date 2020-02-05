<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<?php
$connect = mysqli_connect("localhost", "root", "", "users");

 if(isset($_POST["register"]))  
 {  
      if(empty($_POST["username"]) || empty($_POST["password"]))  
      {  
           echo '<script>alert("Both Fields are required")</script>';  
      }  
      else  
      {  
           $username = $_POST["username"];  
           $password = $_POST["password"];
           $email = $_POST["email"];
           /* This is where my original PHP element begins, until line 27
           No it does not currently operate. The reason it doesn't is that I don't have an email
           server with my own domain set up otherwise this should work. If ini_set() doesn't provide the proper
           parameters, then I am to include a php.ini file which will specify all the necessary parameters. 
           This is to be a demonstration if the user were to register an account that it would 
           automatically generate a welcome email */
           ini_set("SMTP","not_going_to_work@example.com");
           ini_set("smtp_port","25");
           ini_set('sendmail_from', 'eguffeyarmy2@gmail.com'); //return address
           $subject = 'Welcome to Surrelist Nightmare!';
           $message = 'Thank you so much for registering for our site!';
           $headers = 'From: not_going_to_work@example.com';
           mail($email, $subject, $message, $headers); 
           //end of original PHP element  
           $password = password_hash($password, PASSWORD_DEFAULT);  
           $query = "INSERT INTO users(username, password, email) VALUES('$username', '$password', '$email')";  
           if(mysqli_query($connect, $query))  
           {  
                echo '<script>alert("You are now registered!")</script>';  
           }  
      }  
 }  

 ?>  