<?php include "inc/html-top.inc"; ?>
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
				    <label for="studentChoice4">Zubair Aziz</label>
				  </div>
          <div class="formSubTitle">
              Why?
          </div>
          <textarea rows="5" cols="50" name="bio" required>
          </textarea>
					<br/>
					<input type="submit" id="submitButton"
					 name="submitClick" value="Submit">
        </form>
      </div>
   </article>
  </body>
 </html>
