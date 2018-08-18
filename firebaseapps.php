<?php
// Initialize the session
ini_set('error_reporting', 0);
ini_set('display_errors', 0);
?>
<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<link href="app.appcache" rel="manifest">
	<meta content="width=device-width, initial-scale=1" name="viewport">
	<link href="css/jquery.mobile.flatui.css" rel="stylesheet" type="text/css">
	<meta content="iPrefs Beta" name="apple-mobile-web-app-title">
	<meta content="yes" name="apple-mobile-web-app-capable">
	<link rel="apple-touch-icon" sizes="1124x1124" href="icon.png">
	<meta content="default" name="apple-mobile-web-app-status-bar-style">
    <link href="https://fonts.googleapis.com/css?family=Gaegu" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Istok+Web" rel="stylesheet">
	<script src="js/jquery.js"></script>
	<script src="appinfo.js"></script>
	<script src="js/jquery.mobile-1.4.0-rc.1.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
            $("body").css("display", "none");
            $("body").fadeIn(200);
    });
</script>
<script src="js/addApps.js"></script>
<script src="https://www.gstatic.com/firebasejs/5.3.1/firebase.js"></script>

</head>
<body style="font-family: 'Istok Web', sans-serif;" onload="">
	<div data-role="page" data-theme="a" id="demo-page">
		<div data-role="header">
            <a data-icon="info" data-iconpos="notext" class="ui-nodisc-icon" onclick="appinfo();" data-role="button" data-theme="d" title="Add"></a>
			<h1>iPrefs</h1><a data-icon="refresh" class="ui-nodisc-icon" data-iconpos="notext" data-role="button" data-theme="d" onclick="location.reload();"></a>
		</div>
		<div data-role="content" data-theme="" role="main">
			<center>
				
				<h2><b>Firebase Apps</b></h2>
				<hr>
				<div id="apps">
				<ul data-inset="true" data-role="listview" id="appList" data-theme="c" class="font-new">
					<li data-role="list-divider" data-theme="d">Firebase Hosted Packages</li>
										<li>
						<a href="" data-transition="slideup" onclick="$(location).attr('href', 'installer.php?package=electra')" id="electraOneBtn" data-filtertext="firebase"  class="font-new">Electra<span class="ui-li-count" style="color:orange;">Firebase</span></a>
					</li>
					<li>
						<a href="" onclick="$(location).attr('href', 'installer.php?package=moviebox')" data-filtertext="firebase" class="font-new">Moviebox<span class="ui-li-count" style="color:orange;">Firebase</span></a>
					</li>
					<li>
						<a href="" onclick="$(location).attr('href', 'installer.php?package=kik')" data-filtertext="firebase" class="font-new">Kik++<span class="ui-li-count" style="color:orange;">Firebase</span></a>
					</li>
				</ul>
			</div>
			</center>
		</div>
		<div data-position="fixed" data-role="footer" data-theme="a">
			<div data-role="navbar">
				<ul>
					<li>
						<a class="font-new ui-nodisc-icon loader-class" data-textonly="false" data-textvisible="true" data-iconpos="notext" onclick="$(location).attr('href', 'iprefs.php')" data-icon="home" href="#"></a>
					</li>
					<li>
						<a data-icon="flat-menu" href="#" data-textonly="false" data-textvisible="true" class="font-new loader-class" onclick="$(location).attr('href', 'store.php')"></a>
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
</html>
