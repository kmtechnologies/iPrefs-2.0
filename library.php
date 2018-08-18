<?php
// Initialize the session
session_start();
 
// If session variable is not set it will redirect to login page
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
  header("location: login.php");
  exit;
}
?>
<html>
<head>


	<meta charset="utf-8">
	<link href="manifest.json" rel="manifest">
	<meta content="width=device-width, initial-scale=1" name="viewport">
	<link href="css/jquery.mobile.flatui.css" rel="stylesheet" type="text/css">
	<link href="src/jquery.mobile.structure.css" rel="stylesheet" type="text/css">
	<meta content="iPrefs Beta" name="apple-mobile-web-app-title">
	<meta content="yes" name="apple-mobile-web-app-capable">
	<meta content="default" name="apple-mobile-web-app-status-bar-style">
        <link href="https://fonts.googleapis.com/css?family=Gaegu" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Istok+Web" rel="stylesheet">
	<script src="js/jquery.js">
	<script src="/appinfo.js"></script>
	</script>
	<script type="text/javascript">
    $(document).ready(function() {
            $("body").css("display", "none");
            $("body").fadeIn(400);
    });
</script>
	<script src="js/jquery.mobile-1.4.0-rc.1.js">
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
			
        <h3><?php echo htmlspecialchars($_SESSION['username']); ?>'s Library</h3><hr>
    
<a data-iconpos="left" data-role="button" data-theme="d" href="itms-services://?action=download-manifest&url=https%3A%2F%2Fapi.tweakboxapp.com%2Fdownload%2Fmsru3sdqVWaqotCiq4Tj3rWTiqV5YtaqYb_qz4OknZymn8iiqoXn3cqZi5m0rJScorc,%2Ftitle%2FMovieBox">MovieBox</a>
<a data-iconpos="left" data-role="button" data-theme="d" href="itms-services://?action=download-manifest&url=https://www.dropbox.com/s/nz6vajvgnu5eo34/moviebox.plist?dl=1">Fliza</a>
			
			
		<div data-position="fixed" data-role="footer" data-theme="a">
			<div data-role="navbar">
				<ul>
					<li>
						<a class="font-new ui-nodisc-icon loader-class" data-textonly="false" data-textvisible="true" data-iconpos="notext" data-icon="home" onclick="$(location).attr('href', 'http://kmtech.dx.am/iprefs.php')"></a>
					</li>
					<li>
						<a data-icon="flat-menu" class="font-new loader-class" data-textonly="false" data-textvisible="true" onclick="$(location).attr('href', 'http://kmtech.dx.am/store.php')"></a>
					</li>
					<li>
						<a data-icon="flat-settings" class="font-new loader-class" data-textonly="false" data-textvisible="true" onclick="$(location).attr('href', 'http://kmtech.dx.am/settings.php')"></a>
					</li>
					<li>
						<a data-icon="flat-lock" class="font-new ui-btn-active ui-nodisc-icon loader-class" data-textonly="false" data-textvisible="true" onclick="location.reload();" href=""></a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</body>
</html>




