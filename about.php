
<?php
require_once("includes/header.php");
require_once("includes/navbar.php");

?>
    <div class="Header">

        

    </div>
    <div class="banner">

    </div>
              
<div class="about">
    <h1><center><b>About US</b></center></h1>
    <p>
            <br>
        We are, the Bangladesh RMS - part of the world largest humanitarian non-governmental organisation, 
        <br>
We have stood beside the Bangladeshi population throughout history and have played a crucial humane role in the relief, rescue and rehabilitation of hundreds and thousands of victims of flood, cyclone and other natural disasters in Bangladesh.
<br>
Our work is outlined by our guiding principles, and our history that shapes our morals and ethics. Find out more about what makes us unique, compassionate and dedicated to caring, all over the world.
</p>
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