
<?php
require_once("includes/header.php");
require_once("includes/navbar.php");

?>

    <div class="Header">

        

    </div>
    <div class="banner1">

    </div>
              
<div class="conc">
    <h1>Mobile Number: 0194*******</h1>
    <h1>Email Address: <a id="linkgoogle7"href="mailto:anitajhora14@gmail.com"> rms@gmail.com</a> </h1>
    
</div>

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