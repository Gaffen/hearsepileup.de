<!DOCTYPE html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!-- Consider adding a manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<title>Spritz on facebook</title>
	<meta name="description" content="Spritz Creative brand consultancy">
	<meta name="author" content="Matthe Gaffen (http://www.gaffen.co.uk)">
	<!-- Mobile viewport optimized: j.mp/bplateviewport -->
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link rel="stylesheet" href="css/stylesheet.css" type="text/css" charset="utf-8" />
	<link rel="stylesheet" href="css/jquery.tweet.css" type="text/css" charset="utf-8" />
	<script src="js/libs/modernizr-2.0.6.min.js"></script>
</head>

<body>
  <div id="topscratch"></div>
  <div id="botscratch"></div>
  <div id="lefscratch"></div>
  <div id="rigscratch"></div>
  <div id="bl"></div>
  <div id="br"></div>
  <div id="tl"></div>
  <div id="tr"></div>
  <header>
    <div>
	<div id="logo"><img src="../images/HearsePileuplogo.png" /></div>
    </div>
  </header>
  <article>
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

</script><div class="centered"><form method=post action="http://www.gaffen.co.uk/hearsemail/?p=subscribe" name="subscribeform" target="windowName" onsubmit="window.open('', this.target,
'dialog,modal,scrollbars=no,resizable=no,width=550,height=300,left=0,top=0');" _lpchecked="1"><input type="hidden" name="formtoken" value="f831dcad5b7b469fef03120e5cf63096" /><table border=0>
  <tr><td><div class="required"><h6>NEWSLETTER SIGNUP</h6></div></td>
  <td class="attributeinput"><input type=text name=email value="" size="20">
  <script language="Javascript" type="text/javascript">addFieldToCheck("email","Email");</script></td><td><input type="hidden" name="htmlemail" value="1">
<input type="hidden" name="list[2]" value="signup"><input type="hidden" name="listname[2]" value="Hearse Mail"/><div style="display:none"><input type="text" name="VerificationCodeX" value="" size="20"></div><input type=submit name="subscribe" value="Submit" onClick="return checkform();" class="button"></tr></table>
    </form>
</div>
  </article>
  <div id="overlay">
  </div>
  <div id="rig">
  </div>

  <!-- JavaScript at the bottom for fast page loading -->

  <!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/libs/jquery-1.6.4.min.js"><\/script>')</script>


  <!-- scripts concatenated and minified via build script -->
  <script defer src="js/mylibs/plugins.js"></script>
  <script defer src="js/mylibs/script.js"></script>
  <!-- end scripts -->


  <!-- Asynchronous Google Analytics snippet. Change UA-XXXXX-X to be your site's ID.
       mathiasbynens.be/notes/async-analytics-snippet -->
  <script>
    var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview'],['_trackPageLoadTime']];
    (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
    g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
    s.parentNode.insertBefore(g,s)}(document,'script'));
  </script>
<script language="javascript" src="js/mylibs/jquery.tweet.js" type="text/javascript"></script>
<script type='text/javascript'>
    jQuery(function($){
        $(".tweet").tweet({
            username: "spritz_creative",
            join_text: "auto",
            avatar_size: 32,
            count: 3,
            auto_join_text_default: "we said,", 
            auto_join_text_ed: "we",
            auto_join_text_ing: "we were",
            auto_join_text_reply: "we replied to",
            auto_join_text_url: "we were checking out",
            loading_text: "loading tweets..."
        });
    });
    </script>
  <!--[if lt IE 7 ]>
    <script defer src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
    <script defer>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
  <![endif]-->

 <div id="fb-root" class="fb_reset"></div>
    <script src="http://connect.facebook.net/en_US/all.js"></script>
    <script type="text/javascript">
        FB.init({
            appId  : '261481763896612',
        });
        
        <!-- FB.Canvas.setSize({ width: 520, height: 1700 }); -->
        window.fbAsyncInit = function() {
              FB.Canvas.setAutoGrow();
        }
        function echoSize() {
            document.getElementById('output').innerHTML = 
            "HTML Content Width: " + window.innerWidth + 
            " Height: " + window.innerHeight;
            console.log(window.innerWidth + ' x ' + window.innerHeight);
        }
        echoSize();
        window.onresize = echoSize;
    </script>
</body>
</html>

