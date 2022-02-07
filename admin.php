<?php
	session_start();
	include_once 'inc/db.inc.php';
	$db = new PDO(DB_INFO, DB_USER, DB_PASS);
	?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Admin Page</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
		  integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css">
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="https://kit.fontawesome.com/98c9b2a931.js" crossorigin="anonymous"></script>
	    <script scr="inc/script.js"></script>
	<style>
		.form-control {
			border-radius: 0.75rem;
		}
		
		.for {
			height: 80%;
			width: 70%;
			background-color: #f8f9fa;
			text-align: center;
			margin-top: 90px;
			/*margin-bottom: 80px;*/
			border-top-left-radius: 10% 50%;
			border-bottom-left-radius: 10% 50%;
			border-top-right-radius: 10% 50%;
			border-bottom-right-radius: 10% 50%;
		}
		
		.cust_form {
			margin-top: -10px;
			margin-left: 91px;
		}
		@font-face {
			font-family: 'ubuntu-Bold';
			src: url(font/Ubuntu-Bold.ttf);
		}
		
		@font-face {
			font-family: 'Montserrat-Black';
			src: url(font/Montserrat-Black.ttf);
		}
		#fev-img
		{
			position: absolute;
			/*width: 25%;*/
			margin-left: -102px;
			margin-top: -29px;
		}
		
		.for_row {
			margin-top: 20px;
		}
		
		.form-control {
			width: 70%;
		}
		
		.mar {
			margin-left: 80px;
		}
		.user
		{
			color: white;
		}
		.nav-item
		{
			margin-left: 4%;
			margin-right: 4%;
		}
		
	</style

