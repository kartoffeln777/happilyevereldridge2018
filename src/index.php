<!DOCTYPE html>
<?php
$config = parse_ini_file("config.ini");
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="A website for celebrating Alison and Michael's big day">
    <meta name="author" content="Michael Jones">
    <link rel="icon" href="./favicon.ico">

    <title>Alison &amp; Michael's Wedding</title>

    <link href="./lib/css/bootstrap.min.css" rel="stylesheet">
    <link href="./lib/css/bootstrap-theme.min.css" rel="stylesheet">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="./lib/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://addevent.com/libs/atc/1.6.1/atc.min.js" async defer></script>

    <link href="./site.css" rel="stylesheet">
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
            <li><a href="#OurStory">Our Story</a></li>
            <li><a href="#OurWedding">Our Wedding</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Details<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#Accomodations">Accomodations</a></li>
                <li><a href="#Transport">Transport</a></li>
                <li><a href="#ThingsToSee">Things to See</a></li>
              </ul>
            </li>
            <li><a href="#RSVP">RSVP</a></li>
	    <li><a href="./gifts/">Gifts</a></li>
	  </ul>
<!--
          <ul class="nav navbar-nav navbar-right">
            <li class="btn-default"><a href="#about">About</a></li>
            <button class="btn btn-default" type="submit">RSVP</button>
          </ul>
