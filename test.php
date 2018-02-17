<!--<!doctype html>
<html lang="en">
 <head>
  
  <link rel="stylesheet" href="css/style.css">
    <script type="text/javascript" src="js/j2.js"></script>
    <script type="text/javascript" src="js/j3.js"></script>

<style>
*{
margin:0px;
padding:0px;
}

</style>
  <title>GyanKhazana</title>

 </head>
 <body>

  



			<div class="hero"  >
				<ul class="slides">
					<li data-bg-image="images/slider-1.jpg" class="flex-active-slide cover" style="background-image: url(&quot;images/slider-1.jpg&quot;); width: 100%; float: left; margin-top:-8%;position: relative; opacity: 1; display: block; z-index: -2; background-size:cover;background-repeat: no-repeat;background-position: 50% 50%;min-height:550px" >
						<div class="container" style="background:none">
							<div class="slide-content1" style="margin-top:32%">
						
							<h1 style="color:blue;margin-left:70%;font-size:1.5em">Engage with your kids</h1>
							<p style="color:blue;margin-left:70%;font-size:1.2em">By daily message of knowledge</p>
							<a href="landing.jsp" class="button" style="background:#FF0000;color:white;margin-left:75%;font-size:1.3333333333em">Subscribe</a>
							</div>
						</div>
					</li>
					<li data-bg-image="images/slider-2.jpg" class="cover" style="background-image: url(&quot;images/slider-2.jpg&quot;); width: 100%; float: left; margin-top:-8%;position: relative; opacity: 1; display: block; z-index: -2; background-size:cover;background-repeat: no-repeat;background-position: 50% 50%;min-height:550px">
						<div class="container" style="background:none">
							<div class="slide-content1" style="margin-top:32%">
						
							<h1 style="color:blue;margin-left:70%;font-size:1.5em">Engage with your kids</h1>
							<p style="color:blue;margin-left:70%;font-size:1.2em">By daily message of knowledge</p>
							<a href="landing.jsp" class="button" style="background:#FF0000;color:white;margin-left:75%;font-size:1.3333333333em">Subscribe</a>
							</div>
						</div>
					</li>
					<li data-bg-image="images/slider-3.jpg" class="cover" style="background-image: url(&quot;images/slider-3.jpg&quot;); width: 100%; float: left;  position: relative; opacity: 0; display: block; margin-top:-8%; z-index: -2;background-size:cover;background-repeat: no-repeat;background-position: center;background-position: 50% 50%;min-height:530px">
						<div class="container" style="background:none">
							<div class="slide-content1" style="margin-top:32%">
						
							<h1 style="color:white;margin-left:70%;font-size:1.5em">Engage with your kids</h1>
							<p style="color:white;margin-left:70%;font-size:1.2em">By daily message of knowledge</p>
							<a href="landing.jsp" class="button" style="background:#FF0000;color:white;margin-left:75%;font-size:1.3333333333em">Subscribe</a>
							</div>
						</div>
					</li>

					
				</ul>
			
			</div>

						
				
		</div>
 </body>
</html>-->



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/carousel.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <style>
  /* Make the image fully responsive */
  .carousel-inner img {
      width: 100%;
      height: 100%;
  }
 @media only screen and (max-width: 500px) {
    #img {
       margin-top:-10%;
    }

}

  </style>
</head>
<body>

<div id="demo" class="carousel slide" data-ride="carousel" style="margin-top:-10%">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner" style="margin-top:0%">
    <div class="carousel-item active">
      <img src="images/slider-1.jpg" id="img" alt="Los Angeles" width="1100" height="500">
      <div class="carousel-caption" style="margin-left:40%">
        <h2>Engage with your kids</h2>
        <p style="font-size:20px;color:orange">By daily message of knowledge</p>
		<a href="landing.jsp"><button>Subscribe</button></a>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/slider-2.jpg" id="img" alt="Chicago" width="1100" height="500">
      <div class="carousel-caption" style="margin-left:40%">
        <h2>Engage with your kids</h2>
        <p style="font-size:20px;color:orange">By daily message of knowledge</p>
				<a href="landing.jsp"><button>Subscribe</button></a>

      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/slider-3.jpg" id="img" alt="New York" width="1100" height="500">
      <div class="carousel-caption" style="margin-left:40%">
        <h2>Engage with your kids</h2>
        <p style="font-size:20px;color:orange">By daily message of knowledge</p>
				<a href="landing.jsp"><button>Subscribe</button></a>

      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>


<script>
$.noConflict();

</script>
</body>
</html>

