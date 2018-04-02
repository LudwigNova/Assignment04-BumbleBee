<?php include "inc/html-top.inc"; ?>
	
		 <div class = "bodyContainer4">
       <form method="POST" action="student_added.php">
	       <div class="formSubTitle">
	           <h2>What's your name?</h2>
	       </div>
        <input type="text" name="feedbackGiverName" required>

					<div class="formSubTitle">
              <h2>Which student was your favorite?</h2>
          </div>
					<div>
				    <input type="radio" id="studentChoice1"
				     name="studentChoice" value="Alexander Punj">
				    <label for="studentChoice1">Alexander Punj</label>
						<br/>
				    <input type="radio" id="studentChoice2"
				     name="studentChoice" value="Masaru Fujimaki">
				    <label for="studentChoice2">Masaru Fujimaki</label>
						<br/>
				    <input type="radio" id="studentChoice3"
				     name="studentChoice" value="Matt Resnikoff">
				    <label for="studentChoice3">Matt Resnikoff</label>
						<br/>
						<input type="radio" id="studentChoice4"
				     name="studentChoice" value="Zubair Aziz">
				    <label for="studentChoice4">Zubair Aziz</label>
				  </div>
          <div class="formSubTitle">
              <h2>Why?</h2>
          </div>
          <textarea rows="5" cols="50" name="reason" required></textarea>
					<br/>
					<input type="submit" id="submitButton"
					 name="submitClick" value="Submit">
        </form>
      </div>

<script src="http://code.jquery.com/jquery.js"></script>
<script src="js/menu-highlighter.js"></script>

  </body>
 </html>
