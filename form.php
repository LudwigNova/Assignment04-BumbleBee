<?php include "inc/html-top.inc"; ?>
<<<<<<< HEAD
	<article>
		 <div id = "bodyContainer4">
       <form method="POST" action="studentAdded.php">
	       <div class="formSubTitle">
	           <h2> What's your name? </h2>
	       </div>
        <input type="text" name="feedbackGiverName" required>
        </input>

					<div class="formSubTitle">
              <h2>Which student was your favorite?</h2>
          </div>
					<div>
				    <input type="radio" id="studentChoice1"
				     name="studentChoice" value="student">
				    <label for="studentChoice1">Alexander Punj</label>
						<br/>
				    <input type="radio" id="studentChoice2"
				     name="studentChoice" value="student">
				    <label for="studentChoice2">Masaru Fujimaki</label>
						<br/>
				    <input type="radio" id="studentChoice3"
				     name="studentChoice" value="student">
				    <label for="studentChoice3">Matt Resnikoff</label>
						<br/>
						<input type="radio" id="studentChoice4"
				     name="studentChoice" value="student">
=======
	
		 <div id = "bodyContainer3">
       <form method="POST" action="studentAdded.php">
	       <div class="formSubTitle">
	           What's your name?
	       </div>
        <input type="text" name="feedbackGiverName" required>

					<div class="formSubTitle">
              Which student was your favorite?
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
>>>>>>> master
				    <label for="studentChoice4">Zubair Aziz</label>
				  </div>
          <div class="formSubTitle">
              Why?
          </div>
<<<<<<< HEAD
          <textarea rows="5" cols="50" name="bio" required>
          </textarea>
=======
          <textarea rows="5" cols="50" name="reason" required></textarea>
>>>>>>> master
					<br/>
					<input type="submit" id="submitButton"
					 name="submitClick" value="Submit">
        </form>
      </div>

<script src="http://code.jquery.com/jquery.js"></script>
<script src="js/menu-highlighter.js"></script>

  </body>
 </html>
