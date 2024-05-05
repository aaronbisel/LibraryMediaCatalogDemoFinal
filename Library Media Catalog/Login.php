

<script type="text/javascript">
		
			function checktheTextboxes()
			{
				var userid = document.getElementById("username");
				var passwd = document.getElementById("password");
				
			if((userid.value == "") || (passwd.value == "")) {
					alert("Don't forget your username and password");
					if(userid.value == "") userid.style.background="yellow";
					if(passwd.value == "") password.style.background="yellow";
				}
				else {
					var theButton = document.getElementById("button");
					theButton.type='submit'
					theButton.name='submit'
				}
			}
		</script>


<?php

	
			
/*----------------- Login Form ---------------*/
function displayLoginForm()
{	
	echo("<h1><center>Login</h1></center><hr>");			
	echo("<br>");
	
	echo("<form action='Home.php?BodyContent=login' method='post' style='text-align:center'>");
		
	echo("<div class='container'>");
			  
		echo("<label for='username'><b>Username: </b></label>");
		echo("<input type='text' placeholder='Enter Username' name='username' value='' required><br><br>");
		
		echo("<label for='password'><b>Password: </b></label>");
		echo("<input type='password' placeholder='Enter Password' name='password' value='' required><br><br>");

		echo("<button type='submit' 'onclick='checktheTextboxes()'>Login</button><br>");	
				
		echo("<label>");
			echo("<input type='checkbox' checked='checked' name='remember'>Remember me");
		echo("</label><br><br>");				
	echo("</div>");

	echo("<div class='container'>");
		echo("<button type='button' class='cancelbtn'>Cancel</button>");
		echo("<br>");
		
		echo("<span class='password'><a href='#'>Forgot password?</a></span>");			
	echo("</div>");
	echo("</form>");

/*-------------- Form Processing(POST) --------------*/	
function processLoginForm()
{
	if( !isset($_POST['username']) ||
		!isset($_POST['password']) ||
		($_POST['username']) == '' ||
		($_POST['password']) == '' )
		{
			echo("Incorrect username or password");
		}
			else
			{
				echo($_POST['username']);
				echo("<br />");
				echo($_POST['password']);
				echo("<br />");	
				
	if (authenticate($_POST['username'], $_POST['password']))
		echo("Success...");
	else
		echo("Failed to login");
			}
	function authenticate($userid, $password)
	{
		if ((($userid) == "aaronb") && ($password == "password"))
			return (true);
		else
			return (false);
	}	
}
}
?>

<!--/body>

</html-->