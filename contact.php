<!DOCTYPE html>
<html>
<head>
	<title>Contact- Akofena International Hotel</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
	<link rel="icon"  href="img/logo2.png">

	<link rel="stylesheet" type="text/css" href="css/life.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
	  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	  <script type="text/javascript" src="js/script.js"></script> 

	<style type="text/css">
#quote-carousel {
    padding: 0 10px 30px 10px;
    margin-top: 60px;
}
#quote-carousel .carousel-control {
    background: none;
    color: #CACACA;
    font-size: 2.3em;
    text-shadow: none;
    margin-top: 30px;
}
#quote-carousel .carousel-indicators {
    position: relative;
    right: 50%;
    top: auto;
    bottom: 0px;
    margin-top: 20px;
    margin-right: -19px;
}
#quote-carousel .carousel-indicators li {
    width: 50px;
    height: 50px;
    cursor: pointer;
    border: 1px solid #ccc;
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
    border-radius: 50%;
    opacity: 0.4;
    overflow: hidden;
    transition: all .2s ease-in;
    vertical-align: middle;
}
#quote-carousel .carousel-indicators .active {
    width: 128px;
    height: 128px;
    opacity: 1;
    transition: all .2s;
}
.item blockquote {
    border-left: none;
    margin: 0;
}
.item blockquote p:before {
    content: "\f10d";
    font-family: 'Fontawesome';
    float: left;
    margin-right: 10px;
}

	body, html {
  height: 100%;
  margin: 0;
  font: 400 15px/1.8 "Lato", sans-serif;
  color: #777;
}

.bgimg-1 {
  position: relative;
  opacity: 0.6;
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;

}
.bgimg-1 {
  background-image: url("img/hotel2.jpg");
  min-height: 100%;
}


.caption {
  position: absolute;
  left: 0;
  top: 50%;
  width: 100%;
  text-align: center;
  color: #000;
}

.caption span.border {
  background-color: #111;
  color: #fff;
  padding: 18px;
  font-size: 25px;
  letter-spacing: 10px;
}


	</style>

	<!-- <script type="text/javascript" src="js/hope.js"></script> -->
</head>
    
     <div >
    <?php


			$host = 'localhost';
			$dbname = 'final project';
            
			$username = 'root';
			$password = '';
            
            $names= '';

			if(isset($_POST["names"])){
				$names = $_POST['names'];
			}
			$emails= '' ;
			if(isset($_POST["emails"])){
				$emails = $_POST['emails'];
			}
            
            $feedbacks= '' ;
			if(isset($_POST["feedbacks"])){
				$feedbacks = $_POST['feedbacks'];
			}
            
            try {
				$conn = new PDO("mysql:host=$host;dbname=$dbname", 
					$username, $password);
//				 echo "Connected to $dbname at $host successfully.";


				$sql = "INSERT INTO `feedback` (`Name`,`Email`,`Comment`) VALUES ('$names', '$emails','$feedbacks')";
//                echo $sql;
                
                $conn->exec($sql);
                
                
            }
                catch (PDOException $pe) {
				die("Could not connect to the database $dbname :" 
					. $pe->getMessage());
			}

		?>
        
    </div>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

	<!-- Image and text -->
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand pull-left" href="index.html">
      <img src="img/logo2.png"  class="d-inline-block align-top" alt="logo" >
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="accomodation.php">Accomodation <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="services.php">Services <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="offers.php">Offers <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact Us <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="booking.php">Book Now<span class="sr-only">(current)</span></a>
        </li>
        
      </ul>
    </nav>
		

		 <div class="bgimg-1">
  <div class="caption">
  <span class="border">CONTACT US</span>
  </div>
</div>
<div class="container" >
      <div class="centered text-center" style="padding: 40px 0px;font-family: serif;font-size: 30px;">
        LOCATION
        
        </div>
    </div>

