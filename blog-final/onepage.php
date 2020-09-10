<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- font -->
  <link href="https://fonts.googleapis.com/css2?family=Catamaran:wght@500;900&family=Overpass:ital,wght@0,100;1,400;1,700&display=swap" rel="stylesheet">
  <!-- css link -->
  <link rel="stylesheet" href="css/myStyle.css">
  <!-- css link boot strap -->
  <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
  <title>one page</title>
</head>
<body>
  
  <!-- nav start -->
  <?php
include 'nav.php';


 ?>
  <!-- nav end -->
 
  <!-- main start -->
    <div class="container start col-lg-6 cont font-weight-bold">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <img src="img/33.jpg" width="200px" height="200px" class="rounded-circle">
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 align-self-center">
                    <?php
                    include 'db.php';
                   $pst_id=$_POST["hidden_id"];
                  // echo $pst_id;
                    $stm=$pdo->query('select * from posts where post_id='.$pst_id); 
                    $row=$stm->fetch(); 
                    ?> 
                    <h1 class="text-info"><?php
                    echo $row['title']; ?> </h1>
                    <p>21-08-2020</p>
                </div>
            </div>
         <div class="row tweede-row">
                <div class="col-lg-12">
                <h2 class="text-danger">Introduction</h2>
                <p class="text-style">
                    <?php
                 echo $row['body'];
                echo "<br>";
                ?>
                </p>
                </div>
        </div>
    </div>
<!-- main end -->


<!-- footer -->
<footer class=" bg-dark text-info">
  <div class="container">
    <div class="row">
      <div class=" col-md-4 footer-col">
        <h3>Contact us</h3>
        <ul>
          <li>
            Leiderdorp, Bolderikkamp 136
          </li>
          <li>
            06 30134072
          </li>
          <li>
            info@gmail.com
          </li>
          
          <div class="social">
            <a href="https://www.facebook.com/"><img src="./img/fb.png" alt="" class="imgbar"></a>
            <a href="https://www.linkedin.com/"><img src="./img/linkd.png" alt=""class="imgbar"></a>
            <a href="https://twitter.com/"><img src="./img/twiter.png" alt=""class="imgbar"></a>
            <a href="https://www.youtube.com/"><img src="./img/tube.png" alt=""class="imgbar"></a>
          </div>
        </ul>
      </div>
      <div class="col-md-4 footer-col footer-co">
        <h3>Usefull links</h3>
        <ul>
          <li>
            <a href="https://www.shafea.com/">Home web site</a>
          </li>
          <li>
            <a href="https://shafea87.github.io/mijnProject/">My githup</a>
          </li>
          <li>
            <a href="https://shafea87.github.io/mijnProject/">My project</a>
          </li>
        </ul>
      </div>
      <div class="col-md-4 footer-col">
        <h3>Where to find us</h3>
        <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d39162.353748780304!2d4.537425999999997!3d52.15892710000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c5c439c1016705%3A0xc097b510889a9002!2s2353%20HR%20Leiderdorp!5e0!3m2!1snl!2snl!4v1597639266111!5m2!1snl!2snl" width="75%" height="75%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
      </div>
    </div>
  </div>
</footer>














  <!-- jquery & js bootstrap links -->
  <script src="node_modules/jquery/dist/jquery.min.js"></script>
  <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>