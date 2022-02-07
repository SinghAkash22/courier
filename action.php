<?php
	session_start();
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Admin_action</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
		  integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css">
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="inc/script.js"></script>
	<script>
		var mybutton = document.getElementById("myBtn");
		
		// When the user scrolls down 20px from the top of the document, show the button
		window.onscroll = function() {scrollFunction()};
		
		function scrollFunction() {
			if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
				mybutton.style.display = "block";
			} else {
				mybutton.style.display = "none";
			}
		}
		
		// When the user clicks on the button, scroll to the top of the document
		function topFunction() {
			document.body.scrollTop = 0;
			document.documentElement.scrollTop = 0;
		
	</script>
	<style>
		
		#myBtn {
			display: none;
			position: fixed;
			bottom: 20px;
			right: 30px;
			z-index: 99;
			font-size: 18px;
			border: none;
			outline: none;
			background-color: red;
			color: white;
			cursor: pointer;
			padding: 15px;
			border-radius: 4px;
		}
		#myBtn:hover {
			background-color: #555;
		}
		.form-control {
			border-radius: 0.75rem;
		}
		
		@font-face {
			font-family: 'ubuntu-Bold';
			src: url(font/Ubuntu-Bold.ttf);
		}
		
		@font-face {
			font-family: 'Montserrat-Black';
			src: url(font/Montserrat-Black.ttf);
		}
		
		.nav-link {
			color: red;
			line-height: 5px;
		}
		
		#fev-img {
			position: absolute;
			/*width: 25%;*/
			margin-left: -102px;
			margin-top: -17px;
		}
		
		label {
			display: inline;
			padding-left: 25%;
			margin-top: 2%;
			margin-bottom: 2%;
		}
		
		input {
			display: inline;
			margin-top: 2%;
			margin-bottom: 2%;
			border-radius: .5rem;
			
		}
		
		.act_btn {
			margin-top: 2%;
			margin-bottom: 2%;
			width: 85%;
			color: white;
			background-color: #0062cc;
			border-radius: 1.5rem;
		}
		
		form {
			margin: .4%;
			border-top-left-radius: 3% 15%;
			border-bottom-left-radius: 3% 15%;
			border-top-right-radius: 3% 15%;
			border-bottom-right-radius: 3% 15%;
		}
		
		#flit {
			width: 60%;
			background-color: #3931af;
			transform: rotate(29deg);
			border-radius: 6rem;
		}
	</style>
	<script>
	
	</script>
</head>
<body>
<?php
	
	$info = $_SESSION["data"];
	//	echo $_GET['res'];
	//	echo "hhhh";
	
	
	foreach ($info as $r) {
		$key = array_keys($r);
		break;
	}
	//	foreach ($key as $k)
	//	{
	//		echo $k ;
	//		echo  "\n";
	//	}
?>
<nav class="navbar navbar-expand-lg navbar-dark mainnav" style="margin-top: 0px">
	<!--				<img id="fev-img" src="source/plane%20(2).png" height="270px" width="170px" alt="plane">-->
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
					<a class="nav-link" style="color:white;" href="#about"><h5>About Us</h5></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" style="color:white;" href="#"><h5>Contact</h5></a>
				</li>
			
			</ul>
		</div>
	
	</div>
</nav>

<h2 style="color: white;margin-left: 39%;margin-top: 3%;font-family: 'ubuntu-Bold', sans-serif">Information of
	Couriers</h2>


