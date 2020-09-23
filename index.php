
<?php
require_once("includes/header.php");
require_once("includes/navbar.php");

?>
  <!--Navbar-->
  
  
  <!-- Showcase Area-->
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active"data-interval="1000">
      <img src="img/1.jpg" class="d-block w-100" alt="..."style="width:800px;height:500px;">
      <div class="carousel-caption d-none d-md-block">
       
        <h1 class="text">No one is useless in this world who lightens the burdens of anothe-Charles Dickens</h1>
      </div>
    </div>
    <div class="carousel-item"data-interval="5000">
      <img src="img/warning.jpg" class="d-block w-100" alt="..."style="width:800px;height:500px;">
      <div class="carousel-caption d-none d-md-block">
        
        <h1 class="text">We only have what we give-Isabel Allende</h1>
      </div>
    </div>
    <div class="carousel-item"data-interval="5000">
      <img src="img/1.1.jpg" class="d-block w-100" alt="..."style="width:800px;height:500px;">
      <div class="carousel-caption d-none d-md-block">
        
        <h1 class="text">Doing nothing for others is the undoing of ourselves-Horace Mann</h1>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
   <div class="bd">
     
      <span class="border-bottom"></span>
   </div>
  <!--learn-->
  <section id="learn">
    <div class="container">
      <br><br>
      <h2 class="learn-heading">Little bit of RMS <span class="text-primary"></span></h2><br>
      <div class="row">
        <div class="col-6">
      <div class="learn-content">
        <div class="learn-text">
        <p class="lead">Thanks for visiting us.
          There is no exercise better for the heart than reaching down and lifting people up. No one is useless in this world who lightens the burdens of another. The proper aim of giving is to put the recipients in a state where they no longer need our gifts. It's not how much we give but how much love we put into giving.

        </p>
      </div>
      </div>
      <p style="font-size:35px;font-weight:bold;color: #7D0552;"><b>Want To join our journey and help us.Become a volunteer</b></p>
      <button type="submit" class="btn btn-light"><a href="vol.php">Become Volunteer</a></button><br><br><br>
    </div>
    

  
       <div class="col-lg-6">
        <iframe width="750" height="600" src="https://www.youtube.com/embed/KWmRZgAKFTM" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
          </div>
       </div>
     
    
  </section>
  
  



  <section class="ftco-section ftco-no-pt ftco-no-pb">
    <div class="container">
      <div class="row no-gutters">
        <div class="col-md-3 d-flex align-items-stretch">
          <div class="services">
            <div class="text text-center bg-danger">
               <br>
              <h3><b>Become a <br>Volunteer</b></h3><br>
              <p style="font-size: 30px;">Volunteer don't necessarily have time

               <br>
               They have the <b>HEART</b>
              </p>
            
          </div>
          <!--
            <div class="border-2" style="background-image: url(img/services-1.jpg);">
              <div class="icon d-flex align-items-center justify-content-center">
                <span class="flaticon-volunteer"></span>
              </div>
            </div>
        -->
          </div>
        </div>
        <div class="col-md-3 d-flex align-items-stretch">
          <div class="services">
            <div class="text text-center bg-primary">
            	<br>
              <h3 ><b>Quick <br>Fundraising</b></h3>
              <br>
              <p style="font-size: 30px;">&nbsp;&nbsp;&nbsp;&nbsp;Small Actions &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              	<br>
              	&nbsp;&nbsp;X&nbsp;&nbsp;
              	<br>

              	&nbsp;&nbsp;Lots of People&nbsp;&nbsp;<br>
              	=<br>
              	<b>&nbsp;&nbsp;BIG CHANGE&nbsp;&nbsp;</b>

              </p>
            </div>
            
          </div>
        </div>
        <div class="col-md-3 d-flex align-items-stretch">
          <div class="services">
            <div class="text text-center bg-warning">
            	<br>
              <h3><b>Start <br>Donating</b></h3>
              <br>
              <p style="font-size: 30px;">If the money we donate help one child or can ease the pain of one parent,
               <br>
              Those are well spent </p>
            </div>
            
          </div>
        </div>
        <div class="col-md-3 d-flex align-items-stretch">
          <div class="services">
            <div class="text text-center bg-success">
            	<br>
              <h3><b>Get <br>Involved</b></h3>
              <br>
             <p style="font-size: 30px;">Not all of Us can do great things.<br>
             	But we can do small things with great love.

             </p>
            </div>
            <div class="img border-4" style="background-image: url(images/services-4.jpg);">
              <div class="icon d-flex align-items-center justify-content-center">
                <span class="flaticon-ecological"></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
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
  <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  




</body>
</html>
