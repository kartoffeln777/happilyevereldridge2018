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
    <meta name="description" content="A website for celebrating Eric and Sydnee's big day">
    <meta name="author" content="Eric Eldridge">
    <link rel="icon" href="./favicon.ico">

    <title>Eric &amp; Sydnee&apos;s Wedding</title>

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
                <li><a href="#ThingsToSee">Things to See</a></li>
              </ul>
            </li>
            <li><a href="#RSVP">RSVP</a></li>
	        <li><a href="./gifts/">Gifts</a></li>
            <li><a href="./pictures/">Pictures</a></li> 
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
      <img class="header-image" src="http://i.imgur.com/qIfWyFU.jpg"></img>
        <h1>Eric &amp; Sydnee <br>
          03.17.2018</h1>
            <p class="subtitle">Join us in celebrating our love!</p>
    </div>

    <div class="container">
      <div class="jumbotron section-header">
        <center><img class="header-image" src="http://i.imgur.com/CHnF61S.jpg" width=500 ></center>
        <div id="OurStory" class="jumptarget"><h2>Our Story</h2></div>
      </div>

      <div id="HowWeMet" class="inner jumptarget">
        <h3>How We Met</h3>
        Sydnee and Eric met in October of 2011 in Austin, TX at a Halloween party. Sydnee was dressed as a girl scout while Eric was in the finest of lab coats to reflect his docotral profession. They hit it off immediately and began visiting one another on the weekends driving back and forth between Austin and Nacogdoches 3 hours away. We shared a sense of humor and a love of the outdoors that became apparent during our first date hiking and swimming at Hamilton Pool.
      </div>

      <div>
        <h3>Our Proposal</h3>
        The two of us have always been very outdoorsy. Our first date was at Hamilton Pool in Austin, Tx, and we try to take at least one big hiking/camping trip every year. This year, we went back to the site of our first big adventure together, Rocky Mountain National Park. We planned an intense week of hiking, climbing, and snow-shoeing that was sure to be a great time. On the third day of our trip, a blizzard named Helena blew in and threatened to cancel our plans for the following day. <br><br>
        Against her better judgement, Sydnee relented to Eric&apos;s insistence that we go ahead with our plans to snow-shoe the next day. We got up bright and early after a night of trying to sleep through a nearly constant snow storm and hit the trail (which by this point, was covered in nearly three feet of snow). Trekking through thick snow (which was still coming down in flurries), we came to a small wooden bridge situated over a frozen stream. Eric fumbled in his pocket for his grandmother&apos;s  ring and dropped to one knee (with all the elagance of a drunk giraffe thanks to the snowshoes). <br><br>
        She said YES! and soon after, we hurried back to the campsite to break down camp as quickly as possible and get out of the park and into a hotel with a nice warm fireplace and a hot dinner. It was a a magical and memorbale trip never to be forgotten.<br>
      </div>

      <div id="OurWedding" class="inner jumptarget">
        <div class="small-image-frame">
          <img class="header-image" src="http://i.imgur.com/aYsRvtk.jpg">
        </div>
        <h3>Our Wedding</h3>
        <p>Eric &amp; Sydnee will be getting married at the Springs in Magnolia on the north side of Houston, TX, near the Woodlands. A cocktail hour with passed hors d&apos;oeuvres will be served immediately following the ceremony followed by a buffet style dinner. We would be honored if you would join us for the occasion. Unless you did not receive an invitation, which begs the question of how you found our website and why you&apos;re reading this far down the page. </p><br>
        <div id="OurWeddingGist">
          <h4>Time and Location</h4>
          <center>

          <div class="col-lg-6 col-lg-offset-3">
            <div class="carousel slide" id="austinCarousel" style="width: 400px; margin 0 auto">
              <div class="carousel-inner">
                <div class="item active">
                  <div class="col-md-4"><a href="#"><img src="http://i.imgur.com/cSYor5Q.png" class="img-responsive"></a></div>
                </div>
                <div class="item">
                  <div class="col-md-4"><a href="#"><img src="http://i.imgur.com/oLb8X8T.png" class="img-responsive"></a></div>
                </div>
                <div class="item">
                  <div class="col-md-4"><a href="#"><img src="http://i.imgur.com/j1pFxtK.png" class="img-responsive"></a></div>
                </div>
                <div class="item">
                  <div class="col-md-4"><a href="#"><img src="http://i.imgur.com/d9pMl5K.png" class="img-responsive"></a></div>
                </div>
                <div class="item">
                  <div class="col-md-4"><a href="#"><img src="http://i.imgur.com/DhLVtxL.jpg" class="img-responsive"></a></div>
                </div>
                <div class="item">
                  <div class="col-md-4"><a href="#"><img src="http://i.imgur.com/j1pFxtK.png" class="img-responsive"></a></div>
                </div>

                <a class="left carousel-control" href="#austinCarousel" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
                <a class="right carousel-control" href="#austinCarousel" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
              </div>
            </div>
          </div>

          </center>

          <br><br><br><br>
          <br>
          <br>

          <b>When:</b> March 17<sup>th</sup>, 2018 at 430 PM<br>
          <b>Where:</b> <a href="http://crystal.thespringsevents.com/" target="_blank">The Springs</a>&emsp;
          <a href="https://www.google.com/maps/dir/''/the+springs+in+magnolia/@30.2130804,-95.8495072,12z/data=!3m1!4b1!4m8!4m7!1m0!1m5!1m1!1s0x8646d77d183588d5:0xb668d90f9c3ca10b!2m2!1d-95.779467!2d30.213099" target="_blank"><span class="glyphicon glyphicon-map-marker"></span> Directions</a><br>
          <b>Dress Attire:</b> <a href="https://www.theknot.com/content/wedding-guest-attire-cheat-sheet" target="_blank">Formal</a>
          <br>
          <br>
          <div title="Add to Calendar" class="addeventatc">
            Add to Calendar
            <span class="start">03/17/2018 04:30 PM</span>
            <span class="end">03/17/2018 11:00 PM</span>
            <span class="timezone">America/Chicago</span>
            <span class="title">Eric &amp; Sydnee&apos;s Wedding Day</span>
            <span class="description">The big day for your favorite people!</span>
            <span class="location">33301 Old Hempstead Rd, Magnolia, TX 77355</span>
            <span class="organizer">Eric Eldridge</span>
            <span class="organizer_email">rsvp@alisonmichaelwedding.com</span>
            <span class="all_day_event">false</span>
            <span class="date_format">MM/DD/YYYY</span>
            <span class="client"><?php echo $config['addeventclient'] ?></span>
          </div><br><br>

	    </div><!--OurWeddingGist-->
      </div>
    </div>

	<div id="OurWeddingDeets">
	  <h4>The Day Of Schedule</h4>
	    <ul>
          <li><span style="text-decoration: underline;">4:45 PM</span>: Guests arrive</li>
          <li><span style="text-decoration: underline;">5:00 PM</span>: Ceremony begins </li>
          <li><span style="text-decoration: underline;">5:30 PM</span>: Appetizers/Passed hors d&apos;oeuvres</li>
          <li><span style="text-decoration: underline;">6:30 PM</span>: Grand Entrance/Dinner</li>
          <li><span style="text-decoration: underline;">8:00 PM</span>: Cake cutting</li>
          <li><span style="text-decoration: underline;">8:15 PM</span>: Dancing </li>
          <li><span style="text-decoration: underline;">10:30 PM</span>: Grand Exit! </li>
        </ul><br>



        <center><h3>Wedding Party</h3></center>

      <div class="row">
	    <div class="col-md-6">
          <center><u><b><h4>The Girls</h4></b></u></center>
        </div>
	    <div class="col-md-6">
          <center><u><b><h4>The Boyzzz</h4></b></u></center>
        </div>
      </div>

      <div class="row">
	    <div class="col-md-6">
          <div class="media media-space">
            <div class="media-left">
              <img class="media-object" src="./img/jess_o.jpg" width=150>
            </div>
            <div class="media-body">
              <h5 class="media-heading">Jessica Oswald - Maid of Honor</h5>
                Syd and Jess met in pre-school and grew up together. From playing on the same U4 soccer team to playing against each other in college, they’ve always been the best of friends. They lived together while on an exchange trip to Japan, and have spent countless hours watching mind-numbing amounts of Criminal Minds.  
	        </div>
          </div>
        </div>
	    <div class="col-md-6">
          <div class="media media-space">
            <div class="media-left">
              <img class="media-object" src="./img/michael_butterfly.jpg" width=150>
            </div>
            <div class="media-body">
              <h5 class="media-heading">Michael Jones - Best Man</h5>
                Eric and Michael were classmates going all the way back to Middle School and all through college at UT rooming together on several occasions. Michael also lives in Houston and was recently married in Feb 2017
            </div>
	      </div>
        </div>
      </div>

      <br>

      <div class="row">
        <div class="col-md-6">
          <div class="media media-space">
            <div class="media-left">
              <img class="media-object" src="./img/soojin_h.jpg" width=150>
            </div>
            <div class="media-body">
		      <h5 class="media-heading">Soojin Han - Maid of Honor</h5>
              Soojin and Syd met while both were dying in the pursuit of a decent grade in Dr. Langley’s chemistry class. Long nights of marathon study sessions, nights out full of hilarious stunts, and additional mind-numbing amounts of Criminal Minds made them the best of friends. The two have developed a love of traveling together, trying new food, and laying around with Syd and Eric’s cats. 
 
            </div>
          </div>
        </div>
	    <div class="col-md-6">
          <div class="media media-space">
            <div class="media-left">
              <img class="media-object" src="./img/eric_gumby.jpg" width=150>
            </div>
            <div class="media-body">
              <h5 class="media-heading">Eric Pittman - Best Man</h5>
              As with Michael, Eric and Eric knew each other from middle school all through college, also rooming together with Michael and John. Eric now lives in St. Louis where he is completing his Residency. 
            </div>
	      </div>
	    </div>
      </div>

      <br>

      <div class="row">
        <div class="col-md-6">
          <div class="media media-space">
            <div class="media-left">
              <img class="media-object" src="./img/cassie_j.jpg" width=150>
            </div>
            <div class="media-body">
              <h5 class="media-heading">Cassie Jay </h5>
              Syd first met Cassie in the classiest establishment in Nac-a-nowhere, The Annex. From there, the two grew closer as colleagues at SFA. Sydnee was given the honor of standing as a bridesmaid in Cassie’s wedding. From watching Jersey Shore while they got ready to go out, to tricking Cassie into coming to her own engagement party, the two have always remained close, even after Cassie’s move to CO.  
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="media media-space">
            <div class="media-left">
              <img class="media-object" src="./img/john_e.jpg" width=150>
            </div>
            <div class="media-body">
              <h5 class="media-heading">John Elvig</h5>
              Eric &amp; John became friends after John transferred into the Aerospace Engineering department at the Universtiy of Texas. Their love of baseball and hatred of their many classes together formed a strong bond between them. It should be noted that Eric has won 3 of the last 4 tennis matches between the two of them.
            </div>
          </div>
        </div>
      </div>

      <br>

      <div class="row">
        <div class="col-md-6">
          <div class="media media-space">
            <div class="media-left">
              <img class="media-object" src="http://i.imgur.com/yPhVOGK.png" width=150>
            </div>
            <div class="media-body">
              <h5 class="media-heading">Kelley Driskill</h5>
                Syd and Kelley are first cousins, but have always considered themselves a little closer. Sydnee is the godmother of Kelley’s son, Gavin. The two briefly (and chaotically) lived together in college. Kelley-belly is a proud member of the United States Air Force and will just have returned from her first deployment in January 2018. Syd could not be more proud. 
            </div>
        </div>
        </div>
        <div class="col-md-6">
          <div class="media media-space">
            <div class="media-left">
              <img class="media-object" src="./img/deric_e.jpg" width=150>
            </div>
            <div class="media-body">
              <h5 class="media-heading">Deric Eldridge</h5>
                Deric is the older of Eric&apos;s two younger brothers. 4 and 1/2 Eric&apos;s junior, Deric (aka Thor) grew up with Eric where they attended the Boy Scouts, soccer games (playing together for the Mongolian Death Worms indoor soccer team), baseball games, and all other manner of family fun.
            </div>
          </div>
        </div>
      </div>

      <br>

      <div class="row">
        <div class="col-md-6">
          <div class="media media-space">
            <div class="media-left">
              <img class="media-object" src="http://i.imgur.com/1To0oSK.png" width=150>
            </div>
            <div class="media-body">
              <h5 class="media-heading">Liz Sager</h5>
                Syd first met Liz while participating in the most respected activity in the world: playing a game of Kickball. They were introduced by Eric and his groomsman Matt (notice they have the same last name). The pair of pairs has become great friends, participating in various food contests, playing board games, and hanging out with their awesome 2yo son, Weston.  
            </div>
        </div>
        </div>
        <div class="col-md-6">
          <div class="media media-space">
            <div class="media-left">
              <img class="media-object" src="./img/seanpaul_e.jpg" width=150>
            </div>
            <div class="media-body">
              <h5 class="media-heading">SeanPaul Eldridge</h5>
                  SeanPaul is the youngest of Eric&apos;s 2 brothers. He is currently attending college in San Antonio where he is getting a degree in Equinology to pursue his passion for horses which knows no bounds. 
            </div>
          </div>
        </div>
      </div>

      <br>

      <div class="row">
        <div class="col-md-6">
          <div class="media media-space">
            <div class="media-left">
              <img class="media-object" src="http://i.imgur.com/u8sLtP0.png" width=150>
            </div>
            <div class="media-body">
              <h5 class="media-heading">Michelle Karam</h5>
                Michelle (MRTL as she’s known in the streets) and Syd first became acquainted at UH, as cohorts in the same class of students pursuing their master’s degrees. The two have since bonded over cramming their faces between classes, banging out term papers, and drinking Daquiri’s on the go. If you frequent The Nook on the UH Campus, you’re likely to see them half-working, half-gossiping at all hours of the day.  
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="media media-space">
            <div class="media-left">
              <img class="media-object" src="http://i.imgur.com/otFVRPZ.png" width=150>
            </div>
            <div class="media-body">
              <h5 class="media-heading">Matt Sager</h5>
                Eric &amp; Matt also go back to high school, playing soccer both for the high school and for the much more successful indoor soccer team, the Mongolian Deathworms. After a brief hiatus the dynamic duo linked up again for a Comeback Tour when Matt moved to the great city of Houston, TX to form the all-time great joker super team, "The Bruise Brothers". 
            </div>
        </div>
        </div>
      </div>

      <br>

      <div class="row">
        <div class="col-md-6">
          <div class="media media-space">
            <div class="media-left">
              <img class="media-object" src="http://i.imgur.com/WaCFYY5.png" width=150>
            </div>
            <div class="media-body">
              <h5 class="media-heading">Olivia Di Rodriguez</h5>
              Syd and Olivia met during their time at The University of St. Thomas. Both were mutual friends of Steph Ibrahim, and became close to each other as they were both Steph’s plus-one to something. They lived together last year, and spent a great deal of time eating sushi, cooking, entertaining guests, laying around, and generally chillin. The two spend a great deal of time putting outfits together, shopping Sephora sales, and talking about cute, fluffy animals.  
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="media media-space">
            <div class="media-left">
              <img class="media-object" src="http://i.imgur.com/s9dyxPU.jpg" width=150>
            </div>
            <div class="media-body">
              <h5 class="media-heading">Garrett Fair</h5>
                 Eric &amp; Garrett&apos;s rivalry started in the hallowed halls of Windcrest Elementary where the two young stalwarts duked it out to see which of them was going to be the Accellerated Reader champ. Though Eric emerged vitorious, they remained friends and attended school together all through college graduation at UT.  
            </div>
          </div>
        </div>
      </div>

      <br>

      <div class="row">
        <div class="col-md-6">
          <div class="media media-space">
            <div class="media-left">
              <img class="media-object" src="http://i.imgur.com/6tKrnW8.png" width=150>
            </div>
            <div class="media-body">
              <h5 class="media-heading">Stephanie Ibrahim</h5>
              Syd and Steph first met in a Nucleic Acids class during Syd’s senior year at UST. They quickly became friends after Syd invited Steph over for pancakes and mimosas, and taught her how to pre-game senior-level biology courses. From eating lots of specific, themed foods on Tuesdays and Thursdays, to watching each other succeed in seminars, the two have always been close friends. Steph is currently a medical student at UTMB in Galveston.  
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="media media-space">
            <div class="media-left">
              <img class="media-object" src="https://lh4.googleusercontent.com/XRjwSMfDO61O0uymeIUhBZe4MpFhK9VRp_WievA69p0JBYSf3j-xjQm1WZzbMmKv7ZT5PmAdN-FKtWn3tboWlAxytJUjP19PJJ9H=w2560-h1452-rw" width=150>
            </div>
            <div class="media-body">
              <h5 class="media-heading">Little L (Lydia Henderson)</h5>
              Lydia is our flower girl and is 5 years old. She loves making mud pies at GiGi&apos;s house, playing outside, and swimming in the pool.
            </div>
          </div>
        </div>
      </div>
 
      <br>

      <div class="row">
        <div class="col-md-6">
          <div class="media media-space">
            <div class="media-left">
              <img class="media-object" src="https://lh4.googleusercontent.com/LCdoI8zYjfK8OGOuL8WYhZiFsVbob7nzBC6gk_d32M3LYaYebrSbWsejCOSz_dDZBT0WstsePeMlozIwcTOGeQ7S7F8ZMOdlO1Ed=w2560-h1452" width=150>
            </div>
            <div class="media-body">
              <h5 class="media-heading">Gavin Charles</h5>
              Gavin is Eric and Sydnee&apos;s 4 years old godson and will be one of the ringbearers. He loves puppies, kitties, and protecting the world from zombies. He&apos;s also highly skilled at playing the recorder.
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="media media-space">
            <div class="media-left">
              <img class="media-object" src="https://lh4.googleusercontent.com/2CPI7Rb5Mmz3LRdZKlhnrmwF0zWplE-s6dk22uF6jISsADV-Ih45g5K06RKmughKD-v1W778ityImET73cbv=w2560-h1452" width=150>
            </div>
            <div class="media-body">
              <h5 class="media-heading">Weston Sager</h5>
              Weston is 2 years old and will also be a ringbearer. He really likes trains and cars and his stuffed doggie. He&apos;s also a bit of a linguist as he can recite most letters of the alphabet.
            </div>
          </div>
        </div>
      </div>