<section style="padding: 4%">
	
	<a href="#back" style="background-color: white;padding: 1%;border-radius: 1rem;margin-left: 95%">Bottom</a>
	<?php
		//		echo "hello entyr";
		foreach ($info as $item) {
//			echo $item['Shi_Date'];
			?>
			<div class="container">
				<?php
					if ($_SESSION['res'] == 1 or $_SESSION['res'] == 0) {
						if ($_SESSION['res'] == 1) {
							echo '<script>success("seccessfull")</script>';
						} else {
							echo '<script>fail("failed")</script>';
						}
					}
				?>
				<form action="inc/update2.php" target="_self" method="post"
					  style="background-color:#f8f9fa;padding: 2%">
					<div class="row" style="margin-top: 5%">
						<input type="hidden" name="code" value="<?php echo $item['code'] ?>" echo>
						<div class="col-md-2">
							<img src="https://image.ibb.co/n7oTvU/logo_white.png" id="flit" alt="rocket_contact"/>
						</div>
						<div class="col-md-5">
							<div class="row" style="padding-left: 0%">
								<div class="row">
									<div class="col-4">
										<label for="id">Id</label>
									</div>
									<div class="col-8">
										<input type="text" disabled name="Id" value="<?Php echo $item['code'] ?>">
									</div>
								</div>
								<div class="row">
									<div class="col-4">
										<label for="name">Name</label>
									</div>
									<div class="col-8">
										<input type="text" disabled name="name" value="<?php echo $item['name'] ?>">
									</div>
								</div>
								<div class="row">
									<div class="col-4">
										<label for="pin">Pincode</label>
									</div>
									<div class="col-8">
										<input type="number" disabled name="pin" value="<?php echo $item['pin'] ?>">
									</div>
								</div>
								<div class="row">
									<div class="col-4">
										<label for="mob"> Phone </label>
									</div>
									<div class="col-8">
										<input type="tel" name="mob" disabled value="<?php echo $item['mob_no'] ?>">
									</div>
								</div>
								<div class="row">
									<div class="col-4">
										<label for="status">Status</label>
									</div>
									<div class="col-8">
										<input type="text" name="status" disabled value="<?php echo $item['status'] ?>">
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-5">
							<div class="row">
								<div class="row">
									<div class="col-4">
										<label for="date_add">Date_Add</label>
									</div>
									<div class="col-8">
										<input type="date" name="date_add" disabled
											   value="<?php echo $item['Date_add'] ?>"
											   style="display: block">
									</div>
								</div>
								<?php
									if ($item['status'] == 'Shipped') {
										?>
										<div class="row">
											<div class="col-4">
												<label for="date_ship">Date_Ship</label>
											</div>
											<div class="col-8">
												<input type="date" name="date_ship" disabled
													   value="<?php echo $item['Shi_Date'] ?>"
													   style="display: block">
											</div>
										</div>
										<?php
									}
								?>
								<?php
									if ($item['status'] == 'Completed') {
								?>
								<div class="row">
									<div class="col-4">
										<label for="date_comp">Date_Comp</label>
									</div>
									<div class="col-8">
										<input type="date" name="date_comp" disabled
											   value="<?php echo $item['Com_Date'] ?>" style="display: block">
									</div>
								</div>
							</div>
							<?php
								}
							?>
							<div class="row" style="padding-top: 22%">
								<div class="col-4">
									<div class="form-group"><input id="Ship"
																   class="form-control btnRegister act_btn"
																   type="submit"
																   name="submit"
																   value="Ship"
												<?php if ($item['status'] == 'Shipped' || $item['status'] == 'Completed') { ?>  style="color: #736dcf" disabled <?php } ?> <?php if ($_SESSION['res'] == 1) {
											$_SESSION['res'] = -1 ?> style="color: #736dcf" disabled onclick="success('successfully shiped')" <?php } else {
											if ($_SESSION['res'] == 0) {
												$_SESSION['res'] = -1 ?> onclick="fail('fail to ship')" <?php }
										} ?>>
									</div>
								</div>
								<div class="col-3">
									<div class="form-group"><input id="Complete"
																   class="form-control btnRegister  act_btn"
																   type="submit"
																   name="submit"
																   value="Complete"
												<?php if ($item['status'] == 'Completed') { ?>  style="color: #736dcf" disabled <?php } ?><?php if ($_SESSION['res'] == 1) {
											echo "yes";
											$_SESSION['res'] = -1 ?> style="color: #736dcf" disabled onclick="success('Successfully Recived')" <?php } else {
											if ($_SESSION['res'] == 0) {
												$_SESSION['res'] = -1 ?> onclick="fail('Fail to Recived')" <?php }
										} ?> >
									</div>
								</div>
								<div class="col-4">
									<div class="form-group"><input id="Cancel"
																   class="form-control btnRegister act_btn"
																   type="submit"
																   name="submit"
																   value="Cancel"
												<?php if ($item['status'] == 'Shipped' || $item['status'] == 'Completed') { ?> style="color: #736dcf" disabled <?php } ?> <?php if ($_SESSION['res'] == 1) {
											$_SESSION['res'] = -1 ?> style="color: #736dcf" disabled onclick="success('Successfully cancel')" <?php } else {
											if ($_SESSION['res'] == 0) {
												$_SESSION['res'] = -1 ?> onclick="fail('Fail to cancel')" <?php }
										} ?>>
									</div>
								</div>
								
							</div>
						</div>
					</div>
			</div>
			</form>
			</div>
			<?php
		}
	?>
<!--	<a href="admin.php">Back</a>-->
</section>
<section id="back" style="margin-bottom: 40%;padding-bottom: 6%">
	<a href="admin.php" style="background-color: white;padding: 1%;border-radius: 1rem;margin-left: 90%;">Back</a>
</section>
<script src="inc/script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
		crossorigin="anonymous"></script>
</body>
</html>