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
	<link rel="apple-touch-icon" sizes="1124x1124" href="icon.png">
	<meta content="default" name="apple-mobile-web-app-status-bar-style">
    <link href="https://fonts.googleapis.com/css?family=Gaegu" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Istok+Web" rel="stylesheet">
	<script src="js/jquery.js"></script>
	<script src="/appinfo.js"></script>

	<script src="js/jquery.mobile-1.4.0-rc.1.js">
	</script>
<script type="text/javascript">
    $(document).ready(function() {
            $("body").css("display", "none");
            $("body").fadeIn(400);
    });
</script>
<script src="/hideloader.js"></script>
	<script src="/loader.js"></script>

        <style>
                @import url('https://fonts.googleapis.com/css?family=Gaegu');
                .font-new{
                font-family: 'Istok Web', sans-serif;
                }
        </style>
	<title></title>
</head>
<body style="font-family: 'Istok Web', sans-serif;">
	<div data-role="page" data-theme="a" id="demo-page">
		
		<div data-role="header">
            <a data-icon="info" data-iconpos="notext" class="ui-nodisc-icon" onclick="appinfo();" data-role="button" data-theme="d" title="Add"></a>
			<h1>iPrefs</h1><a data-icon="refresh" class="ui-nodisc-icon" data-iconpos="notext" data-role="button" data-theme="d" onclick="location.reload();"></a>
		</div>
		<div data-role="content" data-theme="" role="main">
			<center>

					<p>Click the button below to download our mobileconfig profile to have iPrefs installed on your iDevice</p>

				<a onclick="$(location).attr('href', 'http://kmtech.dx.am/iPrefs.mobileconfig')">
						<img src="download.png" width="50%" height="50%" />
				</a>

			</center>
		</div>
		<div data-position="fixed" data-role="footer" data-theme="a">
			<div data-role="navbar">
				<ul>
					<li>
						<a class="font-new ui-nodisc-icon loader-class" data-textonly="false" data-textvisible="true" data-iconpos="notext" onclick="$(location).attr('href', 'http://kmtech.dx.am/iprefs.php')" data-icon="home" href="#"></a>
					</li>
					<li>
						<a data-icon="flat-menu" class="font-new loader-class" data-textonly="false" data-textvisible="true" onclick="$(location).attr('href', 'http://kmtech.dx.am/store.php')"></a>
					</li>
					<li>
						<a data-icon="flat-settings" class="font-new loader-class" data-textonly="false" data-textvisible="true" onclick="$(location).attr('href', 'http://kmtech.dx.am/settings.php')"></a>
					</li>
					<li>
						<a data-icon="flat-lock" class="font-new ui-nodisc-icon loader-class" data-textonly="false" data-textvisible="true" onclick="$(location).attr('href', 'http://kmtech.dx.am/library.php')"></a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</body>
</html>
