<?php include("php/header.php"); ?>
	    <h1>Gigs</h1>
	    <script type="text/javascript">
		$('#content').addClass('gigback');
 $(document).ready(function() {
    $.ajax({

  url:  "http://api.songkick.com/api/3.0/artists/5287493/calendar.json?apikey=dzuyzOvYY0uXyUcS&jsoncallback=?",

  dataType:   "jsonp", // <== JSON-P request

  success:    function(data){
    if(data["resultsPage"]["totalEntries"] === 0){
	$("#events").append('<p><strong>No new Hearse gigs for now</strong> <br/>we must be busy getting drunk,<br/>come back soon for more gigs!<p>');
    }
	$.each(data["resultsPage"]["results"]["event"], function(i, entry){
	    var doors = ""
	    var artists = ""
	    var prettyDate = data["resultsPage"]["results"]["event"][i]["displayName"].match(/\(.*\)/).toString();
	    prettyDate = prettyDate.substring(1, prettyDate.length - 7);
	    if(data["resultsPage"]["results"]["event"][i]["start"]["time"] != null){
		doors="<dt class='doortime'>Doors:</dt><dd class='doortime'>" + data["resultsPage"]["results"]["event"][i]["start"]["time"] + "</dd>"
	    }
	    if(data["resultsPage"]["results"]["event"][i]["performance"].length != 1){
		artists = "<dt>Also Featuring:</dt>"
		$.each(data["resultsPage"]["results"]["event"][i]["performance"], function(a, artist){
		    if(data["resultsPage"]["results"]["event"][i]["performance"][a]["artist"]["displayName"] != "Hearse Pileup"){
			artists += '<dd><a href="' + 	data["resultsPage"]["results"]["event"][i]["performance"][a]["artist"]["uri"] + '" target="_blank">' + data["resultsPage"]["results"]["event"][i]["performance"][a]["artist"]["displayName"] + '</a></dd>'
		    }
		})
	    }
	    if(artists === ""){
		artists += "<dt>No further information has been provided at this time<br/><br/>If you would like to know more, please contact us via <a href='http://www.facebook.com/Hearse.Pileup' target='_blank'>Facebook</a>, <a href='http://www.twitter.com/hearsepileup' target='_blank'>Twitter</a> or <a href='mailto:hearse.pileup@gmail.com'>E-mail</a></dt>"
	    }
	    
	    $("#events").append('<li><h2><a href="'+ data["resultsPage"]["results"]["event"][i]["uri"] + '" target="_blank"><span>'
				+ prettyDate + '</span> &#64; ' + data["resultsPage"]["results"]["event"][i]["venue"]["displayName"]
				+ '</a></h2><dl class="eventdetail">' + doors
				+ artists + '</dl><div class="clr"></div></li>');
	})   
	}
    });
  });
	    </script>
	    <ul id="events" class="events"></ul>
	    <div class="clr"></div>
	</div>
	<!--[if IE]><script type="text/javascript" src="script/excanvas.js"></script><![endif]-->
	<script type="text/javascript" src="js/libs/360/berniecode-animator.js"></script>

<?php include("php/footer.php"); ?>