<script src='https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyAJpvKyGGv_i1GdXBWHo6314Be0_iv9Wuo'></script><div style='overflow:hidden;height:400px;width:15000px;'><div id='gmap_canvas' style='height:400px;width:2000px;'></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div> <a href='http://maps-website.com/'>add bing map to website</a> <script type='text/javascript' src='https://embedmaps.com/google-maps-authorization/script.js?id=6c09539f7ece2f368c1b70de43eca18036483048'></script><script type='text/javascript'>function init_map(){var myOptions = {zoom:14,center:new google.maps.LatLng(5.6015145,-0.19820930000003045),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(5.6015145,-0.19820930000003045)});infowindow = new google.maps.InfoWindow({content:'<strong>Akofena International Hotel</strong><br>Achimota Road<br> Accra<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>

<div class="container" >
			<div class="centered text-center" style="padding: 40px 0px;font-family: serif;font-size: 30px;">
				TESTIMONALS
				
				</div>
		</div>

  <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="carousel slide" data-ride="carousel" id="quote-carousel">
                    <!-- Carousel Slides / Quotes -->
                    <div class="carousel-inner text-center">
                        <!-- Quote 1 -->
                        <div class="item active">
                            <blockquote>
                                <div class="row">
                                    <div class="col-sm-8 col-sm-offset-2">
                                        <p>Akofena was the best decision I have ever made. The rooms, the food everything was just on point. Wuuld definitely be back again ! The hosiptality of the staff was incredible.</p>
                                        <small>Beyonce Knowles</small>
                                      
                                    </div>
                                </div>
                            </blockquote>
                        </div>
                        <!-- Quote 2 -->
                        <div class="item">
                            <blockquote>
                                <div class="row">
                                    <div class="col-sm-8 col-sm-offset-2">
                                        <p>My experience here was magical. My children loved everybit. Their sceneries are to die for. My room was well aranged and organized. I would be back again even with my extended family LOL </p>
                                        <small>Barack Obama</small>
                                        
                                    </div>
                                </div>
                            </blockquote>
                        </div>
                        <!-- Quote 3 -->
                        <div class="item">
                            <blockquote>
                                <div class="row">
                                    <div class="col-sm-8 col-sm-offset-2">
                                        <p>Amazing people, amazing resort. This is one for the books. Akofena is one place I would recommend to anyone who is up to have a good time</p>
                                        <small>Donald Trump</small>
                                    </div>
                                </div>
                            </blockquote>
                        </div>
                    </div>
                    <!-- Bottom Carousel Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#quote-carousel" data-slide-to="0" class="active"><img class="img-responsive " src="img/bey.jpg" alt="">
                        </li>
                        <li data-target="#quote-carousel" data-slide-to="1"><img class="img-responsive" src="img/barak.jpg" alt="">
                        </li>
                        <li data-target="#quote-carousel" data-slide-to="2"><img class="img-responsive" src="img/donald.jpg" alt="">
                        </li>
                    </ol>

                    <!-- Carousel Buttons Next/Prev -->
                    <a data-slide="prev" href="#quote-carousel" class="left carousel-control"><i class="fa fa-chevron-left"></i></a>
                    <a data-slide="next" href="#quote-carousel" class="right carousel-control"><i class="fa fa-chevron-right"></i></a>
                </div>
            </div>
        </div>
        
    </div>


<div class="container" >
			<div class="centered text-center" style="padding: 40px 0px;font-family: serif;font-size: 30px;">
				WHAT DO YOU THINK OF US?
				
				</div>
		</div>

<div class="centered text-center" style="padding: 10px 0px;font-family: serif;font-size: 20px;font-style: italic;">
			 Using a scale of 1 to 5; where 1 is Terrible, 2 is Poor, 3 is Good, 4 is Very Good and 5 is Excellent
			
			</div>

<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <div class="star-rating">
        <span class="fa fa-star-o" data-rating="1"></span>
        <span class="fa fa-star-o" data-rating="2"></span>
        <span class="fa fa-star-o" data-rating="3"></span>
        <span class="fa fa-star-o" data-rating="4"></span>
        <span class="fa fa-star-o" data-rating="5"></span>
        <input type="hidden" name="whatever1" class="rating-value" value="2.56">
       	
      </div>
    </div>
   </div>
  </div>

  <footer class="container-fluid text-center">

			<div  class="container-fluid bg-grey">
				<h2 class="text-center" id="contact">CONTACT US</h2>
				<div class="row">
					<div class="col-sm-5">
						<p>Contact us and we'll get back to you within 24 hours.</p>
						<p><span class="glyphicon glyphicon-map-marker"></span> Achimota Road, Accra</p>
						<p><span class="glyphicon glyphicon-phone"></span> +233 000 000 000</p>
						<p><span class="glyphicon glyphicon-envelope"></span> akofena@yahoo.com</p>
					</div>
					<div class="col-sm-7 slideanim">
                        <form class="form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
						<div class="row">
							<div class="col-sm-6 form-group">
								<input class="form-control" id="name" name="names" placeholder="Name" type="text" required>
							</div>
							<div class="col-sm-6 form-group">
								<input class="form-control" id="email" name="emails" placeholder="Email" type="email" required>
							</div>
						</div>
						<textarea class="form-control" id="comments" name="feedbacks" placeholder="Comment" rows="5"></textarea><br>
						<div class="row">
							<div class="col-sm-12 form-group">
								<button class="btn btn-default pull-right" type="submit" name="submit" value="submit">Send</button>
								<span class="glyphicon glyphicon-chevron-up"></span>
							
						</div>
					</div>
                        </form>
                    </div>
					<div class="row">
						<div class="col-sm-12">
							<p class="text-left"> Follow Us On Social Media
								<a href="https://www.facebook.com/" class="fa fa-facebook"></a>
								<a href="https://twitter.com/" class="fa fa-twitter"></a>
								<a href="https://www.google.com.gh/?gfe_rd=cr&dcr=0&ei=91n2Wc7RJc2AX9qHixg" class="fa fa-google"></a>	
							</div>
						</div>
					</div>
				</div>
			</footer>




    
		
</body>
</html>
		

<script>


var $star_rating = $('.star-rating .fa');
var SetRatingStar = function() {
  return $star_rating.each(function() {
    if (parseInt($star_rating.siblings('input.rating-value').val()) >= parseInt($(this).data('rating'))) {
      return $(this).removeClass('fa-star-o').addClass('fa-star');
    } else {
      return $(this).removeClass('fa-star').addClass('fa-star-o');
    }
  });
};

$star_rating.on('click', function() {
  $star_rating.siblings('input.rating-value').val($(this).data('rating'));
  return SetRatingStar();
});

SetRatingStar();
$(document).ready(function() {

});


$(document).ready(function(){
$('#carouselExampleIndicators, #myCarousel').carousel({
interval: false
});

});
</script>

