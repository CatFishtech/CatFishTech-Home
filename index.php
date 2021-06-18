<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="style1.css" rel='stylesheet' type='text/css' />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
  <title>CatFish Tech| Guaranteed Software Production</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="assests/css/style.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

</head>

<body>
  <div class="header">
    <div class="logo">
      <a href="index.php"><img src="images/logo2.jpeg" alt="logo" align="left"
          style="width:80px;height:80px;"></a>
    </div>
    <h1>CatFish Tech</h1>
    <h2>FOOD ORDERING PLATFORM</h2>
  </div>
  <div class="navbar">
    <a class="active" href="index.php">Home</a>
    <a href="login.php">Login</a>
    <a href="register.php">Signup</a>
  </div>

  <!-- Slide Show -->
  <section>
    <img class="mySlides" src="https://www.ontherocksnow.co.nz/wp-content/uploads/2017/01/spicy-chicken-burger-.jpg"
      style="width:100%">
    <img class="mySlides" src="https://www.groundzeroweb.com/wp-content/uploads/2016/11/Biryani.jpg" style="width:100%">
    <img class="mySlides"
      src="https://d2rd7etdn93tqb.cloudfront.net/wp-content/uploads/2016/08/weird-fast-food-combos-social-081016.jpg"
      style="width:100%">
    <img class="mySlides"
      src="https://2.bp.blogspot.com/-ChSqQAWrT8g/W_vSTFFOQaI/AAAAAAABkZA/Fa1pQS8CUvszTokCEDSMXRMgYpF-6FzhACLcBGAs/w1200-h630-p-k-no-nu/IMG_7488.jpg"
      style="width:100%">

  </section>

  <script>
    // Automatic Slideshow - change image every 3 seconds
    var myIndex = 0;
    carousel();

    function carousel() {
      var i;
      var x = document.getElementsByClassName("mySlides");
      for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
      }
      myIndex++;
      if (myIndex > x.length) { myIndex = 1 }
      x[myIndex - 1].style.display = "block";
      setTimeout(carousel, 3000);
    }
  </script>

  <footer class="footer-distributed">

    <div class="footer-left">

      <h3>CatFishTech<span>Co.</span></h3>

      <p class="footer-links">
        <a href="main.html" class="link-1">Home</a>


        <a href="#">Pricing</a>

        <a href="#">About</a>

        <a href="#">Faq</a>

        <a href="#">Contact</a>
      </p>

      <p class="footer-company-name">CatFishTechCo. © 2021</p>
    </div>

    <div class="footer-center">

      <div>
        <i class="fa fa-map-marker"></i>
        <p><span>Jogolo Street..</span> Jogolo Plaza, Mariakani</p>
      </div>

      <div>
        <i class="fa fa-phone"></i>
        <p>+254759719777</p>
      </div>

      <div>
        <i class="fa fa-envelope"></i>
        <p><a href="mailto:qimate@hotmail.com">support@catfishtech.com</a></p>
      </div>

    </div>

    <div class="footer-right">

      <p class="footer-company-about">
        <span>About the company</span>
        CatFish Tech Co is a software company offering a wide range of software technologies for your business.
      </p>

      <div class="footer-icons">

        <a href="https://www.facebook.com/CatFish-Tech-105013298327778">
          <img src=" https://www.shareicon.net/data/2015/09/10/98764_facebook_512x512.png" alt="facebook"
            style="width:42px;height:42px;"></a>
        <a href="https://www.facebook.com/CatFish-Tech-105013298327778">
          <img
            src="https://w7.pngwing.com/pngs/66/196/png-transparent-whatsapp-ipa-messaging-apps-viber-text-trademark-logo.png "
            alt="whatsapp" style="width:42px;height:42px;"></a>

        <a href="https://www.facebook.com/CatFish-Tech-105013298327778">
          <img src=" https://th.bing.com/th/id/OIP.CqXWN5l4IM2LxlE-H0lHOAHaHa?pid=ImgDet&rs=1" alt="twitter"
            style="width:42px;height:42px;"></a>


      </div>

    </div>

  </footer>

</body>


</html>