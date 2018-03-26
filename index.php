
<?php include "inc/html-top.inc"; ?>
    <div class="grid-container">
        <div class="slider">
            <img src="images/alex.jpg" alt="Alex">
            <img src="images/masaru.png" alt="Masaru">
            <img src="images/matt.jpeg" alt="Matt">
            <img src="images/zubair.jpg" alt="Zubair">
        </div>

        <div id="accordion">
            <h2>Alexander Punj</h2>
            <p>I really enjoy writing and debugging web code. Web code is one subject that makes 100% sense to me and gets me excited to start my day. </p>
            <h2>Matt Resnikoff</h2>
            <p>My name is Matt Resnikoff. I am currently a Junior at the U of R, majoring in Economics and double minoring in Computer Science and Journalism. I got into Comp Sci fairly recently, but I have a lot of fun with the coding aspects which is why I decided to start off as the group coder. I really like tennis, both watching and playing.</p>
            <h2>Masaru Fujimaki</h2>
            <p>My name is Masaru Fujimaki, I am majoring in financial economics and statistics and minoring in computer science.</p>
            <h2>Zubair Aziz</h2>
            <p>I am currently a junior, anticipated to graduate in May, 2019. I started off my first year in college majoring in Economics.</p>
        </div>
    </div>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
<script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

        <script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
        <script>
            $("#accordion").accordion({
                heightStyle: "content"
            });
        </script>
        <script src="sss/sss.min.js"></script>
        <script>
            $('.slider').sss();
        </script>
        <script src="http://code.jquery.com/jquery.js"></script>
        <script src="js/menu-highlighter.js"></script>
  <footer class="footer">
    <span>Page created by Team Bumble Bee</span>
  </footer>
</body>
</html>
