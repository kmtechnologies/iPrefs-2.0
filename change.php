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
            $("body").fadeIn(200);
    });
</script>

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
									<h2>Change Log for 2.0</h2>
					<p><b>2.0: </b>Navbar active tab is now tinted red, packages page filter with search bar, one click install button, firebase bubbles on packages screen, started to add firebase support, added firebase apps screen(in beta), new beta and firebase tags, released demo of new installation screen, started to add installation screen to firebase apps, new setup apps function which checks to see if firebase apps data is current, </p>
				<div data-role="collapsible" data-collapsed-icon="flat-settings" style="font-family: 'Istok Web', sans-serif;" data-expanded-icon="flat-cross">
       				<h4 class="font-new">Version 1-1.17 Change Log</h4>
				<h2>Change Log</h2><hr>
				<p><b>1.17:</b>deleted direct link system option, added new source and package, changed download iprefs app link into update link, added new index file to download webclip, small text fixes and bug fixes.</p><hr>
				<p><b>1.16:</b>code cleanup which improved stability and speed, bug fixes, and text and font tweaks</p><hr>
				<p><b>1.15:</b>fixed settings page discoloration, fixed change log bar issues, backend server fixes, fixed report a problem button, continued working on loader widget, bug fixes</p><hr>
				<p><b>1.14:</b>Added loading widget, bug fixes, text additions and fixes, speed improvments</p><hr>
				<p><b>1.13:<p style="color:red;">BIG UPDATE</p></b>Deleted quick settings and moved it all to the new settings page, combinded appinfo in one js file, fixed all gui to match each other, bug fixes, fixed all reload buttons, change store url from store/index.php to store.php in the root dir, deleted warning text, made some text bolder, added hide navbar feature, added big update text</p><hr>
				<p><b>1.12:</b>Rethought information text, changed the order of app information, added quick settings warning that it will be shut down temp. in next version</p><hr>
				<p><b>1.11:</b>Grouped packages into collapsible, text fixes in headers, fixed packages page ui and quick settings</p><hr>
				<p><b>1.10:</b>Added more new packages from tweakbox, tweaked information text, lowered ram usage to 15mb</p><hr>
				<p><b>1.9:</b>Added new Packages, bug fixes, change "new packages" link to "packages", text fixes, tweakbox as primary source</p><hr>
				<p><b>1.8:</b>Added iRam for background service support, changed all links to jquery, small font and theme changes</p>
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
						<a data-icon="flat-menu" class="font-new loader-class" data-textonly="false" data-textvisible="true" onclick="$(location).attr('href', 'store.php')"></a>
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
