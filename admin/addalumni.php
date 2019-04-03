<?php
session_start();
		if(isset($_SESSION['uid']))
		{
			echo "";
		}
		else
		{
			header('location: ../login.php');
		}
?>


<?php
include('header.php');
include('titlehead.php');
?>

<div class="container" style="width: 60%">
<form method="post" action="addalumni.php" enctype="multipart/form-data">
	<div class="form-group">
    <label>USN</label>
    <input type="text" name="usn" class="form-control" placeholder="Enter usn" >
  	</div>
  	<div class="form-group">
    <label>Name</label>
    <input type="text" name="name" class="form-control"  placeholder="Enter your name"required>
  	</div>
  	<div class="form-group">
    <label>Year</label>
    <input type="number" name="year" class="form-control" placeholder="Enter year of passing" required>
	</div>
  	<div class="form-group">
    <label>Email Address</label>
    <input type="text" name="email" class="form-control" placeholder="Enter e-mail id">
  	</div>
  	<div class="form-group">
    <label>Contact number</label>
    <input type="number" name="contact"  class="form-control" placeholder="Enter contact number" >
  	</div>
	<div class="form-group">
    <label>Current company name</label>
    <input type="text" name="company"  class="form-control" placeholder="Enter current company name" >
  	</div>
	<button type="submit" name ="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
  </html>
  <?php
  
  
  
  if(isset($_POST['submit']))
  {
	  
	  include('../dbcon.php');
	  $usn=$_POST['usn'];
	  $name=$_POST['name'];
	  $year=$_POST['year'];
	  $email=$_POST['email'];
	  $contact=$_POST['contact'];
	  $company=$_POST['company'];
	  $qry="INSERT INTO `alumni`(`USN`, `NAME`, `YEAR`, `E_MAIL`, `CONTACT_NO`,`COMPANY`) VALUES ('$usn','$name','$year','$email','$contact','$company')";
	  
	  $run=mysqli_query($con,$qry);
	  if($run==true)
	  {
		  ?>
		  
		  <script>
		  alert('data inserted successfully.');
		  </script>
		  <?php
	  }  
	  
  }  
  ?>
  <html>
 <p style ="text-align:center ;font-size:20px;color:blue;">PLEASE FILL THE BELOW</P>
  </html>
  
 