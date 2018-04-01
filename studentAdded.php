<?php 
  //1. Create database connection
  $dbhost = "66.147.242.186";  
  $dbuser = "urcscon3_bumble";  
  $dbpass = "coffee1N"; 
  $dbname = "urcscon3_bumble";
  $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

  //1.5. Scrub data
  $feedbackGiverName = Trim(stripslashes($_POST['feedbackGiverName']));
  $studentChoice = $_POST['studentChoice']; 
  $reason = Trim(stripslashes($_POST['reason']));   

  //2. Perform database query
  $query = "INSERT INTO favorite_students (feedbackGiverName, studentChoice, reason) VALUES ('$feedbackGiverName', '$studentChoice', '$reason')";
  $result = mysqli_query($connection, $query); 

  //3. Error handling (we're skipping that)
?>

<?php include "inc/html-top.inc"; ?>
	<article>
		 <div id = "bodyContainer3">
      Success!
      You, 
      <?php echo $_POST["feedbackGiverName"]; ?>
      , have chosen 
      <?php echo $_POST["studentChoice"]; ?>
      as your favorite student.
    </div>
  </article>
 </body>
</html>

<?php
  //4 & 5. Clean up
  //mysqli_free_result($result); Skipping that step because we're getting metadata that doesn't need to be reset
  mysqli_close($connection);
?>
