<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="A website for celebrating Eric and Sydnee&apos;s big day">
    <meta name="author" content="Eric Eldridge">
    <link rel="icon" href="../favicon.ico">
    <title>RSVP</title>

    <link href="../lib/css/bootstrap.min.css" rel="stylesheet">
    <link href="../lib/css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="../site.css" rel="stylesheet">
    <link href="rsvp.css" rel="stylesheet">
<!--<link href="../rsvpsimple.css" rel="stylesheet">  -->

    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="../lib/js/bootstrap.min.js"></script>

  </head>

  <body>
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>

        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-center">
            <li><a href="../#OurStory">Our Story</a></li>
            <li><a href="../#OurWedding">Our Wedding</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Details<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="../#Accomodations">Accomodations</a></li>
<!--            <li><a href="../#Transport">Transport</a></li> -->
                <li><a href="../#ThingsToSee">Things to See</a></li>
              </ul>
            </li>
            <li><a href="#">RSVP</a></li>
            <li><a href="../gifts/">Gifts</a></li>
            <li><a href="../pictures/">Pictures</a></li> 

          </ul>
        </div><!--/.nav-collapse -->
      </div><!--/.containter -->
    </nav>

    <div class="masthead">
      <img class="header-image" src="http://i.imgur.com/Pw49m3i.jpg" >
<!--  <h1>RSVP</h1> -->
    </div>

    <div class="top">
    </div>
    <div class="form" >
      <form action="rsvp_confirm.php" method="post">
        <div class ="info">
          <h1>RSVP</h1>
          <h2>for the wedding of</h2>
          <h1>Eric & Sydnee</h1>
          <p class= "line">________________________________________</p>
          <h2>The Details</h2>
          <p>Saturday, Mar 17, 2018</p>
          <p>5:00 PM</p>
          <br>
          <h2>Ceremony & Reception</h2>
          <p>The Springs in the Woodlands</p>
               <p>33301 Old Hempstead Rd, Magnolia, TX 77355</p>
               <p class= "line">________________________________________</p>
          <input type="text" placeholder="Name">
          <input type="number" placeholder="# of Guests">
          <input type="hidden" name="babysitter" value="0">
          <input type="checkbox" id="babysitter_needed" name="babysitter" value="1">
          <label for="babysitter_needed" style="margin: inline" !important>I will need a babysitter</label>
        </div>
        <input type="submit" value="Accept">
        <button class ="regret">Regret</button>
      </form>
    </div>



<!--      <p>Made with love by Michael. Cannibalized and customized by Eric. Source can be found <a href="https://github.com/kartoffeln777/happilyevereldridge2018" target="_blank">here</a>.</p> -->

    <script src="../lib/js/carousel.js"></script> 
    <script src="../lib/js/multi-step-modal.js"></script>
    <script>
      transitionRSVP = function(step) {
        $('#rsvpModal').trigger('next.m.'.concat(step));
      };
    </script>
  </body>
</html>
