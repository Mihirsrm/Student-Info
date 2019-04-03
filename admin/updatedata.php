<?php

 include('../dbcon.php');
	  $usn=$_POST['usn'];
	  $name=$_POST['name'];
	  $year=$_POST['year'];
	  $email=$_POST['email'];
	  $contact=$_POST['contact'];
	  $id=$_POST['sid'];
	  $qry="UPDATE `alumni` SET `USN` = '$usn', `NAME` = '$name', `YEAR` = '$year', `E-MAIL` = '$email' , `CONTACT NO` = '$contact' WHERE `id` =$id;
";
	  
	  $run=mysqli_query($con,$qry);
	  if($run==true)
	  {
		  ?>
		  
		  <script>
		  alert('DATA UPDATED SUCCESSFULLY.');
		window.open('updateform.php?sid=<?php echo $id;?>','_self');
		</script>
		  <?php
	  }
?>