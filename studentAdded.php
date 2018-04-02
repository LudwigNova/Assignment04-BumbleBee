<?php 
  $dbhost = "66.147.242.186";  
  $dbuser = "urcscon3_bumble";  
  $dbpass = "coffee1N"; 
  $dbname = "urcscon3_bumble";
  $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

  $feedbackGiverName = Trim(stripslashes($_POST['feedbackGiverName']));
  $studentChoice = $_POST['studentChoice']; 
  $reason = Trim(stripslashes($_POST['reason']));   

  $query = "INSERT INTO favorite_students (feedbackGiverName, studentChoice, reason) VALUES ('$feedbackGiverName', '$studentChoice', '$reason')";
  $result = mysqli_query($connection, $query); 
?>

<?php include "inc/html-top.inc"; ?>

		 <div id = "bodyContainer3">
      Success! You, 
      <?php echo $_POST["feedbackGiverName"];?>, have chosen 
      <?php echo $_POST["studentChoice"]; ?>
      as your favorite student.
    </div>

 </body>
</html>

<?php
  mysqli_close($connection);
?>
