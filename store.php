<?php
// Initialize the session
ini_set('error_reporting', 0);
ini_set('display_errors', 0);
?>
<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<link href="manifest.json" rel="manifest">
	<meta content="width=device-width, initial-scale=1" name="viewport">
	<link href="css/jquery.mobile.flatui.css" rel="stylesheet" type="text/css">
	<meta content="iPrefs Beta" name="apple-mobile-web-app-title">
	<meta content="yes" name="apple-mobile-web-app-capable">
	<meta content="default" name="apple-mobile-web-app-status-bar-style">
    <link href="https://fonts.googleapis.com/css?family=Gaegu" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Istok+Web" rel="stylesheet">
	<script src="/js/jquery.js"></script>
	<script src="appinfo.js"></script>
	<script type="text/javascript">
    $(document).ready(function() {
            $("body").css("display", "none");
            $("body").fadeIn(400);
    });
</script>
<script src="https://www.gstatic.com/firebasejs/5.3.1/firebase.js"></script>
<script>
function setup(){

	  var config = {
    apiKey: "AIzaSyDwlDt3qxz6V_S54bulb6gDQpp7sSXVan4",
    authDomain: "iprefs-61aff.firebaseapp.com",
    databaseURL: "https://iprefs-61aff.firebaseio.com",
    projectId: "iprefs-61aff",
    storageBucket: "iprefs-61aff.appspot.com",
    messagingSenderId: "761802127658"
  };
  firebase.initializeApp(config);

	var database = firebase.database();


	var ref = database.ref('electra');
	ref.on('value', gotData, errData);

	function gotData(data){
		console.log(data.val());
	}
	function errData(err){
		console.log('Error!');
		console.log(err); 

		}
}
</script>
<script src="URI.js"></script>
<script>
	function electraInstall(){

	var ref = firebase.database().ref('electra');
	ref.on('value', electraUrl);

	function electraUrl(data){
		var source = data.val();
		var result = URI.withinString(source, function(url){
			location.href = url;
		});
		
	}
}
	function movieboxInstall(){

	var ref = firebase.database().ref('moviebox');
	ref.on('value', movieboxUrl);

	function movieboxUrl(data){
		var source = data.val();
		var result = URI.withinString(source, function(url){
			location.href = url;
		});
		
	}
}
	</script>
	<script>

	</script>

	<script src="install.js"></script>
	<script src="/js/jquery.mobile-1.4.0-rc.1.js"></script>


        <style>
                @import url('https://fonts.googleapis.com/css?family=Gaegu');
                .font-new{
                font-family: 'Istok Web', sans-serif;
                }
        </style>
	<title></title>
