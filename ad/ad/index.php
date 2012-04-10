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
	<link rel="stylesheet" type="text/css" href="css/lightbox.css" />
	<link rel="stylesheet" type="text/css" href="css/fonts.css" />

    <meta name="viewport" content="width=device-width,initial-scale=1">

	<link rel="shortcut icon" href="favicon.png" />
  
    <script src="js/libs/modernizr-2.0.6.min.js"></script>
</head>

<body>
    <div id="wrapper">
	<div id="CntntDiv">
	<div id="content" role="main">
	    <div id="topscratch"></div>
	    <div id="botscratch"></div>
	    <div id="lefscratch"></div>
	    <div id="rigscratch"></div>
	    <div id="tl"></div>
	    <div id="tr"></div>
	    <div id="bl"></div>
	    <div id="br"></div>
	    <header id="nav">
		<div id="rightnav"><h2 class="grey">GIGS</h2><h2 class="grey">GALLERY</h2><h2 class="grey">MUSIC</h2></div>
		<div id="logo">
		    <img src="images/HearsePileupLogo.png" alt="Hearse Pileup" />
		</div>
		<div id="leftnav"><h2 class="grey">MERCH</h2><h2 class="grey">CONTACT</h2></div>
	    </header>
	    <div id="gaffangry">
	    </div>
	    <div id="nextgig">
		<h4>NEXT GIG</h4>
		<p>17th April @ Nambuca</p>
		<p><a href="#">Click for Details</a></p>
	    </div>
	    <div id="feature">
		<h4>COMING SOON</h4>
		<h3>PRETTY <br/>SHINY <br/>THINGS</h3>
		<div class="info">
		    <h5>The single</h5>
		    <p>Sign up for the Hearse Pileup</p>
		    <p>newsletter for updates</p>
		</div>
		<div id="rig">
		</div>
	    </div>
	</div>
	<footer>
    	<script language="Javascript" type="text/javascript">

function checkform() {
  for (i=0;i<fieldstocheck.length;i++) {
    if (eval("document.subscribeform.elements['"+fieldstocheck[i]+"'].type") == "checkbox") {
      if (document.subscribeform.elements[fieldstocheck[i]].checked) {
      } else {
        alert("Please enter your "+fieldnames[i]);
        eval("document.subscribeform.elements['"+fieldstocheck[i]+"'].focus()");
        return false;
      }
    }
    else {
      if (eval("document.subscribeform.elements['"+fieldstocheck[i]+"'].value") == "") {
        alert("Please enter your "+fieldnames[i]);
        eval("document.subscribeform.elements['"+fieldstocheck[i]+"'].focus()");
        return false;
      }
    }
  }
  for (i=0;i<groupstocheck.length;i++) {
    if (!checkGroup(groupstocheck[i],groupnames[i])) {
      return false;
    }
  }
  
  return true;
}

var fieldstocheck = new Array();
var fieldnames = new Array();
function addFieldToCheck(value,name) {
  fieldstocheck[fieldstocheck.length] = value;
  fieldnames[fieldnames.length] = name;
}
var groupstocheck = new Array();
var groupnames = new Array();
function addGroupToCheck(value,name) {
  groupstocheck[groupstocheck.length] = value;
  groupnames[groupnames.length] = name;
}

function compareEmail()
{
  return (document.subscribeform.elements["email"].value == document.subscribeform.elements["emailconfirm"].value);
}
function checkGroup(name,value) {
  option = -1;
  for (i=0;i<document.subscribeform.elements[name].length;i++) {
    if (document.subscribeform.elements[name][i].checked) {
      option = i;
    }
  }
  if (option == -1) {
    alert ("Please enter your "+value);
    return false;
  }
  return true;
}

</script><form method=post action="http://www.gaffen.co.uk/hearsemail/?p=subscribe" name="subscribeform" target="windowName" onsubmit="window.open('', this.target,
'dialog,modal,scrollbars=no,resizable=no,width=550,height=300,left=0,top=0');" _lpchecked="1"><input type="hidden" name="formtoken" value="f831dcad5b7b469fef03120e5cf63096" /><table border=0>
  <tr><td><div class="required"><h6>NEWSLETTER SIGNUP</h6></div></td>
  <td class="attributeinput"><input type=text name=email value="" size="20">
  <script language="Javascript" type="text/javascript">addFieldToCheck("email","Email");</script></td><td><input type="hidden" name="htmlemail" value="1">
<input type="hidden" name="list[2]" value="signup"><input type="hidden" name="listname[2]" value="Hearse Mail"/><div style="display:none"><input type="text" name="VerificationCodeX" value="" size="20"></div><input type=submit name="subscribe" value="Submit" onClick="return checkform();" class="button"></tr></table>
    </form>
	<div id="links">
	<a href="http://www.facebook.com/Hearse.Pileup"><img src="images/HearsePileupFacebook.jpg" /></a>
	<a href="http://www.facebook.com/Hearse.Pileup"><img src="images/HearsePileupTwitter.jpg" /></a>
	<a href="http://www.facebook.com/Hearse.Pileup"><img src="images/HearsePileupSoundcloud.jpg" /></a>
	<img src="images/ratedr.jpg" />
	</div>
	</footer>
			<h2 class="ninja">Hearsepileup.co.uk is an open source website, with its code released on <a href="https://github.com/Gaffen/hearsepileup.co.uk" target="_blank">github.com</h2></a>
    </div>
    </div>

    <!-- JavaScript at the bottom for fast page loading -->

    <!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/libs/jquery-1.6.4.min.js"><\/script>')</script>
    <script type="text/javascript" src="js/lightbox.js"></script>
    <script src="js/page_resolution.js" type="text/javascript" language="javascript"></script>

    <!-- scripts concatenated and minified via build script -->
    <script defer src="js/plugins.js"></script>
    <script defer src="js/script.js"></script>
    <!-- end scripts -->

    <script>
    var _gaq=[['_setAccount','UA-9918791-5'],['_trackPageview'],['_trackPageLoadTime']];
    (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
    g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
    s.parentNode.insertBefore(g,s)}(document,'script'));
    </script>

  <!-- Prompt IE 6 users to install Chrome Frame. Remove this if you want to support IE 6.
       chromium.org/developers/how-tos/chrome-frame-getting-started -->
  <!--[if lt IE 7 ]>
    <script defer src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
    <script defer>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
  <![endif]-->

</body>
</html>
