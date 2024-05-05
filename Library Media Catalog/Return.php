<?php
	function displayReturnForm()
	{
		echo("");		
?>			
		<form action="Home.php?BodyContent=return">
		
			<div id="ReturnForm">
			<h2><center>Return</center></h2><hr>	
			
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
							<td><label for="acctnum">Account #</label></td>
							<td><input type="text" id="acctnum" name="acctnum"></td>
						</tr>
						<tr>				
							<td><label for="itemnum">Item #</label></td>
							<td><input type="text" id="itemnum" name="itemnum"></td>
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
			</div-->
			