-->
        </div><!--/.nav-collapse -->
      </div><!--/.containter -->
    </nav>

    <div class="masthead">
      <img class="header-image" src="./img/after-proposal-harbor.jpg">
      <h1>Alison &amp; Michael's Big Day</h1>
      <p class="subtitle">We are looking forward to having you join us on our big day!</p>
    </div>

    <div class="container">
      <div class="jumbotron section-header">
        <img class="header-image" src="./img/hands.jpg">
        <div id="OurStory" class="jumptarget"><h2>Our Story</h2></div>
      </div>

      <div id="HowWeMet" class="inner jumptarget">
        <h3>How We Met</h3>
        In March of 2013, Alison noticed Michael across the room at a local board game gathering. He wore HotPink™ shorts, long black crew socks and sandals. At some point, Michael invited her to a round of King of Tokyo, to which Alison obliged; she trounced him. This did not deter Michael, who later asked Alison to be his teammate in a game of Ladies &amp; Gentlemen -  a game where the man treats his lady to nice things, and the lady shows the nice things off to her friends. Alison agreed, and was the Gentleman to his Lady. Together, they were the ultimate power couple and issued a resounding defeat to the rest of the table. A special relationship was born.
      </div>

      <div>
        <h3>Our Proposal</h3>
        While holidaying in Italy, Alison &amp; Michael travelled to Venice. After a day at the Basilica, marvelling at the beautiful treasure Venetian pirates had plundered from Byzantium, Michael insisted on taking a side-trip to see a modern art gallery - The <a href="https://www.google.com/maps/@45.4307284,12.335311,17.88z" target="_blank">Punta della Dogana</a>. Unbeknownst to Alison, Michael intended to propose there, as it offered a panoramic view over the Grand Canal and St. Mark's Square. To sustain the ruse, Michael had purchased tickets for entrance to the gallery before their arrival, but unfortunately for him, things had taken a dark, sinister turn since he last visited the art world. The gallery was filled with sculpture and painting that made the innocents weep, the pious unsure, and the faint of heart fumble. With their hearts and minds forever changed, Michael brought Alison out of the gallery to the waterfront. His nerves high (was it the proposal or the art which afflicted him with nerves? he cannot say), he bent his knee and fumbled in his jacket pocket for a small box. When he looked up at Alison, he could tell that his actions so far had thankfully cleared her mind of the images from earlier. Michael recited a poem he found in a collection of love poetry he had from college - <a href="https://en.wikipedia.org/wiki/Love's_Philosophy" target="_blank">Love's Philosophy by Percy Bysshe Shelley</a>. When he finished, Michael asked Alison to marry him, to which she agreed and kissed him.
      </div>

      <div id="OurWedding" class="inner jumptarget">
        <div class="small-image-frame">
          <img class="header-image" src="./img/wynden.jpg">
        </div>
        <h3>Our Wedding</h3>
        Alison &amp; Michael will be getting married in Houston, TX, where they have made their home. Dinner will be served after the ceremony. They would be honored if you attended the occasion.
        <br>
        <div>
          <h4>The Gist</h4>
          <b>When:</b> February 19<sup>th</sup>, 2017<br>
          <b>Where:</b> <a href="https://www.facebook.com/The-Wynden-391434937603142/" target="_blank">The Wynden</a>&emsp;
          <a href="https://www.google.com/maps/dir//The+Wynden,+1025+S+Post+Oak+Ln,+Houston,+TX+77056/@29.7571248,-95.4627507,15z/data=!4m15!1m6!3m5!1s0x0:0x4aad67163f2b829c!2sThe+Wynden!8m2!3d29.7571248!4d-95.4627507!4m7!1m0!1m5!1m1!1s0x8640c145dc37164b:0x4aad67163f2b829c!2m2!1d-95.4627507!2d29.7571248" target="_blank"><span class="glyphicon glyphicon-map-marker"></span> Directions</a><br>
          <b>How:</b> <a href="https://www.theknot.com/content/wedding-guest-attire-cheat-sheet" target="_blank">Dressy Casual</a>
          <br>
          <br>
          <div title="Add to Calendar" class="addeventatc">
            Add to Calendar
            <span class="start">02/19/2017 05:00 PM</span>
            <span class="end">02/19/2017 11:00 PM</span>
            <span class="timezone">America/Chicago</span>
            <span class="title">Alison &amp; Michael's Wedding Day</span>
            <span class="description">The big day for your favorite people!</span>
            <span class="location">1025 S Post Oak Ln, Houston, TX 77056</span>
            <span class="organizer">Michael Jones</span>
            <span class="organizer_email">rsvp@alisonmichaelwedding.com</span>
            <span class="all_day_event">false</span>
            <span class="date_format">MM/DD/YYYY</span>
            <span class="client"><?php echo $config['addeventclient'] ?></span>
          </div>
	  <br>
          <br>
	  <h4>The Deets</h4>
          <h5>Order of Events</h5>
	    <ul>
	      <li>Guests arrive</li>
              <li>Ceremony starts at 5pm</li>
              <li>Everyone parties</li>
            </ul><br>
          <h5>Wedding Party</h5>
<!--
          <div class="row">
            <div class="col-sm-1">test1</div>
            <div class="col-sm-1">test2</div>
          </div>
