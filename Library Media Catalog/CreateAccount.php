
<?php
															
	function displayRegistrationForm()
	{		
		echo("<form action= 'Home.php?BodyContent=processregistration' method='POST' >");
		echo("<div id='RegistrationForm' ");
		echo("		style= 'background-color:#FFFFFF; ");
		echo("				height:500px; ");
		echo("				width:750px; ");
		echo("				float:right;'> ");
		
		echo("	<h1 align='center'>Create Account</h1> ");
		
		echo("	<table align='center'> ");
		echo("		<tr> ");
		echo("			<td> <label> First Name </label></td> ");
		echo("			<td> <input type='text' name='fname' size='20' ></td> ");
		echo("		</tr> ");
		
		echo("		<tr> ");
		echo("			<td> <label> Last Name </label></td> ");
		echo("			<td> <input type='text' name='lname' size='20' ></td> ");
		echo("		</tr> ");
		
		echo("		<tr> ");
		echo("			<td> <label> Your Email: </label></td> ");
		echo("			<td> <input type='text' name='email' size='20' ></td> ");
		echo("		</tr> ");
		
		echo("		<tr> ");
		echo("			<td> <label> Address: </label></td> ");
		echo("			<td> <input type='text' name='address' size='20' ></td> ");
		echo("		</tr> ");
		
		echo("		<tr> ");
		echo("			<td> <label> Phone #: </label></td> ");
		echo("			<td> <input type='phone' name='phone' size='20' ></td> ");
		echo("		</tr> ");
		
		echo("		<tr> ");
		echo("			<td> Gender:</td> ");
		echo("			<td> ");
		echo("				<input type='radio' name='sex' value='male'>Male<br> ");
		echo("				<input type='radio' name='sex' value='female'>Female<br> ");
		echo("				<input type='radio' name='sex' value='no'>Prefer Not To Say<br> ");
		echo("			</td> ");
		echo("		</tr> ");
		
		echo("		<tr> ");
		echo("				<td><input type='submit' name='submit' value='Submit'></td> "); 
		echo("		</tr> ");
		
		echo("	</table> ");
		echo("</div> ");
		
		echo("</form> ");
	}
		
	function processRegistrationForm()
	{
		echo("<h3> PHP Process Form (Using the POST super-global array) </h3>");
		
		if( !isset($_POST) )
		{
			echo("Form was not completed");
		}
		else
		{
			// The post method is used
			echo("<h3> Form is being processed....: </h3>");
			echo($_POST['fname']);
			echo("<br />");
			echo($_POST['lname']);
			echo("<br />");
			echo($_POST['email']);
			echo("<br />");
			echo($_POST['phone']);
			echo("<br />");
			echo($_POST['address']);
			echo("<br />");
			/*echo($_POST['sex']);
			echo("<br />");*/
			echo("<hr>");
			print_r($_POST);
			
			
			echo("<h3> Writing to file: </h3>");  // write to file
			
			$filename = "Account.txt";
			$fp = fopen($filename, "a");  // Append to the file
			
			fwrite($fp,"<fname>" . "\n");
			fwrite($fp,"\t" .$_POST['fname'] . "\n");
			fwrite($fp,"</fname>" . "\n");
			
			fwrite($fp,"<lname>" . "\n");
			fwrite($fp,"\t" .$_POST['lname'] . "\n");
			fwrite($fp,"</lname>" . "\n");
			
			fwrite($fp,"<email>" . "\n");
			fwrite($fp,"\t" .$_POST['email'] . "\n");
			fwrite($fp,"</email>" . "\n");
			
			fwrite($fp,"<phone>" . "\n");
			fwrite($fp,"\t" .$_POST['phone'] . "\n");
			fwrite($fp,"</phone>" . "\n");
			
			fwrite($fp,"<address>" . "\n");
			fwrite($fp,"\t" .$_POST['address'] . "\n");
			fwrite($fp,"</address>" . "\n");
			
			/*fwrite($fp,"<sex>" . "\n");
			fwrite($fp,"\t" .$_POST['sex'] . "\n");
			fwrite($fp,"</sex>" . "\n");*/
			
			fclose($fp);
		}					
	}
	
/*------------Insert Info Into Database------------*/

	/*$sql = "INSERT INTO Account
					('fname', 'lname', 'email', 'phone', 'address')
			VALUES
					('$fname', '$lname', '$email', '$phone', '$address');";	*/
					
					
/*-----------Display Account Info-------------*/
	
	/*function displayAccount {
		
		$filename ="Account.txt";
				
		// open for read and get a file pointer
		$fp = fopen($filename, "r");
			
		if( $fp == false) 		// Problem opening the file
			echo("Error");
			exit();
		}
		
		$account[] = array();
		$checkouts[] = array();
		$reservations[] = array();
		$user = $this->Get_User_From_DB();
		
		echo("<table border = '15' align='center'>");
			echo("<thead>");				
				echo("<tr>");
				echo("	<th colspan='6' bgcolor='#3BA3D0'>");
				echo("		Account Information");
				echo("	</th>");
				echo("</tr>");
					
				echo("<tr>");
				echo("	<th bgcolor='#3BA3D0'>");
				echo("		Name");
				echo("	</th>");
					
				echo("	<th bgcolor='#3BA3D0'>");
				echo("		Account #");
				echo("	</th>");
				
				echo("	<th bgcolor='#3BA3D0'>");
				echo("		Email");
				echo("	</th>");
				
				echo("	<th bgcolor='#3BA3D0'>");
				echo("		Address");
				echo("	</th>");
				
				echo("	<th bgcolor='#3BA3D0'>");
				echo("		Phone #");
				echo("	</th>");
					
				echo("</tr>");
			echo("</thead>");
			
			// Read the file, one line at a time
			
		while(!feof($fp))
		{
			$aLine = "";
			$lname = "";
			$fname = "";
			$email = "";
			$acctnum = "";
			$address = "";
			$phone = "";
			$interestsArray = array();
		}
	}*/
?>