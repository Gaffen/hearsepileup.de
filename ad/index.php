<!--
_-_-                                          -__ /\\     ,,
  /,              _                             ||  \\  ' ||
  || __    _-_   < \, ,._-_  _-_,  _-_         /||__|| \\ ||  _-_  \\ \\ -_-_
 ~||-  -  || \\  /-||  ||   ||_.  || \\        \||__|| || || || \\ || || || \\
  ||===|| ||/   (( ||  ||    ~ || ||/           ||  |, || || ||/   || || || ||
 ( \_, |  \\,/   \/\\  \\,  ,-_-  \\,/        _-||-_/  \\ \\ \\,/  \\/\\ ||-'
       `                                        ||                       |/
                                              Zombie rock and roll       '
-->

<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!-- Consider adding a manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title>HEARSE PILEUP</title>
	<meta content="Hearse Pileup; Zombie Rock and Roll" name="description" />
	<meta content="Matt, Gaffen, Matthew, Music, QOTSA, Dead Weather, Tony Hoang, Wojciech Tybus, Birthday Party, Tone-Deaf Messiah" name="keywords" />
	<link rel="stylesheet" type="text/css" href="css/HearseLooks.css?ver=0.1" />
    <meta name="viewport" content="width=device-width,initial-scale=1">

	<link rel="shortcut icon" href="favicon.png" />

    <script src="js/libs/modernizr-2.0.6.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/libs/jquery-1.6.4.min.js"><\/script>')</script>
    <script type="text/javascript">
	$(document).ready(function() {

	    $.ajax({

		url:  "http://api.songkick.com/api/3.0/artists/5287493/calendar.json?apikey=dzuyzOvYY0uXyUcS&jsoncallback=?",

		dataType:   "jsonp", // <== JSON-P request

		success:    function(data){

		    if(data["resultsPage"]["totalEntries"] === 0 || data == null){
			$("#nextgig").append('<p><strong>No new Hearse gigs for now</strong> <br/>we must be busy getting drunk,<br/>come back soon for more gigs!<p>');
		    } else {
			//var prettyDate = data["resultsPage"]["results"]["event"][0]["displayName"].match(/\(.*\)/).toString();
			//prettyDate = prettyDate.substring(1, prettyDate.length - 1);
			//$("#nextgig").append('<p>' + data["resultsPage"]["results"]["event"][0]["displayName"] + ' &#64; <a href="' + data["resultsPage"]["results"]["event"][0]["venue"]["uri"] + '" target="_blank">' + data["resultsPage"]["results"]["event"][0]["venue"]["displayName"] + '</a><br/>' + '<strong>' + data["resultsPage"]["results"]["event"][0]["location"]["city"] + '<br/><a href="' + data["resultsPage"]["results"]["event"][0]["uri"] + '" target="_blank">Click for details</a><p>');
		    }
		}
	    });
	});
    </script>
</head>

<body>
  <div class="watchthisspace">
  <h1>HEARSE PILEUP</h1>
  <img src="images/ticktock.jpg" />
  <h2 class="ticktock">PRETTY<br/>
  SHINY<br/>
  THINGS</h2>
  <div class="countdown"></div>
<!--  <div id="nextgig">
		<a href="http://www.songkick.com/artists/5287493-hearse-pileup" title="Gig listings courtesy of the Songkick API"><img src="images/songkick.png" /></a><h4>EP LAUNCH:</h4>
	    </div>
  </div>-->

      <!-- JavaScript at the bottom for fast page loading -->
    <script type="text/javascript" src="js/script.js"></script>
    <!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
    <script type="text/javascript" src="js/lightbox.js"></script>


    <!-- scripts concatenated and minified via build script -->
    <script defer src="js/plugins.js"></script>
    <script defer src="js/script.js"></script>
    <script defer src="js/jquery.countdown.min.js"></script>
    <!-- end scripts -->

    <script>
    var _gaq=[['_setAccount','UA-9918791-5'],['_trackPageview'],['_trackPageLoadTime']];
    (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
    g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
    s.parentNode.insertBefore(g,s)}(document,'script'));
    $(function () {
    $('.countdown').countdown({until: new Date(2013, 2-1, 4), timezone: -13, compact: true,
    description: ''});
    });
    </script>

  <!-- Prompt IE 6 users to install Chrome Frame. Remove this if you want to support IE 6.
       chromium.org/developers/how-tos/chrome-frame-getting-started -->
  <!--[if lt IE 7 ]>
    <script defer src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
    <script defer>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
  <![endif]-->

</body>
</html>
