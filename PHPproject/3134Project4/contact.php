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

<?php 

if(isset($_POST['name'])) {
    echo 'Your message has been sent ' . $_POST['name'] . '! Thanks for reaching out!';
}
?>
<title>Erickson Guffey Portfolio Site</title>
</head>
<body id="fullpage">
<?php include('header.php'); ?>
            <article class="content" style="margin: 10px 15% 10px 15%;
            border: 1px solid black;">
                    <h2 id="vid">Contact Us!</h2>

<form method="post" action="contact.php">  
  Name: <input type="text" name="name" class="form">
  <br><br>
  E-mail: <input type="text" name="email" class="form">
  <br><br>
  Comment: <textarea name="comment" class="form" rows="8" cols="40" placeholder=""></textarea>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>
            </article>
            <script>
                    window.onscroll = function() {myFunction()};
                    
                    var header = document.getElementById("myHeader");
                    var sticky = header.offsetTop;
                    
                    function myFunction() {
                      if (window.pageYOffset > sticky) {
                        header.classList.add("sticky");
                      } else {
                        header.classList.remove("sticky");
                      }
                    }
                    </script>
</body>
</html>