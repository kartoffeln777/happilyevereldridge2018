<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="A website for celebrating Alison and Michael's big day">
    <meta name="author" content="Michael Jones">
    <link rel="icon" href="../favicon.ico">

    <title>Gifts</title>

    <link href="../lib/css/bootstrap.min.css" rel="stylesheet">
    <link href="../lib/css/bootstrap-theme.min.css" rel="stylesheet">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="../lib/js/bootstrap.min.js"></script>

    <link href="../site.css" rel="stylesheet">
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
                <li><a href="../#Transport">Transport</a></li>
                <li><a href="../#ThingsToSee">Things to See</a></li>
              </ul>
            </li>
            <li><a href="../#RSVP">RSVP</a></li>
            <li><a href="./">Gifts</a></li>
<!-- <li><a href="../Pictures/">Pictures</a></li> -->

          </ul>
        </div><!--/.nav-collapse -->
      </div><!--/.containter -->
    </nav>

    <div class="masthead">
      <img class="header-image" src="../img/gifts.jpg" height = 700 width = 1200>
      <h1>Gifts</h1>
    </div>

    <div class="container">
      <div id="content" class="inner jumptarget">
          <!--<h3>How We Met</h3>-->
	If you would like to give us a gift, we have a few suggested ways for you to do so below. Most of all we are grateful for the opportunity to see everyone who will be in attendance. 
       <br>
       
      </div>

      <div id="RegisteredAt" class="inner jumptarget">
        <h3>The happy couple is registered at the following locations:</h3>
                                                                  <br> <a href="https://www.amazon.com/wedding/share/happilyevereldridge2018" target="_blank"><img src="../img/amazon.jpg" width=150 /></a> <?php echo str_repeat("&nbsp;", 10); ?> <a href="https://www.honeyfund.com/wedding/happilyevereldridge2018" target="_blank"><img src="../img/honeyfund.jpg" width=150 /></a> <?php echo str_repeat("&nbsp;", 10); ?> <a href="https://www.wayfair.com/registry/wedding/dc7ad483-d5a2-4bf0-a4aa-40148ee21ae6?manage=1" target="_blank"><img src="../img/wayfair.jpg" width=150 /></a>  <?php echo str_repeat("&nbsp;", 10); ?> <a href="https://www.crateandbarrel.com/gift-registry/sydnee-spruiell-and-eric-eldridge/r5632953" target="_blank"><img src="../img/crateandbarrel.png" width=200 /></a>
<!--
	<div class="inner">
	  <p translate="no" typeof="schema:PostalAddress">
            <span property="schema:name">Alison Chen and Michael Jones</span><br>
            <span property="schema:streetAddress">4000 Essex Ln</span> Apt. 3203<br>
            <span property="schema:addressLocality">Houston</span>, <abbr title="Texas" property="schema:addressRegion">TX</abbr> <span property="schema:postalCode">77027</span> <abbr property="schema:addressCountry">USA</abbr>
          </p>
        </div>
-->
      </div>

      <div id="honeyfund" class="inner jumptarget">
        <h3>Honeyfund</h3>
                                                                  For those of you unfamiliar with Honeyfund, it&rsquo;s a registry that allows you to contribute cash towards our honeymoon, future house purchase, or any other purpose you&rsquo; like to specify. You can find our page <a href="https://www.honeyfund.com/wedding/happilyevereldridge2018" target="_blank">here</a>. If you would prefer to do something similar, but not online, we will have a space at the venue.
      </div>

      <div id="home" class="inner jumptarget">
        <h3>WayFair</h3>
                                                                                                                                                                                                                                                                    Wayfair is an e-commerce company with an emphasis on home goods, home furnishings and decor items. 
      </div>
    </div>

    <div class="mastfoot">
      <div class="container">
        <div class="inner">
          <p>Made with love by Michael. Cannibalized and customized by Eric. Source can be found <a href="https://github.com/kartoffeln777/happilyevereldridge2018" target="_blank">here</a>.</p>
        </div>
      </div>
    </div>

    <script src="./lib/js/multi-step-modal.js"></script>
    <script>
      transitionRSVP = function(step) {
        $('#rsvpModal').trigger('next.m.'.concat(step));
      };
    </script>
  </body>
</html>
