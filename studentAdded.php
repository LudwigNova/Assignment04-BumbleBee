<?php 
  //1. Create database connection
  $dbhost = "66.147.242.186";  
  $dbuser = "urcscon3_bumble";  
  $dbpass = "coffee1N"; 
  $dbname = "urcscon3_bumble";
  $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

  //1.5. Scrub data
  $firstName = Trim(stripslashes($_POST['firstName']));
  $lastName = Trim(stripslashes($_POST['lastName'])); 
  $bio = Trim(stripslashes($_POST['bio'])); 
  $category = Trim(stripslashes($_POST['category'])); 
  $subHeading = Trim(stripslashes($_POST['subHeading'])); 
  $subHeadingInfo = Trim(stripslashes($_POST['subHeadingInfo']));  

  //2. Perform database query
  $query = "INSERT INTO students (firstName, lastName, bio, category, subHeading, subHeadingInfo) VALUES ('$firstName', '$lastName', '$bio', '$category', '$subHeading', '$subHeadingInfo')";
  $result = mysqli_query($connection, $query); 

  //3. Error handling (we're skipping that)
?>

<?php include "inc/html-top.inc"; ?>
	<article>
		 <div id = "bodyContainer3">
      Success!
      The student
      <?php echo $_POST["firstName"]; ?>
      <?php echo $_POST["lastName"]; ?>
      has been added under the
      <?php echo $_POST["category"]; ?>
      category.
    </div>
  </article>
 </body>
</html>

<?php
  //4 & 5. Clean up
  //mysqli_free_result($result); Skipping that step because we're getting metadata that doesn't need to be reset
  mysqli_close($connection);
?>
