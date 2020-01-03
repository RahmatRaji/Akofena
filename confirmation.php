<!DOCTYPE html>
<html>
<head>
	<title>Confirmation - Akofena International Hotel</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="icon"  href="img/logo2.png">
	<link rel="stylesheet" type="text/css" href="css/life.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

	<script type="text/javascript" src='js/jquery-3.2.1.min.js'></script>

	<!--script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script-->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
	<!--meta name="viewport" content="width=device-width, initial-scale=1"-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>


	<script type="text/javascript" src="js/index.js"></script>

</head> 
<body>
	<a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top" role="button" title="Click to return on the top page" data-toggle="tooltip" data-placement="left"><span class="glyphicon glyphicon-chevron-up"></span></a>
	<!-- Image and text -->
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<a class="navbar-brand pull-left" href="index.html">
			<img src="img/logo2.png"  class="d-inline-block align-top" alt="" >
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
        <img src="img/check.png" style="width: 200px; margin-left:600px; margin-top:200px"> 

		<div id="show" style="text-align: center; font-size: 32px ;margin-top: 150px">
				
			<?php


			$host = 'localhost';
			$dbname = 'final project';
            
			$username = 'root';
			$password = '';


			$name= '';

			if(isset($_POST["name"])){
				$name = $_POST['name'];
			}
			$email= '' ;
			if(isset($_POST["email"])){
				$email = $_POST['email'];
			}
			$room= '' ;
			if(isset($_POST["room"])){
				$room = $_POST['room'];
			}
			$depart= '' ;
			if(isset($_POST["depart"])){
				$depart = $_POST['depart'];
			}
			$arrive= '' ;
			if(isset($_POST["arrive"])){
				$arrive = $_POST['arrive'];
			}
			$number= '' ;
			if(isset($_POST["number"])){
				$number = $_POST['number'];
			}
			$person= '' ;
			if(isset($_POST["person"])){
				$person = $_POST['person'];
			}
			$child= '' ;
			if(isset($_POST["child"])){
				$child = $_POST['child'];
			}
			$res= '' ;
			if(isset($_POST["res"])){
				$res = $_POST['res'];
			}
			$card= '' ;
			if(isset($_POST["card"])){
				$card = $_POST['card'];
			}
			$pwd= '' ;
			if(isset($_POST["pwd"])){
				$pwd = $_POST['pwd'];
			}
			$comments= '' ;
			if(isset($_POST["comments"])){
				$comments = $_POST['comments'];
			}
			

			try {
				$conn = new PDO("mysql:host=$host;dbname=$dbname", 
					$username, $password);
				// echo "Connected to $dbname at $host successfully.";


				$sql = "INSERT INTO `customers` (`Full Name`, `Email`, `Room Type`, `Arrival`, `Departure`, `Numbers of Rooms`,`Numbers of Adults`, `Numbers of Children`, `Restaurant Facilities`, `Card Type`, `Password`, `Comment`) VALUES ('$name', '$email','$room','$arrive','$depart','$number', '$person','$child','$res','$card','$pwd','$comments');";
//                echo $sql;
				
    			// use exec() because no results are returned
				$conn->exec($sql);

//				$msg = 'Congratulations';
//				$msg = $msg . ' '. $name. "" . "". " on successfully booking your room." ;


				echo "Congratulations ". " ". $name. " on succesfully booking your room. ". "<br>";
				echo " You are set to arrive  on " . "". $arrive . "<br>";
				echo " Your room number would be communicated upon arrival." ;

					//echo "New record created successfully";
			}


			catch (PDOException $pe) {
				die("Could not connect to the database $dbname :" 
					. $pe->getMessage());
			}


		?>
	</div>

</body>
</html>
