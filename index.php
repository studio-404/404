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
</head>
<body>
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
          <ul class="nav navbar-nav">
            <li class="active"><a href="#" itemprop="url"><span itemprop="Homa page">Home</span></a></li>
            <li><a href="#about" itemprop="url"><span itemprop="About us">About us</span></a></li>
            <li><a href="#portfolio" itemprop="url"><span itemprop="Portfolio">Portfolio</span></a></li>
            <li><a href="#services" itemprop="url"><span itemprop="Services">Services</span></a></li>
            <li><a href="#news" itemprop="url"><span itemprop="News">News</span></a></li>
            <li><a href="#contact" itemprop="url"><span itemprop="Contact">Contact</span></a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>



   <script src="js/javascript.js" type="text/javascript" charset="utf-8"></script> 
</body>
</html>