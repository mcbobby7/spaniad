<?php
require './components/header.php';

require './components/nav.php';
?>



<div class='message' id="single" style="overflow-y: scroll; height: 800px; font-size: 12px;">
	<img src="./images/7.jpg" style="width: 600px;">
	<h2 style="color: red;"><span style="color: green;">
		SEARCH RESULT</span>
	</h2>
	<h3 style="color: blue;">
		Scroll Down The Page
	</h3>
	<ol>
<?php
if (!isset($_POST["search"])) {
	$_POST["search"] = "";

 }
	$search=$_POST["search"];
	$column=$_POST["column"];
	$table=$_POST["table"];
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "project";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM $table WHERE $column LIKE '%$search%'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
?>
    	<li id="search">

		    <table style="text-align: left; color: red; padding: 10px; " >
		    	<tr>
		    		<th style="text-align: right; color: green;">
		    			NAME :  
		    		</th>
		    		<td>
		    			<?php echo $row['stu_name'] ?>;
		    		</td>
		    	</tr>
		    	<tr>
		    		<th style="text-align: right;  color: green;">
		    			REG NUM :  
		    		</th>
		    		<td>
		    			<?php echo $row['reg_num'] ?>;
		    		</td>
		    	</tr>
		    	<tr>
		    		<th style="text-align: right;  color: green;">
		    			DEPT :  
		    		</th>
		    		<td>
		    			<?php echo $row['dept'] ?>;
		    		</td>
		    	</tr>
		    	<tr>
		    		<th style="text-align: right;  color: green;">
		    			LEVEL:  
		    		</th>
		    		<td>
		    			<?php echo $row['level'] ?>;
		    		</td>
		    	</tr>
		    	<tr>
		    		<th style="text-align: right;  color: green;">
		    			FACULTY:  
		    		</th>
		    		<td>
		    			<?php echo $row['faculty'] ?>;
		    		</td>
		    	</tr>
		    	<tr>
		    		<th style="text-align: right;  color: green;">
		    			COURSE :  
		    		</th>
		    		<td>
		    			<?php echo $row['course'] ?>;
		    		</td>
		    	</tr>
		    	<tr>
		    		<th style="text-align: right;  color: green;">
		    			DATE:   
		    		</th>
		    		<td>
		    			<?php echo $row['my_date'] ?>;
		    		</td>
		    	</tr><tr>
		    		<th style="text-align: right;  color: green;">
		    			LECTURER:   
		    		</th>
		    		<td>
		    			<?php echo $row['invigilator_name'] ?>;
		    		</td>
		    	</tr>
		    	<tr>
		    		<th style="text-align: right;  color: green;">
		    			ID:   
		    		</th>
		    		<td>
		    			<?php echo $row['invigilator_id'] ?>;
		    		</td>
		    	</tr>
		    	<tr>
		    		<th style="text-align: right;  color: green;">
		    			COMMENT:   
		    		</th>
		    		<td>
		    			<?php echo $row['comment'] ?>;
		    		</td>
		    	</tr>
		    </table>
		    <hr>
		</li>

<?php
            }       

        }
        else {
    echo "<h1>No Result Found In Database</h1> ";
}
$conn->close();
?>
</ol>

</div>
		
<div class="sidebar">
	<table border="1">
		<tr bgcolor="#333" style="color: white">
			<th height="100">DEANS</th>
			<th>SCHOOLS</th>
		</tr>
		<tr bgcolor="white">
			<td height="50">prof.B.O. Esonu</td>
			<td>School of Agriculture and Agricultural Technology(SAAT)</td>
		</tr>

		<tr  bgcolor="#333" style="color: white">
			<td height="50">prof.A.N. Oogbulie</td>
			<td>School of Biological Sciences(SOBS)</td>
		</tr>

		<tr height="50" bgcolor="white">
			<td>prof.A.N. Amadi</td>
			<td>School of Biological Sciences(SOBS)</td>
		</tr>

		<tr height="50"  bgcolor="#333" style="color: white">
			<td>Engr Prof.G.I. NwaDIKOM</td>
			<td>School of Engineering and Engineering Technology(SEET)</td>
		</tr>

		<tr height="50" bgcolor="white">
			<td>prof (Mrs) R.N. Nwabueze</td>
			<td>School of Environmental Sciences(SOES)</td>
		</tr>

		<tr height="50"  bgcolor="#333" style="color: white">
			<td>Prof.I.N.S Dozie</td>
			<td>School of Health Technology(SOHT)</td>
		</tr>

		<tr height="50" bgcolor="white">
			<td>prof.C.C. Ibe</td>
			<td>School of Management Technology(SMAT)</td>
		</tr>

		<tr height="50"  bgcolor="#333" style="color: white">
			<td>prof.C.B. Anosionwu</td>
			<td>School of Physical Sciences(SOPS)</td>
		</tr>

		<tr height="50" bgcolor="white">
			<td>prof.N.N. Oti</td>
			<td>Postgraduate School(PGS)</td>
		</tr>
	</table>
</div>



<aside class="aside">
		<div class="box">
			<h2 style="background-color: #4CAF50">How To Fill Form</h2>
			    <h4>
				  <ul style="text-align: left;">
				  	<li>Hover on Faculty on the navigation above</li><hr>			  	
				  	<li>select your correct faculty</li><hr>			  	
				  	<li>fill and submit form</li>			  	
				  </ul>
			    </h4>	  	
		</div>	
		<div class="box" id="right">
			<h2 style="background-color: #4CAF50" style="float: right">Faculty</h2>
			    <h6>
				  <ul style="text-align: left;">
				  	<li><a href="Smat.php">SMAT</a></li><hr>			  	
				  	<li><a href="Seet.php">SEET</a></li><hr>			  	
				  	<li><a href="Saat.php">SAAT</a></li><hr>			  	
				  	<li><a href="Soht.php">SOHT</a></li><hr>			  	
				  	<li><a href="Sobs.php">SOBS</a></li><hr>
				  	<li><a href="Sops.php">SOPS</a></li><hr>			  	
				  	<li><a href="Soes.php">SOES</a></li><hr>
				  </ul>
			    </h6>	  	
		</div>
		<div class="box" id="right">
			<h2 style="background-color: #4CAF50" style="float: right">Our Mission</h2>
			    <h4 style="text-align: left; padding-left: 10px; padding-right: 10px;">
				  	To operate practical and training geared towards transforming the nation's  technology and economy from consumer-oriented with a sound technology base.
			    </h4>	  	
		</div>
		<div class="box" id="right">
			<h2 style="background-color: #4CAF50" style="float: right">Our Vission</h2>
			    <h4 style="text-align: left; padding-left: 10px; padding-right: 10px;">
				  To re-engineer the department to be a truely world class through nurturing uniquely promising students and exceptional staffs in science, technology and enterprice to the benefit of our globalized world. 
			    </h4>	  	
		</div>
		<div class="box" id="right">
			<h2 style="background-color: #4CAF50" style="float: right">Our Value</h2>
			    <h4 style="text-align: left; padding-left: 10px; padding-right: 10px;">
				  Our shared values guide our students activities, which is a school founded on intellectual property. we foster creative environment in order to develop students and deliver them to the lagbour market through effecttive channels. 
			    </h4>	  	
		</div>				
	</aside>
<section id="section">
	<img class="images" src="./images/6.jpg">				
	<img class="images" src="./images/8.jpg">				
	<img class="images" src="./images/9.jpg">				
	<img class="images" src="./images/10.jpg">				
</section>

<?php  
	require './components/footer.php';

?>