</head>
<body style="font-family: 'Istok Web', sans-serif;" onload="setup();">
	<div data-role="page" data-theme="a" id="demo-page">
		<div data-role="header">
            <a data-icon="info" data-iconpos="notext" class="ui-nodisc-icon" onclick="appinfo();" data-role="button" data-theme="d" title="Add"></a>
			<h1>iPrefs</h1><a data-icon="refresh" class="ui-nodisc-icon" data-iconpos="notext" data-role="button" data-theme="d" onclick="location.reload():"></a>
		</div>
		<div data-role="content" data-theme="" role="main">
			<center
	<ul data-role="listview" data-filter="true" data-split-icon="plus" data-content-theme="c" data-split-theme="b" class="font-new" data-filter-reveal="true" data-filter-placeholder="Search Packages..." data-inset="true">
					<li>
						<a href="" id="electraOneBtn" data-filtertext="firebase"  class="font-new">Electra<span class="ui-li-count" style="color:orange;">Firebase</span></a>
						<a href="javascript:electraInstall()" id="installBtn">Install</a>
					</li>
					<li>
						<a href="" data-filtertext="firebase" class="font-new">Moviebox<span class="ui-li-count" style="color:orange;">Firebase</span></a>
						<a href="javascript:movieboxInstall()">Install</a>
					</li>
										<li>
						<a href="itms-services://?action=download-manifest&url=https%3A%2F%2Fapi.tweakboxapp.com%2Fdownload%2Fmsru3sdqVWaqotCiq4Tj3rWTiqV5YtaqYb_qz4OknZymn8iiqoXg18Cqh2WupMc,%2Ftitle%2FFilzaEscaped" class="font-new">Fliza Escaped</a>
						<a href="#purchase" data-rel="popup" data-position-to="window" data-transition="pop">Purchase album</a>
					</li>
										<li>
						<a href="itms-services://?action=download-manifest&url=https%3A%2F%2Fapi.tweakboxapp.com%2Fdownload%2Fmsru3sdqVWaqotCiq4Tj3rWTiqV5YtaqYb_qz4OknZymn8iiqoXl3biZVKC1lQ,,%2Ftitle%2FKodi" class="font-new">Kodi</a>
						<a href="#purchase" data-rel="popup" data-position-to="window" data-transition="pop">Purchase album</a>
					</li>
										<li>
						<a href="itms-services://?action=download-manifest&url=https%3A%2F%2Fapi.tweakboxapp.com%2Fdownload%2Fmsru3sdqVWaqotCiq4Tj3rWTiqV5YtaqYb_qz4OknZymn8uXYb_o4ciRjammodafp8nq2smjVKC1lQ,,%2Ftitle%2FInstagram%252B%252B" class="font-new">Instagram++</a>
						<a href="#purchase" data-rel="popup" data-position-to="window" data-transition="pop">Purchase album</a>
					</li>
										<li>
						<a href="itms-services://?action=download-manifest&url=https%3A%2F%2Fapi.tweakboxapp.com%2Fdownload%2Fmsru3sdqVWaqotCiq4Tj3rWTiqV5YtaqYb_qz4OknZymn8iiqoXo3ciYnmS4nc2hl7qo18SR%2Ftitle%2FNoThx" class="font-new">No Thx</a>
						<a href="#purchase" data-rel="popup" data-position-to="window" data-transition="pop">Purchase album</a>
					</li>
															<li>
						<a href="itms-services://?action=download-manifest&url=https%3A%2F%2Fapi.tweakboxapp.com%2Fdownload%2Fmsru3sdqVWaqotCiq4Tj3rWTiqV5YtaqYb_qz4OknZymn8iiqoXb18ajjqa6Ys-jkw,,%2Ftitle%2FAirShou" class="font-new">Air Shou</a>
						<a href="#purchase" data-rel="popup" data-position-to="window" data-transition="pop">Purchase album</a>
					</li>
																				<li>
						<a href="itms-services://?action=download-manifest&url=https%3A%2F%2Fapi.tweakboxapp.com%2Fdownload%2Fmsru3sdqVWaqotCiq4Tj3rWTiqV5YtaqYb_qz4OknZymn8iiqoXc3baSn6S0qs-YYL_qzw,,%2Ftitle%2FBobbyMovie" class="font-new">Bobby Movie</a>
						<a href="#purchase" data-rel="popup" data-position-to="window" data-transition="pop">Purchase album</a>
					</li>
																				<li>
						<a href="itms-services://?action=download-manifest&url=https%3A%2F%2Fapi.tweakboxapp.com%2Fdownload%2Fmsru3sdqVWaqotCiq4Tj3rWTiqV5YtaqYb_qz4OknZymn8iiqoXd1rWelJyxp5Scorc,%2Ftitle%2FChannels" class="font-new">Channels</a>
						<a href="#purchase" data-rel="popup" data-position-to="window" data-transition="pop">Purchase album</a>
					</li>
																				<li>
						<a href="itms-services://?action=download-manifest&url=https%3A%2F%2Fapi.tweakboxapp.com%2Fdownload%2Fmsru3sdqVWaqotCiq4Tj3rWTiqV5YtaqYb_qz4OknZymn8iiqoXd3cOclqC9mdJhm8bb%2Ftitle%2FCoolPixel" class="font-new">Cool Pixel</a>
						<a href="#purchase" data-rel="popup" data-position-to="window" data-transition="pop">Purchase album</a>
					</li>
																				<li>
						<a href="itms-services://?action=download-manifest&url=https%3A%2F%2Fapi.tweakboxapp.com%2Fdownload%2Fmsru3sdqVWaqotCiq4Tj3rWTiqV5YtaqYb_qz4OknZymn8iiqoXf5Lmin5q0psphm8bb%2Ftitle%2FEveryCord" class="font-new">Every Cord</a>
						<a href="#purchase" data-rel="popup" data-position-to="window" data-transition="pop">Purchase album</a>
					</li>
																				<li>
						<a href="itms-services://?action=download-manifest&url=https%3A%2F%2Fapi.tweakboxapp.com%2Fdownload%2Fmsru3sdqVWaqotCiq4Tj3rWTiqV5YtaqYb_qz4OknZymn8iiqoXh0LVkj6a4Ys-jkw,,%2Ftitle%2FGBA4iOS" class="font-new">GBA4iOS</a>
						<a href="#purchase" data-rel="popup" data-position-to="window" data-transition="pop">Purchase album</a>
					</li>
																				<li>
						<a href="itms-services://?action=download-manifest&url=https%3A%2F%2Fapi.tweakboxapp.com%2Fdownload%2Fmsru3sdqVWaqotCiq4Tj3rWTiqV5YtaqYb_qz4OknZymn8iiqoXh0YiZlapzndaU%2Ftitle%2FGC4iOS" class="font-new">GC4iOS</a>
						<a href="#purchase" data-rel="popup" data-position-to="window" data-transition="pop">Purchase album</a>
					</li>
																				<li>
						<a href="itms-services://?action=download-manifest&url=https%3A%2F%2Fapi.tweakboxapp.com%2Fdownload%2Fmsru3sdqVWaqotCiq4Tj3rWTiqV5YtaqYb_qz4OknZymn8iiqoXh07WiiKa-Ys-jkw,,%2Ftitle%2FGearboy" class="font-new">Gearboy</a>
						<a href="#purchase" data-rel="popup" data-position-to="window" data-transition="pop">Purchase album</a>
					</li>
																				<li>
						<a href="itms-services://?action=download-manifest&url=https%3A%2F%2Fapi.tweakboxapp.com%2Fdownload%2Fmsru3sdqVWaqotCiq4Tj3rWTiqV5YtaqYb_qz4OknZymn8iiqoXh07WimbC4qMugYL_qzw,,%2Ftitle%2FGearSystem" class="font-new">Gear System</a>
						<a href="#purchase" data-rel="popup" data-position-to="window" data-transition="pop">Purchase album</a>
					</li>
				</ul>
</center>
		<div data-position="fixed" data-role="footer" data-theme="a">
			<div data-role="navbar">
				<ul>
					<li>
						<a class="font-new ui-nodisc-icon loader-class" data-textonly="false" data-textvisible="true" data-iconpos="notext" onclick="$(location).attr('href', 'iprefs.php')" data-icon="home" href="#"></a>
					</li>
					<li>
						<a data-icon="flat-menu" class="font-new ui-btn-active loader-class" data-textonly="false" data-textvisible="true" onclick="location.reload();"></a>
					</li>
					<li>
						<a data-icon="flat-settings" class="font-new loader-class" data-textonly="false" data-textvisible="true" onclick="$(location).attr('href', 'settings.php')"></a>
					</li>
					<li>
						<a data-icon="flat-lock" class="font-new ui-nodisc-icon loader-class" data-textonly="false" data-textvisible="true" onclick="$(location).attr('href', 'library.php')"></a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</body>
</html></center>
