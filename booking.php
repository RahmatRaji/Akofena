<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta charset="utf-8">
	<title>Booking-Akofena International Hotel</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

	
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/life.css">
	<link type="php" href="confirmation.php">
	<link rel="icon"  href="img/logo2.png">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.js" ></link>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/additional-methods.js" ></link>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	 <link href="https://bootswatch.com/yeti/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.4.0/pikaday.min.js" type="text/javascript"></script>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.4.0/css/pikaday.min.css" rel="stylesheet" type="text/css" />
	

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
	<script type="text/javascript" src="js/bookings.js"></script> 

		<script>
		function finalCost(){
			var roomType = document.getElementById("room_type").value;
			var roomNum = document.getElementById("room_number").value;
			var personNum = document.getElementById("person_number").value;
			var childNum = document.getElementById("child_number").value;
			

			var total = (parseInt(roomType)*1350) + ((roomNum)*200) + ((personNum)*300) + ((childNum)*250) 

			document.getElementById("result").innerHTML = total;



		}
	</script>
	<style type="text/css">
		.help-block{
			color: red;
		}
	</style>



</head>
<body style="background-image: url(img/service4.jpg)">
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

		<div style="background-color: orange">
		</div>


		<div class="row">
			<div class="hotel_reserve_box" class="col-md-7">
				<h3> Hotel Reservation Form </h3><br>
				<form id="myForm" role="form" method="POST" action="confirmation.php">



					<div class="form-group">
						<label for="email"> Full Name:</label><span style="color: red;"> *</span>
						<input type="name" class="form-control" id="name" placeholder="Enter Name" name="name">
					</div>

					<div class="form-group">
						<label for="email">Email address:</label><span style="color: red;"> *</span>
						<input type="email" class="form-control" id="email" placeholder="Enter Email" name="email">
					</div>
					<div class="form-group">
						<label>Room/Suite Type</label><span style="color: red;"> *</span>
						<select class="form-control" id="room_type" name="room" onchange="finalCost()">
							<option value="" selected>Select Room/Suite </option>
							<option value="0"> Standard </option>
							<option value="1"> Deluxe </option>
							<option value="2"> Superior Deluxe </option>
							<option value="3"> Premiere Deluxe  </option>

						</select>
					</div>

					<div class="form-group" style="padding-bottom: 18px;">Arrival date<span style="color: red;"> *</span><br/>
						<input type="text" id="data_6" name="arrive" style="width : 250px;" class="form-control"/>
					</div>
					<script type="text/javascript">new Pikaday({ field: document.getElementById('data_6') });</script>

					<div class="form-group" style="padding-bottom: 18px;">Departure date<span style="color: red;"> *</span><br/>
						<input type="text" id="data_7" name="depart" style="width : 250px;" class="form-control" />
					</div>
					<script type="text/javascript">new Pikaday({ field: document.getElementById('data_7') });</script>



					<div class="form-group">
						<label>Number of room/suite</label><span style="color: red;"> *</span>
						<select class="form-control" id="room_number" name="number" onchange="finalCost()">
							<option value="">Choose...</option>
							<option value="0"> 0 </option>
							<option value="1"> 1 </option>
							<option value="2"> 2 </option>
							<option value="3"> 3 </option>
							<option value="4"> 4 </option>
							<option value="5"> 5 </option>
							<option value="6"> 6 </option>
							<option value="7"> 7 </option>
						</select>
					</div>
					<div class="form-group">
						<label>Number of adults</label><span style="color: red;"> *</span>
						<select class="form-control" id="person_number" name="person" onchange="finalCost()">
							<option value="">Choose...</option>
							<option value="0"> 0 </option>
							<option value="1"> 1 </option>
							<option value="2"> 2 </option>
							<option value="3"> 3 </option>
							<option value="4"> 4 </option>
							<option value="5"> 5 </option>
							<option value="6"> 6 </option>
							<option value="7"> 7 </option>
						</select>
					</div>
					<div class="form-group">
						<label>Number of children</label><span style="color: red;"> *</span>
						<select class="form-control" name="child" id="child_number" onchange="finalCost()">
							<option value="">Choose...</option>
							<option value="0"> 0 </option>
							<option value="1"> 1 </option>
							<option value="2"> 2 </option>
							<option value="3"> 3 </option>
							<option value="4"> 4 </option>
							<option value="5"> 5 </option>
							<option value="6"> 6 </option>
							<option value="7"> 7 </option>
						</select>
					</div>
					<div class="form-group">
						<label>Restaurant facilities?</label><span style="color: red;"> *</span>
						<select class="form-control" name="res" id="res_facilities" >
							<option value=""> Do you want restaurant facilities? </option>
							<option value="Yes"> Yes </option>
							<option value="No"> No </option>
						</select>
					</div><br>

					<h3> Card Details</h3><br>
					<div class="form-group">
						<label>Card Type</label><span style="color: red;"> *</span>
						<select class="form-control" name="card" >
							<option value="">Choose...</option>
							<option value="Visa Card"> Visa Card</option>
							<option value="Master Card"> Master Card</option>
							<option value="Paypal"> Pay Pal</option>
							<option value="Express Card"> Express Card </option>
						</select>
					</div>

					<div class="form-group">
						<label for="pwd">Card Number:</label><span style="color: red;"> *</span>
						<input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
					</div>
					<div class="checkbox">
						<label><input type="checkbox" name="remember"> Remember me</label><br>
					</div>
					<div class="form-group">
						<label for="comments">Comment:</label>
						<textarea class="form-control" rows="5" id="comments" name="comments"></textarea>
					</div>
					<div class="form-group">
						<label>Total Cost (GHC) : </label>
						<span id="result" style="background-color: #7527b0;color: #fff;padding: 6px 70px;font-weight: 600;font-size: 18px; margin-left: 10px;border-radius: 5px;">0</span>
					</div>
					<button type="submit" class="btn btn-default" id="submitBtn" data-toggle="modal" data-target="#confirm-submit" value="submit" name="submit">Submit</button>
					<button type="reset" class="btn btn-default" value="Reset">Reset</button>
				</form>
			</div>


			<div class="info__body" class="col-sm-5" style=" margin-top: 300px;margin-left: 30px;margin-bottom: 60px;
			padding: 40px ;
			background-color:#FAFAFA;
			box-shadow: 3px 5px 10px #F4F0F0;
			width: 470px;
			height: 420px;">
			<h4 class="info__title">Information</h4>
			<ul class="info__content" style="list-style: none;">
				<li>
					<p class="info-text">If you have some questions with booking please contact us.</p>
				</li>
				<li>
					<div><i class="material-icons"  style="font-size:36px">add_location</i></div>
					<div class="info-content">
						<div class="title" class="fa fa-question text-right">Address</div>
						<div class="description">Number 25, Achimota Road ,Accra</div>
					</div>
				</li>
				<li>
					<i class="material-icons" class="fa fa-question text-left" style="font-size:36px">call</i>
					<div class="info-content">
						<div class="title">Phone / Fax</div>
						<div class="description">+45 789 123 4544 / +45 789 123 4848</div>
					</div>
				</li>
				<li>
					<i class="material-icons" class="fa fa-question text-left" style="font-size:36px">email</i>
					<div class="info-content">
						<div class="title">E-mail</div>
						<div class="description">admin@akofena.com</div>
					</div>
				</li>
			</ul> <!-- .info__content -->
		</div>
	</div>
</div>

  <script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-2.1.3.min.js"></script>
  <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.0/jquery.validate.min.js"></script>
  <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.0/additional-methods.min.js"></script>
 

</body>
</html>