<!--last-row-->

	</div><!--OurWeddingDeets-->

      </div><!--OurWedding-->

      <div id="Details" class="jumbotron section-header">
<center><img class="header-image" src="http://i.imgur.com/rDrRFV9.jpg"></center>
        <h2>Details</h2>
      </div>

      <div id="Accomodations" class="inner jumptarget">
        <h3>Accomodations</h3>
      <div style="clear: right;">
        <p style="float: right;"><img src="http://i.imgur.com/aR2KGas.jpg" height="300" width="400"  style="padding-right:0%"></p>
        <p>
      <div>
        <h4><a href="https://www.ihg.com/staybridge/hotels/us/en/tomball/tmbsb/hoteldetail?qAAR=IPNL3&qAdlt=1&qBrs=6c.hi.ex.rs.ic.cp.in.sb.cw.cv.ul.vn.ki.sp.nd.ct&qChld=0&qCpid=100255264&qFRA=1&qGRM=0&qIta=99502056&qPSt=0&qRRSrt=rt&qRef=df&qRms=1&qRpn=1&qRpp=20&qRtP=IPNL3&qSHp=1&qSmP=3&qSrt=sBR&qWch=0&srb_u=1&icdv=99502056" target="_blank">Staybridge Suites in Tomball</a></h4>

         10011 Farm to Market Road 2920 <br>
         Tomball, TX 77375<br>
         <a href="tel:+8326398310">(832) 639-8310</a>
        </p>
