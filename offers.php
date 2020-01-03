<!DOCTYPE html>
<html>
<head>
	<title>Offers- Akofena International Hotel</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/life.css">
	<link rel="icon"  href="img/logo2.png">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

	 <script type="text/javascript" src="js/script.js"></script> 

	 <style type="text/css">
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
  background-image: url("img/offers.jpg");
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
</head>
<body>

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
  <span class="border"> LATEST OFFERS</span>
  <style type="text/css" ></style>
  </div>
</div>
	<div style="background-color: #f2f2f2">
		<div>
			<img src="img/extra.jpg" style="width:50% ;margin: 40px">
		</div>
		<div id="info1">
			<h1 style="font-size: 30px; margin-right: 20px; text-align: center;"> 30% Early Bird Offer </h1>
			<hr style="width: 300px;">
			<p style="padding: 50px;  font-size: 18px"> Book your next stay in advance at Akofena International Hotel and enjoy 30% savings, plus a complimentary night when staying 4 consecutive nights or more</p> 
      		<a href="booking.php"> <button class="button1">Book </button></a>
      		<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo" style="margin-bottom: 50px">See Price</button>
 			 <div id="demo" class="collapse">
    			Starts from 5000 GHS
  </div>

      </div>  
		<div>
			<img src="img/exxtra.jpg" style="width:50% ;margin: 40px;">
		</div>
		<div id="info2">
			<h1 style="font-size: 30px; margin-right: 20px; text-align: center; "> Romantic Getaway </h1>	
			<hr style="width: 300px;">
			<p style="padding: 50px; font-size: 18px"> Escape to Akofena for a romantic retreat including glass of champagne on arrival, romantic dining experience, African Journey spa treatment and more</p> 
      		<a href="booking.php"> <button class="button1">Book </button></a>
      		<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo1" style="margin-bottom: 50px">See Price</button>
 			 <div id="demo1" class="collapse">
 			 	Starts from 4000 GHS
  			</div>
      	</div>

		<div>
			<img src="img/outdoor.jpg" style="width:50% ;margin: 40px;">
		</div>
		<div id="info3">
			<h1 style="font-size: 30px; margin-right: 20px; text-align: center;"> Stay 3 Nights Get 1 Free </h1>	
			<hr style="width: 300px;">
			<p  style="padding: 50px; font-size: 18px"> This offer can be applied consecutively: e.g. Stay 8 nights and receive 2 nights complimentary. This only applies to cutomers with Akofena Loyalty Cards</p>  
      		<a href="booking.php"> <button class="button1">Book </button></a>
      		<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo2" style="margin-bottom: 50px">See Price</button>
  			<div id="demo2" class="collapse">
    			Starts from 1500 GHS
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