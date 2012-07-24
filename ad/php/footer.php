<footer>
<div class="strap"><h2>Zombie Rock and Roll to play off the apocalypse</h2></div>
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
    <script type="text/javascript" src="js/script.js"></script>
    <!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
    <script type="text/javascript" src="js/lightbox.js"></script>
    

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