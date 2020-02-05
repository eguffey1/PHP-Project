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
<link rel="shortcut icon" href="https://images-na.ssl-images-amazon.com/images/I/51wjvDkCbBL._SS40_.jpg">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script><!--top bar icon-->
<link rel="stylesheet" type="text/css" href="style.css">

<?php
echo " Currently using: ".memory_get_usage()." bytes of memory; \n";
?>
      
<title>Erickson Guffey Portfolio Site</title>
</head>
<body id="fullpage">
    <?php
    $sessionName = "loggedin"; 

    if(!isset($_COOKIE[$sessionName])) {
    echo "Cookie named '" . $sessionName . "' is not set!";
} else {
    echo "Cookie '" . $sessionName . "' is set! ";
    echo "Value is: " . $_COOKIE[$sessionName];
}
?>
<?php include('header.php');
 ?>
        <article class="content">
            <h2>How Surrealism Began</h2>   
            <p>
                The term "surrealism" was first coined by Guillaume Apollinaire in a play in 1917. However, the first Surrealist artist didn't come 
                about until 1924 in which the artist Andre Breton defined Surrealism as,<br><br><quote style="position: relative; font-size: .9em; font-style: italic; z-index: -1;">"pure psychic automatism, 
                by which one proposes to express, either verbally, in writing, or by any other manner, the real functioning of thought. Dictation of thought in the 
                absence of all control exercised by reason, outside of all aesthetic and moral preoccupation."</quote><br><br>Joan Miro and Max Ernst were some of the first Surrealist painters, with the latter
                switching his style from Dadaism to Surrealism represented in his collages.
                Surrealism aimed to revolutionize the human experience which would reject the rational vision of life for one that valued the unconsious and dreams and
                they were massively influenced by works of Sigmund Freud and principles of Marxism. Max Ernst’s Europe After the Rain II (1940–42) reflects a fraught moment 
                with a post-apocalyptic vision created at the height of World War II.
            </p>
        <div id="demo" class="carousel slide" data-ride="carousel"> <!--auto scrolling carousel, changed intervals for longer viewing-->
                <!-- Indicators for carousel -->
                <ul class="carousel-indicators" style="visibility: hidden;">
                  <li data-target="#demo" data-slide-to="0" class="active" interval="7500"></li>
                  <li data-target="#demo" data-slide-to="1" interval="7500"></li>
                  <li data-target="#demo" data-slide-to="2" interval="7500"></li>
                  <li data-target="#demo" data-slide-to="3" interval="7500"></li>
                  <li data-target="#demo" data-slide-to="4" interval="7500"></li>
                </ul>
                <!-- The slideshow for carousel -->
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="http://web-archives.mansfield.edu/~art/bkutbay/papyru23.jpg" >
                    <div class="carousel-caption">
                        <h3>Europe After the Rain 2</h3>
                      </div>
                      </div>
                  <div class="carousel-item">
                    <img src="https://www.dalipaintings.com/images/paintings/the-temptation-of-saint-anthony.jpg">
                    <div class="carousel-caption">
                        <h3 class="pic2">The Temptation of Saint Anthony</h3>
                      </div>
                  </div>
                  <div class="carousel-item">
                    <img src="https://www.dalipaintings.com/images/paintings/swans-reflecting-elephants.jpg">
                      <div class="carousel-caption">
                        <h3 class="pic1">Swans Reflecting Elephants</h3>
                        </div>
                  </div>
                  <div class="carousel-item">
                      <img src="https://www.dalipaintings.com/images/paintings/the-persistence-of-memory.jpg">
                        <div class="carousel-caption">
                        <h3 class="pic4">Persistence of Memory</h3>
                          </div>
                </div>
                  <div class="carousel-item">
                      <img src="https://www.dalipaintings.com/images/paintings/the-disintegration-of-the-persistence-of-memory.jpg">
                        <div class="carousel-caption">
                          <h3 class="pic5">The Disintegration of the Persistence of Memory</h3>
                          </div>
                  </div>
              </div> 
                <!-- Left and right controls -->
                <a class="carousel-control-prev" href="#demo" data-slide="prev" style="color: black;">
                  <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#demo" data-slide="next">
                  <span class="carousel-control-next-icon"></span>
                </a>
              </div>
            </article>
        <aside role="complementary"> <!--Aside takes 29% of screen width leaving remaining 3% of width for padding-->
            <h2 style="padding-top: 10px;">What is Surrealism?</h2>
            <iframe width="100%" height="230px" src="https://www.youtube.com/embed/fH1uXlm9qoQ">
</iframe>
        </aside>
        <footer role="contentinfo"><!--footer info, links to references-->
            <p style="text-align: center;">&copy; An Erickson Guffey Production 2019, For Educational Purposes Only
            <br/>Sources: <a href="https://www.artsy.net/article/artsy-editorial-what-is-surrealism" style="color:blue;">Written Content Here, </a>
            <a href="https://www.history.com/topics/art-history/surrealism-history" style="color:blue;">Here, </a>
            <a href="https://www.theartstory.org/artist/breton-andre/" style="color:blue;">and Here; </a>
            <a href="https://www.dalipaintings.com/salvador-dali-paintings.jsp" style="color:blue;">Pics from Here, </a>
            <a href="http://web-archives.mansfield.edu/~art/bkutbay/papyru23.jpg" style="color:blue;">and Here; </a>
            <a href="https://www.youtube.com/embed/fH1uXlm9qoQ" style="color:blue;">Vid from Here</a></p>
        </footer>
        <script> /*js function creates sticky header upon downward scroll, removes property when y offset is at top*/
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