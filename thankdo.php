<?php
require_once("includes/header.php");
require_once("includes/navbar.php");

?>

<div class=t1>

  <h1><p class="pt">Thank You for your <b>Support</b>.</p></h1>
  <h2><p style="text-align: center;color: grey;">“Since you get more joy out of giving joy to others, you should put a good deal of thought into the happiness that you are able to give.” ―Eleanor Roosevelt</p></h2>
</div>




<!--footer-->
  <div class="footer">

    <div>
        <h2>Page's Location</h2>
        <p id="path"></p>
        <script type="text/javascript">
            document.getElementById("path").innerHTML =
                "Page path is: " + window.location.pathname;
        </script>

        <p id="loc"></p>
        <script type="text/javascript">
            document.getElementById("loc").innerHTML =
                "The full URL of this page is:" + window.location.href;
        </script>
    </div>
    
    <div>
        <h2>Last modified</h2>

        <p id="demo"></p>
        <script type="text/javascript">
            var x = document.lastModified;
            document.getElementById("demo").innerHTML = x;
        </script>

    </div>
    
    <center>&copy;Anita Mahmud Jhara</center>
</div>

</body>
</html>