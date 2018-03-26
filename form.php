<?php include "inc/html-top.inc"; ?>
	<article>
		 <div id = "bodyContainer3">
       <form method="POST" action="studentAdded.php">
         <div className="formSubTitle">
             First Name
         </div>
          <input type="text" name="firstName" required>
          </input>
          <div className="formSubTitle">
              Last Name
          </div>
          <input type="text" name="lastName" required>
          </input>
          <div className="formSubTitle">
              Bio
          </div>
          <textarea rows="5" cols="50" name="bio" required>
          </textarea>
          <div className="formSubTitle">
              Category
          </div>
          <input type="text" name="category" required>
          </input>
          <div className="formSubTitle">
              Bio Sub-Heading
          </div>
          <input type="text" name="subHeading" required>
          </input>
          <div className="formSubTitle">
              Info for Sub-Heading
          </div>
          <textarea rows="5" cols="50" name="subHeadingInfo" required>
          </textarea>
          <br/>
          <input type="submit" value="Add Student" id="addStudentButton">
          </input>
        </form>
      </div>
   </article>
  </body>
 </html>
