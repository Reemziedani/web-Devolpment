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
  <title>Registration</title>
</head>
<body style="background-image: url('./img/reg.jpg'); background-repeat: no-repeat; background-size: cover;">
  
  <!-- nav start -->
  <?php
include 'nav.php';
  ?>
  <!-- nav end -->

 
  <!-- main start -->
  <div class="container" style="background-color: rgba(0, 0, 0, 0.137); height: 100vh; width: 100vw;"  >
     <div class="row justify-content-center">
        <div class="col-6"  style="margin-top: 20px;">
            <h1>REGISTER TO OUR COURSE</h1>
            <p style="margin-top: 30px;">Donec ipsum lorem, sodales a sagittis ut, tristique purus. Aenean in est pretium lectus euismod facilisis. Aliquam dapibus rhoncus ex quis fringilla. Proin interdum eros mauris,hendrerit suscipit lectus cursus et.</p>
            <a href="#" class="btn btn-success btn-lg active" role="button" aria-pressed="true" style="margin-top: 10px;">Know more</a>
            <a href="#" class="btn btn-danger btn-lg active" role="button" aria-pressed="true" style="margin-top: 10px;">Get started</a>
        </div>
        </div>
        <div class="row justify-content-center">
    <div class="col-6">
        <form>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputEmail4">Email</label>
              <input type="email" class="form-control" id="inputEmail4">
            </div>
            <div class="form-group col-md-6">
              <label for="inputPassword4">Password</label>
              <input type="password" class="form-control" id="inputPassword4">
            </div>
          </div>
          <div class="form-group">
            <label for="inputAddress">Address</label>
            <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
          </div>
          <div class="form-group">
            <label for="inputAddress2">Address 2</label>
            <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputCity">City</label>
              <input type="text" class="form-control" id="inputCity">
            </div>
            <div class="form-group col-md-4">
              <label for="inputState">State</label>
              <select id="inputState" class="form-control">
                <option selected>Choose...</option>
                <option>...</option>
              </select>
            </div>
            <div class="form-group col-md-2">
              <label for="inputZip">Zip</label>
              <input type="text" class="form-control" id="inputZip">
            </div>
          </div>
          <div class="form-group">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="gridCheck">
              <label class="form-check-label" for="gridCheck">
                Check me out
              </label>
            </div>
          </div>
          <button type="submit" class="btn btn-primary">Sign in</button>
          </form>
        </div>
        </div>
        
         <!-- <div class="col-6" style="margin-top: 50px;"> -->
            <!-- <h1>REGISTER HERE</h1>
            <div class="col-12">
               <label for="">E-mail address</label>
               <input type="email" name="email" placeholder="Enter your E-mail address">
            </div>
           <div class="col-12">
              <label for="">First name</label>
              <input type="text" name="fname" placeholder="Enter your first name">
           </div>
            <div class="col-12">
            <label for="">Last name</label>
            <input type="text" name="lname" placeholder="Enter your last name">
            </div>
            <div class="col-12">
               <label for="">phone</label>
               <input type="tel" name="phone" >
            </div>
            <div class="col-12">
               <label for="">city</label>
               <select id="city">
                  <option value="Den Haag">Den Haag</option>
                  <option value="Leiden">Leiden</option>
                  <option value="Amsterdam">Amsterdam</option>
                  <option value="Utrcht">Utrcht</option>
                </select>
            </div>
            <div class="col-12">
               <label for="">Street</label>
               <input type="text" name="Street">
            </div>
            <div class="col-12">
               <label for="">House number</label>
               <input type="tel" name="house" >
            </div>
            <div class="col-12">
               <label for="">Postal Code</label>
               <input type="text" name="post" >
            </div> -->
        <!-- </div> -->
     </div>
  </div>

  <!-- main end -->
  

<!-- footer -->
<!-- <footer class=" bg-dark text-info">
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
</footer> -->














  <!-- jquery & js bootstrap links -->
  <script src="node_modules/jquery/dist/jquery.min.js"></script>
  <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>