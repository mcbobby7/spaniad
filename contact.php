<?php
require './components/header.php';
require './components/nav.php';
?>

<script type="text/javascript" src="project.js"></script>

<div class='message' id="single">
	<img src="./images/14.jpg" style="width: 600px;">	
		<div style="padding-top: 50px;">
		<form >
		<fieldset>
			<h3>Contact Us</h3>
					<table style="text-align: right;">
						<tr>
							<td>
								Name :
							</td>
							<td>
								<input type="text" name="lec_name" placeholder="Name">
							</td>
						</tr>
						<tr>
							<td>
								Email :
							</td>
							<td>
								<input type="text" name="email" placeholder="Email">
							</td>
						</tr>
						<tr>
							<td>
								
							</td>
							<tr>
							<td>
								Address :
							</td>
							<td>
								<input type="text" name="complaint" placeholder="Address">
							</td>
						</tr>
													<tr>
							<td>
								Message :
							</td>
							<td>
								<input type="text" name="message" style="height: 50px;" placeholder="Message">
							</td>
						</tr>
							<td>
								<button type="submit">submit</button>
							</td>
						</tr>
					</table>
		</fieldset>
	</form>	
	</div> 
</div>
<div class="sidebar">
	<div style="text-align: left;">
	<h2 style="text-align: center; color: red;">Our Ethos</h2><br>
	<img src="./images/15.png" style="width:500px; height: 200px;">
		<h3 style="text-align: center; color: green;" >Our ethos is premised upon the following standards:</h3>
		<ol>
			<h4><li>Satisfaction of clients by living up to their expectations, delivering unparalleled legal service, and a commitment to their struggles;</li></h4>
			<h4><li>Excellence in legal performance by maintaning up-to-date legal reviews and continuimg education;</li></h4>
			<h4><li>Active commitment to succes in fulfuling promise, while leavig an open chanel of communication with clients;</li></h4>
			<h4><li>maintaning an oriented firm where clients are not clients, but are family members;</li></h4>
			<h4><li>community involvment by pro bono services.</li></h4>
		</ol>
</div>
</div>
<aside class="aside" style="display: flex; justify-content: space-around;">
		
		<div class="box" id="right">
			<h2 style="background-color: #4CAF50;" style="float: right">Our Mission</h2>
			    <h4 style="text-align: left; padding-left: 10px; padding-right: 10px;">
				  	Under the seal of our co-operation we have established four main areas of business in which to provide our clients with comprehensive and effective management model and guarantee the success of their investment in spain.
			    </h4>	  	
		</div>
		<div class="box" id="right">
			<h2 style="background-color: #4CAF50" style="float: right">Our Vission</h2>
			    <h4 style="text-align: left; padding-left: 10px; padding-right: 10px;">
				 we want to be your consultants in spain and actively contribute to the success of your business. Tell us your need and we will come up with a customised solution. we wnt to grow with you. 
			    </h4>	  	
		</div>
		<div class="box" id="right">
			<h2 style="background-color: #4CAF50" style="float: right">Our Value</h2>
			    <h4 style="text-align: left; padding-left: 10px; padding-right: 10px;">
				  <span>Confidence & respect:</span> open and clear communication to establish long-term relationship.
				  <span>Team:</span> professional and competitve, motivated and passionate, committed to its clients.
				  <span>Efficiency:</span> always at the forefront of the most innovative solutions.
			    </h4>	  	
		</div>				
	</aside>
<section id="section">
	<img class="images" src="./images/1.jpeg" style="height: 150px; width: 250px;">				
	<img class="images" src="./images/2.jpeg" style="height: 150px; width: 250px;">				
	<img class="images" src="./images/3.jpeg" style="height: 150px; width: 250px;">				
	<img class="images" src="./images/5.jpeg" style="height: 150px; width: 250px;">				
</section>

<?php  
	require './components/footer.php';

?>