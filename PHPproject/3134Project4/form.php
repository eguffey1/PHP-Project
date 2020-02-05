<!DOCTYPE html>  
 <html>  
      <head>  
      <meta charset="utf-8">
<meta name="viewport" content="width=device-width, inital-scale=1"> <!--Allows for Responsive page-->
<link href="https://fonts.googleapis.com/css?family=Satisfy&display=swap" rel="stylesheet"><!--link to Google Font-->
<link href="https://fonts.googleapis.com/css?family=Manjari&display=swap" rel="stylesheet"><!--link to Google Font-->
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" ><!--bootstrap stylesheet-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script><!--jquery lib-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script><!--popper lib-->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script><!--bootstrap lib-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<link rel="shortcut icon" href="https://images-na.ssl-images-amazon.com/images/I/51wjvDkCbBL._SS40_.jpg"><!--top bar icon-->
<link rel="stylesheet" type="text/css" href="style.css">
      </head>  
      <body>  
      <?php

     if(isset($_POST['username']) && isset($_POST['password'])) {

          $sessionName = "loggedin";
          session_name($sessionName);
          session_start();
          if(isset($_POST['email'])) {
            echo "You have successfully created an account, " . $_POST['username'] . "!";
          }
        }
        include('header.php');
// echo " Currently using: ".memory_get_usage()." bytes of memory; \n";
        ?>
           <div class="container" style="width:500px;">  
                <?php
                include 'database.php'; 
                include 'login.php'; 
                if(isset($_GET["action"]) == "login")  
                {  
                ?>
                <h3 align="center">Login</h3>  
                <br />  
                <form method="post">  
                     <label>Enter Username</label>  
                     <input type="text" name="username" class="form-control" />  
                     <br />  
                     <label>Enter Password</label>  
                     <input type="password" name="password" class="form-control" />  
                     <br />  
                     <input type="submit" name="login" value="Login" class="btn btn-info" />  
                     <br />  
                     <p align="center"><a href="form.php">Register</a></p>
                     <br />  
                     <p align="center"><a href="index.php">Home</a></p>  
                </form>  
                <?php       
                }  
                else  
                {  
                ?>  
                <h3 align="center">Register</h3>  
                <br />  
                <form method="post">  
                     <label>Enter Username</label>  
                     <input type="text" name="username" class="form-control" />  
                     <br />  
                     <label>Enter Password</label>  
                     <input type="password" name="password" class="form-control" />  
                     <br />
                     <label>Enter E-Mail</label>  
                     <input type="text" name="email" class="form-control" />  
                     <br />  
                     <input type="submit" name="register" value="Register" class="btn btn-info" />  
                     <br />  
                     <p align="center"><a href="form.php?action=login">Login</a></p>
                     <br />  
                     <p align="center"><a href="index.php">Home</a></p>    
                </form>  
                <?php  
                }  
                ?>  
           </div>  
      </body>  
 </html>