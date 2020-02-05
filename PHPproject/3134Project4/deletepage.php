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
          <?php include('header.php');
          include('delete.php');
            ?>
          <div class="container" style="width:500px;"> 
      <h3 align="center">Delete Account</h3>  
                <br />  
                <form method="post">  
                     <label>Enter Username</label>  
                     <input type="text" name="username" class="form-control" />  
                     <br />  
                     <input type="submit" name="delete" value="Delete" class="btn btn-info" />  
                     <br />  
                     <p align="center"><a href="form.php">Register</a></p>
                     <br />  
                     <p align="center"><a href="index.php">Home</a></p>  
                </form>
</div>