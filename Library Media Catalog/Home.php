<!DOCTYPE html>
<html>

<!--
Aaron Bisel
System Implementation
Demo
Spring 2024-->

<head>

	<title>Library Media Catalog</title>
	
	<meta charset="UTF-8">

	<meta name="Keywords" content= "">

<!--------------------------- Style ---------------------------->
	<div id="Styles">
		<link rel="stylesheet" type="text/css" href="LibraryMediaCatalogStyles.css" >
	</div>

<!--------------------------- Java Scripts ---------------------------->
<script>
</script>
</head>

<?php
	function displayHome()
	{
?>				
	<center><h2>Library Media Catalog</h2><center>	
		
<?php
	}
?>
<!-------------------Body-------------------->
<body style="<margin: 1cm;
		border-width:thin;
		border-style:solid;
		border-color:black;
		float:left">

<!--------------- Page Containter --------------->
	<div	id="container" 
			style="width:910px;
				   background-color:white;
				   border-width:thin;
				   border-style:solid;
				   border-color:black">

<!--------------- Top Nav --------------->			
	<div	class="topnav"
			style="background-color:black;
				   height:100px">
		<br>
	
		<ul id="menubtn">
			<li style="float:right;"><a href="Home.php?BodyContent=about">About</a></li>
			<li style="float:right;"><a href="Home.php?BodyContent=register">Create Account</a></li>
			<li style="float:right;"><a href="Home.php?BodyContent=login">Log-In</a></li>	
			<li style="float:right;"><a href="Home.php?BodyContent=home">Home</a></li>
		</ul>
	</div>
	
<!--------------- Left Nav --------------->
	<div	id="LeftNav"
			style="width:200px; 
			float:left">
		
		<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search..." title="Type in a media item"
				style="padding: 15px 20px 12px 40px; width: 70%;"><hr>
		<p><a href="Home.php?BodyContent=checkout">Checkout</a></p>
		<p><a href="Home.php?BodyContent=reserve">Reserve</a></p>
		<p><a href="Home.php?BodyContent=return">Return</a></p>
	</div>
	
<!--------------- Body Content --------------->
	<div id="BodyContent">
			
		<?php
			include_once("Home.php");
			include_once("About.php");
			include_once("CreateAccount.php");
			include_once("Login.php");
			include_once("Checkout.php");
			include_once("Reserve.php");
			include_once("Return.php");
			include_once("DBConnection.php");		
			
			if(isset($_GET['BodyContent']))
			{
				if($_GET['BodyContent'] == "home") {
					displayHome();
				}
				if($_GET['BodyContent'] == "about") {
					displayAbout();
				}
				else if($_GET['BodyContent'] == "register") {
					displayRegistrationForm();
				}
				else if($_GET['BodyContent'] == "processregistration") {
					processRegistrationForm();
				}
			    else if($_GET['BodyContent'] == "login") {
					displayLoginForm();
				}
				else if($_GET['BodyContent'] == "checkout") {
					displayCheckoutForm();
				}	
				else if($_GET['BodyContent'] == "processcheckout") {
					processCheckoutForm();
				}
				else if($_GET['BodyContent'] == "reserve") {
					displayReservationForm();
				}	
				else if($_GET['BodyContent'] == "processreservation") {
					processReservationForm();
				}
				else if($_GET['BodyContent'] == "return") {
					displayReturnForm();
				}
				else if($_GET['BodyContent'] == "processreturn") {
					processReturnForm();
				}
			}
		?>	
	</div>	
<!--------------- Footer --------------->
	<div	id="copyright">
			<h3> &#169 Copyright 2024 </h3>
	</div>	
	</div>
</body>
</html>