</head>
<body>
<!--<div class="body">-->
	<div class="container">
		<section id="home"  style="padding-top:0px; margin-bottom: 30px; padding-bottom: 0px;padding-top: 5px;height:100vh ">
			<nav class="navbar navbar-expand-lg navbar-dark mainnav">
				<img id="fev-img" src="source/plane%20(2).png" height="210px" width="170px" alt="plane">
				<div class="container">
					
					<a class="navbar-brand" style="font-family: 'ubuntu-Bold',sans-serif;font-size: 2em" href="#">SkyWay</a>
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
							aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarNav">
						<ul class="navbar-nav ">
							<li class="nav-item">
								<a class="nav-link" style="color:white;" aria-current="page" href="#home"><h5>Home</h5></a>
							</li>
							<li class="nav-item">
								<a class="nav-link" style="color:white;" href="#info"><h5>Info</h5></a>
							</li>
							<li class="nav-item">
								<a class="nav-link" style="color:white;" href="#div_add"><h5>Add</h5></a>
							</li>
						   <li class="nav-item user">
							  <a class="nav-link" style="color:white;"> <h5  > <?Php echo $_SESSION['uname'] ?></h5></a>
						   </li>
							<li style="padding-top: 4%">
								<a href="inc/logout.php"><i class="fas fa-sign-out-alt" style="width: 50%;margin-top: 3%"></i></a>
							</li>
							
						</ul>
					</div>
				</div>
			</nav>
			
			
			<div class="container register" style="font-family: 'IBM Plex Sans', sans-serif;">
				<div class="row products">
					<div class="col-md-3 div_admi register-left2" style="margin-top: 10%;right: 8%">
						<img src="source/courier4.png" alt="img-courier" width="500">
					</div>
					<div id="ser_pro" class="col-md-9 div register-right" style="margin-top: -15px;left: 120px;">
						<div class="head">
							<h3 style="margin-left: 43%">Search couriers</h3>
						</div>
						<form action="inc/search.php" method="post">
							
							<div class="row register-form" id="filter">
								
								<div class="col-md-6 form-serch">
									<label for="code">ID</label>
									<div class="form-group">
										<input type="number" class="form-control" name="code" placeholder="courier id">
									</div>
									<label for="nam">Name</label>
									<div class="form-group">
										<input type="text" class="form-control" name="name" placeholder="Customer Name">
									</div>
									<label for="mobile">Phone</label>
									<div class="form-group">
										<input type="number" class="form-control" name="mobile" placeholder="Customer Phone">
									</div>
									<label for="pincode">Pincode</label>
									<div class="form-group">
										<input type="number" class="form-control" name="pincode" placeholder="pincode">
									</div>
								</div>
								<div class="col-md-6 form-serch">
									<div class="form-group">
										<label for="status" style="display: block">Status</label>
										<select class="form-control" name="status" id="sta">
											<option value="null">All</option>
											<option value="Ready">Ready for Ship</option>
											<option value="Shipped">Shipped</option>
											<option value="Completed">Completed</option>
										</select>
									</div>
									<label for="date_add">Date of Add</label>
									<div class="form-group">
										<input type="date" placeholder="dd-mm-yyyy" min="1997-01-01" max="2030-12-31" class="form-control" name="date_add">
									</div>
									<label for="date_shipped">Date of Shipped</label>
									<div class="form-group">
										<input type="date" class="form-control" name="date_shipped">
									</div>
									<label for="date_complete">Date of Complete</label>
									<div class="form-group">
										<input type="date" class="form-control" name="date_complete">
									</div>
									<button class="btnRegister3" id="courier_info" style="padding-bottom: 5px; padding-top: 5px"
											type="submit"
											name="submit" value="search" >Search</button>
								
								</div>
							</div>
						</form>
					</div>
				</div>
			
			</div>
		</section>
	</div>
	<section id="info" style="background-color: bisque ">
		<div class="container-fluid">
			<div class="row">
				<div class="Info-box col-lg-3">
					<i class="icons fas fa-box-open fa-3x"></i>
					<?php $sql="select code from couriers";
					$res=$db->query($sql);
					$num=$res->rowCount();
					?>
					<h2> <?php echo $num ?></h2>
					<h3 style="font-family: 'Montserrat', sans-serif">Couriers</h3>
					<p style="color: #8f8f8f;">Total Number of Couriers We recived to deliver</p>
				</div>
				<div class="Info-box col-lg-3">
					<i class="icons fas fa-bullseye fa-3x"></i>
					<?php $sql="select code from couriers where status='Ready'";
						$res=$db->query($sql);
						$num=$res->rowCount();
					?>
					<h2> <?php echo $num ?></h2>
					<h3 style="font-family :'Montserrat', sans-serif">Ready</h3>
					<p style="color: #8f8f8f;">Number of couriers ready for ship</p>
				</div>
				<div class="Info-box col-lg-3">
					<i class="icons fas fa-people-carry fa-3x"></i>
					<?php $sql="select SUnId from shipped";
						$res=$db->query($sql);
						$num=$res->rowCount();
					?>
					<h2> <?php echo $num ?></h2>
					<h3 style="font-family :'Montserrat', sans-serif">Shipped</h3>
					<p style="color: #8f8f8f;">Number of couriers in way</p>
				</div>
				<div class="Info-box col-lg-3">
					<i class="icons fas fa-check-circle fa-3x"></i>
					<?php $sql="select UnId from comple";
						$res=$db->query($sql);
						$num=$res->rowCount();
					?>
					<h2> <?php echo $num ?></h2>
					<h3 style="font-family: 'Montserrat', sans-serif">Recived</h3>
					<p style="color: #8f8f8f;">Number of couriers we delivered </p>
				</div>
			</div>
		</div>
	</section>
	<section id="div_add">
		<div class="container">
			<div class="row">
				<div class="col-md-4 add">
					<!--			-->
				</div>
				<div class="ad col-md-4" id="add" style="border:2px solid papayawhip;border-radius: 5%">
					<h2>Make A New Courier</h2>
					<img id="ad_img" src="https://image.ibb.co/kUagtU/rocket_contact.png" alt="rocket_contact"/>
					<p style="padding: 1% 4%;margin: 7% 0%;color: #8f8f8f;">We are the best courier company in India.we ensure safe and
						fast delivery of your courier.</p>
					<div class="form-group">
						<button class="form-control" id="for_btn"
								onclick="document.getElementById('id01').style.display='block'">ADDS
						</button>
					</div>
					
					<!--			The Modal-->
					<div id="id01" class="modal">
						<div class="modal-content animate container for">
							<div class="row">
								<div class="col-md-10 for_img">
									<img src="https://image.ibb.co/kUagtU/rocket_contact.png" alt="rocket_contact"/>
								</div>
								<div class="col-md-2">
									<span onclick="document.getElementById('id01').style.display='none'"
										  class="close" title="Close Modal" style="margin-right:50px">&times;</span>
								</div>
							</div>
							<!--		Modal Content-->
							<div class="row" style="text-align: center">
							<form onsubmit="return confirm('Do you want to submit')" TARGET="_self" class="cust_form " action="inc/update.php" method="post"
								  style="width: 80%; padding: 2rem">
								<div class="row for_row">
									<h3 style="margin-bottom: 42px;margin-top: 8px;color: #495057">Please fill the customer
										Information </h3>
									<div class="col-md-6" style="text-align: right;">
										<div class="form-group">
											<input type="text" class="form-control mar" name="Name"
												   placeholder="First Name *" required>
										</div>
										<div class="form-group">
											<input type="tel" maxlength="10" minlength="10" class="form-control mar"
												   name="mob" placeholder="Cust Phone *" required>
										</div>
<!--										<br>-->
										<div class="form-group">
											<input class="form-control mar" type="text" name="State"
												   placeholder="State *" required>
										</div>
										<div class="form-group">
											<input class="form-control mar" type="text" name="post"
												   placeholder="Post *" required>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<input class="form-control" name="Lname" placeholder="Last Name*"
												   type="text" required>
										</div>
										<div class="form-group">
											<input class="form-control" type="email" name="Email" placeholder="Email">
										</div>
<!--										<br>-->
										<div class="form-group">
											<input class="form-control" type="text" name="Dist" placeholder="Dist *" required>
										</div>
										<div class="form-group">
											<input class="form-control" type="number" maxlength="6" minlength="6"
												   name="pincode" placeholder="Pincode *" required>
										</div>
									</div>
									<div class="form-group" >
										<input type="submit" name="submit" class="btnContact"   value="Send Info" />
									</div>
								</div>
							</form>
							</div>
						</div>
					</div>
				</div>
				<div class="ad_col col-md-4 add">
					<img src="source/courier2.png" alt="courier" height="100%" width="100%">
				</div>
			</div>
		</div>
	</section>

<!--</div>-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
		crossorigin="anonymous"></script>
</body>
</html>
