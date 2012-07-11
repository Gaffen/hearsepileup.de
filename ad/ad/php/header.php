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
	<link rel="stylesheet" type="text/css" href="css/HearseLooks.css" />
    <meta name="viewport" content="width=device-width,initial-scale=1">

	<link rel="shortcut icon" href="favicon.png" />

    <script src="js/libs/modernizr-2.0.6.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/libs/jquery-1.6.4.min.js"><\/script>')</script>
    <script src="js/page_resolution.js" type="text/javascript" language="javascript"></script>
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
			$("#nextgig").append('<p>' + data["resultsPage"]["results"]["event"][0]["displayName"] + ' &#64; <a href="' + data["resultsPage"]["results"]["event"][0]["venue"]["uri"] + '" target="_blank">' + data["resultsPage"]["results"]["event"][0]["venue"]["displayName"] + '</a><br/>' + '<strong>' + data["resultsPage"]["results"]["event"][0]["location"]["city"] + '<br/><a href="' + data["resultsPage"]["results"]["event"][0]["uri"] + '" target="_blank">Click for details</a><p>');
		    }
		}
	    });
	});
    </script>
</head>

<body>
    <div id="wrapper">
	<div id="CntntDiv">
	<div id="content" role="main">
	    <div id="topscratch"></div>
	    <div id="botscratch"></div>
	    <div id="lefscratch"></div>
	    <div id="rigscratch"></div>
	    <div id="bl"></div>
	    <div id="br"></div>
	    <header id="nav">
		<div id="tl"></div>
		<div id="tr"></div>
		<div id="rightnav"><h2><a href="music.php">MUSIC</a></h2><h2><a href="gigs.php">GIGS</a></h2><h2 class="grey">GALLERY</h2></div>
		<div id="logo">
		    <a href="index.php"><img src="images/HearsePileupLogo.png" alt="Hearse Pileup" /></a>
		</div>
		<div id="leftnav"><h2><a href="bio.php">BIO</a></h2><h2 class="grey">MERCH</h2><h2><a href="contact.php">CONTACT</a></h2></div>
	    </header>
	    <div id="nextgig">
		<a href="http://www.songkick.com/artists/5287493-hearse-pileup" title="Gig listings courtesy of the Songkick API"><img src="images/songkick.png" /></a><h4>NEXT GIG</h4>
	    </div>
