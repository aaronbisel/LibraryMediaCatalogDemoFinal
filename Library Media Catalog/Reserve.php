<?php
	
	function displayReservationForm()
	{
?>
		<form action="Home.php?BodyContent=reserve">
		
			<div id="ReservationForm">
			<h2><center>Reserve</center></h2><hr>	
			
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