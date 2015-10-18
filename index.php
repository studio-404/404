<?php
$ip = $_SERVER["REMOTE_ADDR"];
if($ip != "176.73.234.42"){
	header("Location: https://www.facebook.com/404.ge");
}
?>
<!DOCTYPE html>
<html lang="ge">
<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Studio 404</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css" />
  <link rel="stylesheet" type="text/css" href="css/general.css" />
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Open%20Sans:400,400italic,500,500italic,700,900,extrabold" />
	<script src="js/jquery.js" type="text/javascript" charset="utf-8"></script>
	<script src="js/bootstrap.min.js" type="text/javascript" charset="utf-8"></script> 

  <!-- Owl Carousel Assets -->
  <link href="_plugins/owl-carousel/owl.carousel.css" rel="stylesheet" />
  <link href="_plugins/owl-carousel/owl.theme.css" rel="stylesheet" />
  <link href="_plugins/owl-carousel/owl.transitions.css" rel="stylesheet" />

</head>
<body>
  <section class="container studio404-header">
	 <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header" itemscope itemtype="http://schema.org/Organization">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" itemprop="url" href="http://404.ge/"><img src="img/logo.png" itemprop="logo" alt="Studio 404" title="Studio 404" /></a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <div class="turnlanguage"><a href="" itemprop="url"><span itemprop="name">GEO</span></a></div>
          <ul class="nav navbar-nav">
            <li class="active"><a href="#" itemprop="url"><span itemprop="name">Home</span></a></li>
            <li><a href="#about" itemprop="url"><span itemprop="name">About us</span></a></li>
            <li><a href="#portfolio" itemprop="url"><span itemprop="name">Portfolio</span></a></li>
            <li><a href="#services" itemprop="url"><span itemprop="name">Services</span></a></li>
            <li><a href="#news" itemprop="url"><span itemprop="name">News</span></a></li>
            <li><a href="#contact" itemprop="url"><span itemprop="name">Contact</span></a></li>
          </ul>

        </div>

      </div>
    </nav>
  </section>
    <div class="clearer"></div>
    <section class="container studio404-slider">
            <div id="owl-demo" class="owl-carousel">
              <div><img src="http://www.idstyle.com/images/Slider-Home-01-Design1.jpg"></div>
              <div><img src="http://bluemandigital.com/wp-content/uploads/2014/10/slider_3-1500x350.jpg?c3dc6b"></div>
              <div><img src="http://www.idstyle.com/images/Slider-Home-05-Photo1.jpg"></div>
            </div>
    </section>


   <script src="js/javascript.js" type="text/javascript" charset="utf-8"></script> 
   <script src="_plugins/owl-carousel/owl.carousel.js"></script>

    <!-- Demo -->

    <style>
   /* #owl-demo .owl-item div{
      padding:5px;
    }
    #owl-demo .owl-item img{
      display: block;
      width: 100%;
      height: auto;
      -webkit-border-radius: 3px;
      -moz-border-radius: 3px;
      border-radius: 3px;
    }*/
    </style>

    <script>
    $(document).ready(function() {
      $("#owl-demo").owlCarousel({
        autoPlay : 10000,
        stopOnHover : true,
        navigation:true,
        paginationSpeed : 1000,
        goToFirstSpeed : 2000,
        singleItem : true,
        autoHeight : true,
        transitionStyle:"fade"
      });
    });
    </script>
</body>
</html>