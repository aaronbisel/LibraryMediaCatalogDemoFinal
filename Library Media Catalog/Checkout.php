<?php
	function displayCheckoutForm()
	{
		echo("");
?>										
		<form action="Home.php?BodyContent=checkout">
			
			<div id="CheckoutForm">			
			<h2><center>Checkout</center></h2><hr>
			
				<table align="center"><h3><center>Member Info</center></h3>			
					<tr>
						<td><label for="name">Name</label></td>
						<td><input type="text" id="name" name="name"></td>
					</tr>			
					<tr>
						<td><label for="email"> Email</label></td>
						<td><input type="text" id="email" name="email"></td>
					</tr>
					<tr>				
						<td><label for="acct_ID">Account #</label></td>
						<td><input type="text" id="acct_ID" name="acct_ID"></td>
					</tr>				  
				</table>
								
				<table align="center"><h3><center>Payment</center></h3>
				
				<label for="fname">Accepted Cards</label>
				<div class="icon-container">
				  <i class="fa fa-cc-visa" style="color:navy;"></i>
				  <i class="fa fa-cc-amex" style="color:blue;"></i>
				  <i class="fa fa-cc-mastercard" style="color:red;"></i>
				  <i class="fa fa-cc-discover" style="color:orange;"></i>
				</div>				
					<tr>
						<td><label for="cname">Name on Card</label></td>
						<td><input type="text" id="cname" name="cardname"></td>
					</tr>
					<tr>
						<td><label for="ccnum">Credit card number</label></td>
						<td><input type="text" id="ccnum" name="cardnumber"></td>
					</tr>
					<tr>
						<td><label for="expmonth">Exp Month</label></td>
						<td><input type="text" id="expmonth" name="expmonth"></td>
					</tr>
					<tr>			          
						<td><label for="expyear">Exp Year</label></td>
						<td><input type="text" id="expyear" name="expyear"></td>
					</tr>
					<tr>            
						<td><label for="cvv">CVV</label></td>
						<td><input type="text" id="cvv" name="cvv"></td>
					</tr>  
					<tr>
						<label>
							<td><input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing</td>
						</label>
					</tr>
					<tr>
						<td><input type="submit" value="Checkout" class="btn"></td>
					</tr>
				</table>
			</div>
		</form> 
<?php
	}
?>  
  <!--div class="col-25">
    <div class="container">
	
      <h4>Cart <span class="price" style="color:black"><i class="fa fa-shopping-cart"></i> <b>4</b></span></h4>
			<p><a href="#">Product 1</a> <span class="price">$15</span></p>
			<p><a href="#">Product 2</a> <span class="price">$5</span></p>
			<p><a href="#">Product 3</a> <span class="price">$8</span></p>
			<p><a href="#">Product 4</a> <span class="price">$2</span></p>
      <hr>
			<p>Total <span class="price" style="color:black"><b>$30</b></span></p>
    </div>
  </div>
</div-->



<!--?php

function displayCheckoutForm()
	{
		/*echo("<p>Resize the browser window to see the effect. 
				When the screen is less than 800px wide, 
				make the two columns stack on top of each other instead of next to each other.</p>");
		echo("<div class='row'>");
		echo("<div class='col-75'>");
		echo("<div class='container'>");*/
	
		echo("<form action='Home.php?BodyContent=processcheckout' method='POST' >");
		echo("<div id='CheckoutForm' ");
		echo("		style= 'background-color:#FFFFFF; ");
		echo("				height:500px; ");
		echo("				width:750px; ");
		echo("				float:right;'> ");
		
		echo("<h2 align='center'>Checkout</h2>");
		
		echo("<div class='row'>");
		echo("<div class='col-50'>");
			echo("<h3>Billing Address</h3>");
			
            echo("<label ='fname'><i class='fa fa-user'></i> Full Name</label>");
            echo("<input type='text' id='fname' name='firstname' placeholder='John M. Doe'>");
			
            echo("<label for='email'><i class='fa fa-envelope'></i> Email</label>");
            echo("<input type='text' id='email' name='email' placeholder='john@example.com'>");
			
            echo("<label for='adr'><i class='fa fa-address-card-o'></i> Address</label>");
            echo("<input type='text' id='adr' name='address' placeholder='542 W. 15th Street'>");
			
            echo("<label for='city'><i class='fa fa-institution'></i> City</label>");
            echo("<input type='text'id='city' name='city' placeholder='New York'>");

            echo("<div class='row'>");
            echo("<div class='col-50'>");
            echo("<label for='state'>State</label>");
            echo("<input type='text' id='state' name='state' placeholder='NY'>");
            echo("</div>");
			
            echo("<div class='col-50'>");
            echo("<label for='zip'>Zip</label>");
            echo("<input type='text' id='zip' name='zip' placeholder='10001'>");
            echo("</div>");
			echo("</div>");
		echo("</div>");

        echo("<div class='col-50'>");
            echo("<h3>Payment</h3>");
            echo("<label for='fname'>Accepted Cards</label>");
			
            echo("<div class='icon-container'>");
				echo("<i class='fa fa-cc-visa' style='color:navy;'></i>");
                echo("<i class='fa fa-cc-amex' style='color:blue;'></i>");
                echo("<i class='fa fa-cc-mastercard' style='color:red;'></i>");
                echo("<i class='fa fa-cc-discover' style='color:orange;'></i>");
            echo("</div>");
			
            echo("<label for='cname'>Name on Card</label>");
            echo("<input type='text' id='cname' name='cardname' placeholder='John More Doe'>");
			
            echo("<label for='ccnum'>Credit card number</label>");
            echo("<input type='text' id='ccnum' name='cardnumber' placeholder='1111-2222-3333-4444'>");
			
            echo("<label for='expmonth'>Exp Month</label>");
            echo("<input type='text' id='expmonth' name='expmonth' placeholder='September'>");
			
        echo("<div class='row'>");
			echo("<div class='col-50'>");
				echo("<label for='expyear'>Exp Year</label>");
                echo("<input type='text' id='expyear' name='expyear' placeholder='2018'>");
            echo("</div>");
			
            echo("<div class='col-50'>");
                echo("<label for='cvv'>CVV</label>");
                echo("<input type='text' id='cvv' name='cvv' placeholder='352'>");
            echo("</div>");
        echo("</div>");
        echo("</div>"); 
        echo("</div>");
		
        echo("<label>");
			echo("<input type='checkbox' checked='checked' name='sameadr'> Shipping address same as billing");
        echo("</label>");
		
			echo("<input type='submit' value='Continue to checkout' class='btn'>");
			
    echo("</form>");
	
    echo("</div>");
	echo("</div>");
  
	echo("<div class='col-25'>");
    echo("<div class='container'>");
        echo("<h4>Cart <span class='price' style='color:black'><i class='fa fa-shopping-cart'></i> <b>4</b></span></h4>");
        echo("<p><a href='#'>Product 1</a> <span class='price'>$15</span></p>");
        echo("<p><a href='#'>Product 2</a> <span class='price'>$5</span></p>");
        echo("<p><a href='#'>Product 3</a> <span class='price'>$8</span></p>");
        echo("<p><a href='#'>Product 4</a> <span class='price'>$2</span></p>");
        echo("<hr>");
        echo("<p>Total <span class='price' style='color:black'><b>$30</b></span></p>");
	echo("</div>");
	echo("</div>");
	echo("</div>");
	}
?-->