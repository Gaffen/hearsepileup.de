<?php include("php/header.php"); ?>
	    <h1>Music</h1>
	    <script type="text/javascript">
		$('#content').addClass('records');
	    </script>
	    <div class="music">
		<div class="player1">
		    <div class="ui360 ui360-vis">
			<a href="music/pretty_shiny_things.mp3">Pretty Shiny Things</a>
		    </div>
		</div>
		<div class="player2">
		    <div class="ui360 ui360-vis">
			<a href="music/last_time.mp3">Last Time</a>
		    </div>
		    </div>
		<div class="player3">
		    <div class="ui360 ui360-vis">
			<a href="music/generation_y.mp3">Generation Y</a>
		    </div>
		</div>
	    </div>
	    <div class="horizon">
		
	    </div>
	</div>
	<link rel="stylesheet" type="text/css" href="css/flashblock.css" />
	<link rel="stylesheet" type="text/css" href="css/360player.css" />
	<link rel="stylesheet" type="text/css" href="css/360player-visualization.css" />
	<!--[if IE]><script type="text/javascript" src="script/excanvas.js"></script><![endif]-->
	<script type="text/javascript" src="js/libs/360/berniecode-animator.js"></script>

<!-- the core stuff -->
	<script type="text/javascript" src="js/libs/360/soundmanager2-jsmin.js"></script>
	<script type="text/javascript" src="js/libs/360/360player.js"></script>
	<script type="text/javascript">

soundManager.url = 'swf/'; // path to directory containing SM2 SWF

soundManager.useFastPolling = true; // increased JS callback frequency, combined with useHighPerformance = true

threeSixtyPlayer.config.scaleFont = (navigator.userAgent.match(/msie/i)?false:true);
threeSixtyPlayer.config.showHMSTime = true;

// enable some spectrum stuffs

threeSixtyPlayer.config.useWaveformData = true;
threeSixtyPlayer.config.useEQData = true;

// enable this in SM2 as well, as needed

if (threeSixtyPlayer.config.useWaveformData) {
  soundManager.flash9Options.useWaveformData = true;
}
if (threeSixtyPlayer.config.useEQData) {
  soundManager.flash9Options.useEQData = true;
}
if (threeSixtyPlayer.config.usePeakData) {
  soundManager.flash9Options.usePeakData = true;
}

if (threeSixtyPlayer.config.useWaveformData || threeSixtyPlayer.flash9Options.useEQData || threeSixtyPlayer.flash9Options.usePeakData) {
  // even if HTML5 supports MP3, prefer flash so the visualization features can be used.
  soundManager.preferFlash = true;
}

// favicon is expensive CPU-wise, but can be used.
if (window.location.href.match(/hifi/i)) {
  threeSixtyPlayer.config.useFavIcon = true;
}

if (window.location.href.match(/html5/i)) {
  // for testing IE 9, etc.
  soundManager.useHTML5Audio = true;
}

</script>

<?php include("php/footer.php"); ?>