-->
          <div class="row">
            <div class="col-sm-8"><b>The Girls</b></div>
            <div class="col-sm-8"><b>The Boys</b></div>
          </div>
          <div class="row">
            <div class="col-sm-8 media">
              <div class="media-left">
                <img class="media-object" src="./img/jenny.jpg" width=64>
              </div>
              <div class="media-body">
                <h5 class="media-heading">Jenny Allen - Matron of Honor</h5>
                Jenny has known Alison since Alison first came to Houston.
              </div>
            </div>
            <div class="col-sm-8 media">
              <div class="media-left">
                <img class="media-object" src="./img/eric_e.jpg" width=64>
              </div>
              <div class="media-body">
                <h5 class="media-heading">Eric Eldridge - Best Man</h5>
                Eric and Michael were classmates from Middle School through College.
              </div>
            </div>
          </div>
        </div>
      </div>

      <div id="Details" class="jumbotron section-header">
        <img class="header-image" src="./img/boat-bright.jpg">
        <h2>Details</h2>
      </div>

      <div id="Accomodations" class="inner jumptarget">
        <h3>Accomodations</h3>
        <div>
          <h4><a href="https://houstongalleria.house.hyatt.com/en/hotel/home.html" target="_blank">Hyatt House Houston/Galleria</a></h4>
          <p>
            3440 Sage Road<br>
            Houston, TX 77056<br>
            <a href="tel:+7136299711">(713) 629-9711</a>
          </p>
          <p>
            Distance from venue: 2.2 miles<br>
            Complimentary shuttle services within a 3-mile radius<br>
          </p>
          <p>
            Group room rate: <b>$95/night + taxes for a Studio Suite with either 1 King Bed or 2 Double Beds</b><br>
            Online booking group code: <b>G-CJWG</b><br>
            Reference when booking by phone: <b>Chen-Jones Wedding</b><br>
          </p>
          <h5><a href="https://houstongalleria.house.hyatt.com/houxggcjwg2017.html" target="_blank">Book online here</a></h5>
          <h5>Hyatt has requested that people make reservations on or before Wednesday, February 15, 2017</h5><br>
        </div>
        <div>
          <h4><a href="https://www.omnihotels.com/hotels/houston" target="_blank">Omni Houston Hotel</a></h4>
          <p>
            4 Riverway<br>
            Houston, TX 77056<br>
            <a href="tel:+17138718181">(713) 871-8181</a>
          </p>
          <p>
            Distance from venue: &frac12; mile (10 minute walk)<br>
            Complimentary shuttle services within a 3-mile radius<br>
          </p>
          <p>
	    <h5>Group Room Rates:</h5>
            <ul>
              <li><b>$130/night + taxes for a Deluxe Room with either 1 King Bed or 2 Queen Beds</b></li>
              <li><b>$140/night + taxes for a Premier Room with 1 King Bed or 2 Queen Beds</b></li>
              <li><b>$230/night + taxes for a Galleria Suite with 1 King Bed</b></li>
            </ul>
	    Booking phone number: <a href="tel:+18008436664">1-800-THE-OMNI</a><br>
            Reference when booking by phone: <b>Alison Chen &amp; Michael Jones Wedding Room Block</b><br>
	  </p>
	  <h5>
            Omni will guarantee these special rates for reservations made on or before Friday, February 3, 2017<br>
            After this date, rates and reservations will be based on hotel availability.
          </h5>
	  <h5><a href="https://www.omnihotels.com/hotels/houston/meetings/chen-jones-wedding" target="_blank">Book online here</a></h5><br>
        </div>
	<div>
          <h4><a href="http://www3.hilton.com/en/hotels/texas/hilton-houston-post-oak-IAHWSHH/index.html" target="_blank">Hilton Houston Post Oak</a></h4>
	  <p>
            2001 Post Oak Blvd<br>
            Houston, TX 77056<br>
            <a href="tel:+17139619300">(713) 961-9300</a>
	  </p>
	  <p>
            Distance from the Venue: 1 mile (20 minute walk)<br>
            Complimentary shuttle services within a 3-mile radius
	  </p>
	  <p>
	    <h5>Group Room Rates:</h5>
            <ul>
              <li><b>$99/night + taxes for a Standard Room with 1 King Bed</b></li>
              <li><b>$119/night + taxes for a Standard Room with 2 Queen Beds</b></li>
            </ul>
            Online booking group code: <font color="red"><b>Coming soon</b></font><br>
            Reference when booking by phone: <font color="red"><b>Coming soon</b></font><br>
	  </p>
	  <h5>
            Hilton has requested that people make reservations on or before Sunday, February 12, 2017
          </h5>
        </div>
      </div>

      <div id="Transport" class="inner jumptarget">
	<h3>Transportation</h3>
        <p>
	  If you won't be driving to Houston for our wedding, here are some helpful tips to get you around town.
	  <ul>
            <li>There are taxi and <a href="https://www.supershuttle.com/" target="_blank">shuttle services</a> for both major Houston airports: George Bush Intercontinental Airport (IAH) and William P. Hobby Airport (HOB).</li>
            <li>Uber is a good option to get around town. If you don't have Uber yet, you can use our <a href="https://www.uber.com/invite/alisonc3729ue" target="_blank">link</a> to get the app. If you use Lyft, it is unfortunately no longer here.</li>
            <li><a href="http://www.ridemetro.org/Pages/Rail.aspx" target="_blank">METRORail</a> is another option to travel within downtown, midtown, the Museum District, and Texas Medical Center. Fare for travel one way is 1.25 USD</li>
          </ul>
      </div>

      <div id="ThingsToSee" class="inner jumptarget">
	<h3>Things to See</h3>
        (Distances shown are from the venue)
	<h4>Indoors</h4>
        <ul>
          <li><a href="https://www.menil.org/visit" target="_blank">The Menil Collection</a> - <b>5 miles</b></li>
          <li><a href="https://www.mfah.org/" target="">Houston Museum of Fine Arts</a> - <b>7 miles</b></li>
          <li><a href="https://www.houstonsymphony.org/" target="_blank">Houston Symphony</a> - <b>7 miles</b></li>
          <li><a href="https://www.alleytheatre.org/" target="_blank">Alley Theatre</a> - <b>7 miles</b></li>
          <li><a href="http://www.hmns.org/" target="_blank">The Houston Museum of Natural Science</a> - <b>8 miles</b></li>
          <li><a href="http://www.hmns.org/cockrell-butterfly-center/" target="_blank">The Cockrell Butterfly Center</a> - <b>8 miles</b></li>
          <li><a href="http://www.saintarnold.com/" target="_blank">Saint Arnold Brewing Company</a> - <b>9 miles</b></li>
        </ul>
	<h4>Outdoors</h4>
        <ul>
	  <li><a href="https://www.tripadvisor.com/Attraction_Review-g56003-d561102-Reviews-Water_Wall-Houston_Texas.html" target="_blank">Gerald D. Hines Waterwall Park</a> - <b>1.5 miles</b> (not a theme park)</li>
          <li><a href="https://www.mfah.org/visit/bayou-bend-collection-and-gardens/" target="_blank">Bayou Bend Collection and Gardens</a> - <b>4 miles</b></li>
          <li><a href="http://www.houstonzoo.org/" target="_blank">Houston Zoo</a> - <b>8 miles</b></li>
          <li><a href="https://tpwd.texas.gov/state-parks/san-jacinto-battleground" target="_blank">San Jacinto Battleground State Historic Site</a> - <b>32 miles</b></li>
          <li><a href="https://spacecenter.org/" target="_blank">Space Center Houston</a> - <b>34 miles</b></li>
        </ul>
        <h4>Restaurants</h4>
        <ul>
	  <li><a href="https://www.yelp.com/biz/the-original-ninfas-on-navigation-houston-3" target="_blank">The Original Ninfa's on Navigation</a> - Our favorite place for Tex-Mex</li>
          <li><a href="https://www.yelp.com/biz/caracol-houston" target="_blank">Caracol</a> - Coastal mexican cuisine</li>
          <li><a href="https://www.yelp.com/biz/cuchara-houston" target="_blank">Cuchara</a> - Mexico City cuisine<b></b></li>
          <li><a href="https://www.yelp.com/biz/korean-noodle-house-houston-4" target="_blank">Korean Noodle House</a></li>
          <li><a href="https://www.yelp.com/biz/fungs-kitchen-houston" target="_blank">Fung's Kitchen</a> - best Dim Sum in town</li>
	  <li><a href="https://www.yelp.com/biz/mala-sichuan-bistro-houston-2" target="_blank">Mala Sichuan Bistro</a> - our favorite restaurant, ever</li>
          <li><a href="https://www.yelp.com/biz/mein-restaurant-houston" target="_blank">Mein (面)</a> - pretty good cantonese fusion place<b></b></li>
        </ul>
      </div>

      <div class="jumbotron section-header">
        <img class="header-image" src="./img/boat-dark.jpg">
        <h2 id="RSVP" class="jumptarget">RSVP</h2>
      </div>

      <div class="inner">
	You can RSVP by sending a message to <a href="mailto:rsvp@alisonmichaelwedding.com">rsvp@alisonmichaelwedding.com</a>.
        <br>
	<b>Please RSVP with us by Tuesday, January 31<sup>st</sup>, 2017.</b>
        <br>
	Be sure to include whether you will be in attendance, the full name of your guest, your mailing address, and - if it isn't the one used to RSVP - what your preferred email address for future contact might be. We hope to see you at our wedding!
      </div>

      <!-- Button trigger modal -->