<br>
          <p>
            Distance from venue: 16.5 miles (~30 min drive)<br>
            Complimentary shuttle service to/from Staybridge to the venue available<br>
          </p>
<br>
          <p>
            Group room rate: <b>$109/night + taxes for a Queen suite </b><br> 
            Rate Preference: <b>CRYSTAL SPRINGS* </b> <br>
            Corporate ID: <b>100255264  </b><br>
            IATA #: <b>99502056 </b><br>
            Online booking group code: <b>TBD</b><br>
            Reference when booking by phone: <b>Eldridge-Spruiell Wedding at Crystal Springs </b><br>
            <b>(Please mention Crystal Springs when booking)</b>
          </p>
          <!--- <h5>Staybridge has requested that people make reservations on or before Wednesday, Mar 14, 2018</h5> --->
<br>
          <h5><a href="https://www.ihg.com/staybridge/hotels/us/en/tomball/tmbsb/hoteldetail?qAAR=IPNL3&qAdlt=1&qBrs=6c.hi.ex.rs.ic.cp.in.sb.cw.cv.ul.vn.ki.sp.nd.ct&qChld=0&qCpid=100255264&qFRA=1&qGRM=0&qIta=99502056&qPSt=0&qRRSrt=rt&qRef=df&qRms=1&qRpn=1&qRpp=20&qRtP=IPNL3&qSHp=1&qSmP=3&qSrt=sBR&qWch=0&srb_u=1&icdv=99502056" target="_blank"><u>Book online here</a></h5></u><br>
        </div>
                                 </div>
        <!---
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
            After this date, rates and reservations will be based on hotel availability
       </div>
       --->
      </div>

      <div id="Transportation" class="inner jumptarget">
	<h3>Transportation</h3>
        <p>
        If you won&apos;t be driving to Houston for our wedding, here are some helpful tips to get you around town.
	  <ul>
            <li>There are taxi and <a href="https://www.supershuttle.com/" target="_blank">shuttle services</a> for George Bush Intercontinental Airport (IAH). This is the airport that will be closer to the venue. You&apos;re welcome to fly into Hobby, but just know that it will be a significantly longer (~45 min) drive. </li>
          <li>Uber and Lyft are both good options to get around town if you prefer not to drive..
          </ul>
      </div>

        <h3>Things to See <br><br></h3>

        <h4>-Downtown Houston</h4>
        
	    <h5>Indoors</h5>
        <ul>
          <li><a href="https://www.menil.org/visit" target="_blank">The Menil Collection</a> </li>
          <li><a href="https://www.mfah.org/" target="">Houston Museum of Fine Arts</a> </li>
          <li><a href="https://www.houstonsymphony.org/" target="_blank">Houston Symphony</a> </li>
          <li><a href="https://www.alleytheatre.org/" target="_blank">Alley Theatre</a> </li>
          <li><a href="http://www.hmns.org/" target="_blank">The Houston Museum of Natural Science</a> </li>
          <li><a href="http://www.hmns.org/cockrell-butterfly-center/" target="_blank">The Cockrell Butterfly Center</a> </li>
          <li><a href="http://www.saintarnold.com/" target="_blank">Saint Arnold Brewing Company</a> </li>
        </ul>
	    <h5>Outdoors</h5>
        <ul>
	      <li><a href="https://www.tripadvisor.com/Attraction_Review-g56003-d561102-Reviews-Water_Wall-Houston_Texas.html" target="_blank">Gerald D. Hines Waterwall Park</a>  (not a theme park)</li>
          <li><a href="https://www.mfah.org/visit/bayou-bend-collection-and-gardens/" target="_blank">Bayou Bend Collection and Gardens</a> </li>
          <li><a href="http://www.houstonzoo.org/" target="_blank">Houston Zoo</a> </li>
          <li><a href="https://tpwd.texas.gov/state-parks/san-jacinto-battleground" target="_blank">San Jacinto Battleground State Historic Site</a> </li>
          <li><a href="https://spacecenter.org/" target="_blank">Space Center Houston</a> </li>
        </ul>

        <h4>-Magnolia/Tomball</h4>
	    <h5>Indoors</h5>
        <ul>
          <li><a href="https://theemptyglass.com/" target="_blank">The Empty Glass</a> </li>
          <li><a href="https://lonepint.com/" target="">Lone Pint Brewery</a> </li>
          <li><a href="https://www.tripadvisor.com/Attraction_Review-g56220-d5845855-Reviews-The_Golden_Retriever_Pub_Magnolia_Tx-Magnolia_Texas.html" target="_blank">The Golden Retreiever Pub</a> </li>
        </ul>
	    <h5>Outdoors</h5>
        <ul>
	      <li><a href="http://www.pinebrook-farms.com" target="_blank">Horseback Riding</a> </li>
          <li><a href="http://www.mattfamilyorchard.com" target="_blank">Matt Family Orchard</a> </li>
          <li>Saturday Morning Farmer&#8217;s Market on Tamina <br>
          32907 Tamina Rd, Magnolia, TX 77354 <br></li>
          Saturday 9am-1pm</li>
        </ul>


        <!--
        <h4>Restaurants (near downtown)</h4>
        <ul>
          <li><a href="http://aladdinshouston.com/" target="_blank">Aladdin&#8217;s</a> - Mediterranean cuisine</li>
          <li><a href="https://www.yelp.com/biz/cafe-pita-galleria-houston-3" target="_blank">Cafe Pita</a> - Bosnian cuisine. There are other restaurants by similar names, so make sure you pick the right one.</li>
          <li><a href="https://www.yelp.com/biz/caracol-houston" target="_blank">Caracol</a> - Coastal mexican cuisine</li>
          <li><a href="https://www.yelp.com/biz/cuchara-houston" target="_blank">Cuchara</a> - Mexico City cuisine</li>
          <li><a href="https://www.yelp.com/biz/divino-houston" target="_blank">Divino</a> - Fancy Italian cuisine</li>
	  <li><a href="https://www.yelp.com/biz/fadis-meyerland-mediterranean-grill-houston?osq=mediterranean+restaurants" target="_blank">Fadi's</a> - Mediterranean cuisine. Same owners as Aladdin's, but an upgrade in atmosphere</li>
          <li><a href="https://www.yelp.com/biz/fungs-kitchen-houston" target="_blank">Fung's Kitchen</a> - Best Dim Sum in town</li>
          <li><a href="https://www.yelp.com/biz/kata-robata-sushi-and-grill-houston" target="_blank">Kata Robata</a> - Japanese cuisine. They have have fresh wasabi if you're interested.  Amazing sushi and spicy soy ramen</li>
          <li><a href="https://www.yelp.com/biz/korean-noodle-house-houston-4" target="_blank">Korean Noodle House</a> - Great soup noodles, especially on a cold day</li>
	  <li><a href="https://www.yelp.com/biz/mala-sichuan-bistro-houston-2" target="_blank">Mala Sichuan Bistro</a> - Our favorite restaurant, ever</li>
          <li><a href="https://www.yelp.com/biz/masraffs-houston" target="_blank">Masraff's</a> - New American/Seafood.  They are catering our wedding, and we highly recommend their restaurant</li>
          <li><a href="https://www.yelp.com/biz/mein-restaurant-houston" target="_blank">Mein (面)</a> - Pretty good cantonese fusion place</li>
          <li><a href="https://www.yelp.com/biz/north-italia-houston" target="_blank">North Italia</a> - Italian cuisine.  We strongly recommend that you make a reservation in advance</li>
	      <li><a href="https://www.yelp.com/biz/the-original-ninfas-on-navigation-houston-3" target="_blank">The Original Ninfa's on Navigation</a> - Our favorite place for Tex-Mex</li>
          <li><a href="https://www.yelp.com/biz/thai-gourmet-houston" target="_blank">Thai Gourmet</a> - Best Thai food in Houston. The chicken fried rice and green/red curry is Alison&#8217;s personal favorites</li>
        </ul>
      -->
      </div>

      <div class="jumbotron section-header">
        <center><img class="header-image" src="http://i.imgur.com/m2dgESZ.jpg" width=60%></center>
        <h2 id="RSVP" class="jumptarget">RSVP</h2>
      </div>

      <div class="inner">
	You can RSVP by sending a message to <a href="mailto:rsvp@happilyevereldridge2018.com">rsvp@happilyevereldridge2018.com</a>.
        <br>
	<b>Please RSVP with us by Wednesday, January 31<sup>st</sup>, 2018.</b>
        <br>
        We look forward to having you at our wedding! Please note that both the ceremony and reception will be adults only. However, babysitting services will be available upon request. Be sure to include whether you will be in attendance, the full name of your guest (if applicable), if you will require babysitting services, your mailing address, and - if it isn&apos;t the one used to RSVP - what your preferred email address for future contact might be. We hope to see you at our wedding!
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
        <!---
          <p>Made with love by <a href="https://autorefactorer.com" target="_blank">Michael</a>. Source can be found <a href="https://github.com/PisoMojado/alisonmichaelwedding" target="_blank">here</a>.</p>
        --->
        </div>
      </div>
    </div>

    <script src="./lib/js/carousel.js"></script>
    <script src="./lib/js/multi-step-modal.js"></script>
    <script>
      //A script for animating the anchor links
  /*    $('a[href*=\\#]').on('click', function(event) { 
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
        }); */
    </script>
  </body>
</html>