<!--
      <button type="button" class="btn btn-default" data-toggle="modal" data-target="#rsvpModal">
        Launch demo modal
      </button>
-->

      <div class="modal multi-step fade" id="rsvpModal" tabindex="-1" aria-labelledby="rsvpModalLabel" role="dialog">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <!--<h3 class="modal-title" id="rsvpModalLabel">This is a Demo</h3>-->
              <h3 class="modal-title step-1" data-step="1">RSVP</h3>
              <h3 class="modal-title step-2" data-step="2">Step 2</h3>
            </div>
            <div class="modal-body step step-1">
	      <form id="checkRSVPForm">
	        First Name: <input type="text" name="first_name" />
                Last Name: <input type="text" name="last_name" />
              </form>
            </div>
	    <form class="modal-body step step-2">
              This is step 2.
	    </form>
	    <div class="modal-body step step-3">
              You've already RSVP'd! No need to do anything further, but if you want you can <a href="mailto:rsvp@alisonmichaelwedding.com">email us</a> if you think you need to share anything with us.
	      <form id="checkAgainRSVPForm">
	        First Name: <input type="text" name="first_name" />
                Last Name: <input type="text" name="last_name" />
              </form>
            </div>
	    <div class="modal-body step step-4">
              Sorry, but you're not on the guest list. We're super flattered that you want to join us, though. Feel free to <a href="mailto:rsvp@alisonmichaelwedding.com">email us</a> if you think there has been some sort of mistake.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button id="checkRSVPButton" type="button" class="btn btn-primary step step-1" data-step="1">Check Name</button>
                <button id="checkAgainRSVPButton" type="button" class="btn btn-primary step step-3" data-step="1">Check Again</button>
            </div>
          </div>
        </div>
      </div>
    </div> <!-- /container -->

    <div class="mastfoot">
      <div class="container">
        <div class="inner">
          <p>Made with love by <a href="https://autorefactorer.com" target="_blank">Michael</a>. Source can be found <a href="https://github.com/PisoMojado/alisonmichaelwedding" target="_blank">here</a>.</p>
        </div>
      </div>
    </div>

    <script src="./lib/js/multi-step-modal.js"></script>
    <script>
      //A script for animating the anchor links
      $('a[href*=\\#]').on('click', function(event) { 
        event.preventDefault();
        $('html,body').animate({ scrollTop:$(this.hash).offset().top }, 400);
      });
    </script>
    <script>
      transitionRSVP = function(step) {
        $('#rsvpModal').trigger('next.m.'.concat(step));
      };
      $(function() {
        $("#checkRSVPButton").click(function() {
          $.ajax({
            type : 'POST',
            url : 'https://alisonmichaelwedding.com/check-rsvp/',
            data : $("#checkRSVPForm").serialize(),
            processData : false,
	    success : function(result) {
	      if(result === "already_guest") {
                transitionRSVP('3');
              } else if(result === "not_invited") {
                transitionRSVP('4');
	      } else {
                transitionRSVP('2');		      
	      }
              console.log(result);
            },
            error: function(xhr, resp, text) {
              console.log(xhr, resp, text);
	    }
          });
          return false;
        });
      });
    </script>
  </body>
</html>
