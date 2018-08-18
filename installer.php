<?php
// Initialize the session
ini_set('error_reporting', 0);
ini_set('display_errors', 0);
$jsvar = [
	'value1' => $_GET['package'] 
];
?>
<!DOCTYPE html>
<html>
<head>
	<script>
		var packageVar ={
		<?php
			foreach ($jsvar as $key => $value) {
				echo '  ' . $key . ': ' . '"' . $value . '",' . "\n";
			}
		?>
		};
	</script>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1" name="viewport">
	<link href="css/jquery.mobile.flatui.css" rel="stylesheet" type="text/css">
	<meta content="yes" name="apple-mobile-web-app-capable">
	<meta content="default" name="apple-mobile-web-app-status-bar-style">
    <link href="https://fonts.googleapis.com/css?family=Istok+Web" rel="stylesheet">
	<script src="js/jquery.js"></script>
	<script src="appinfo.js"></script>
	<script src="js/jquery.mobile-1.4.0-rc.1.js"></script>
	<script src="https://www.gstatic.com/firebasejs/5.3.1/firebase.js"></script>
	<script src="installScript.js"></script>
	<script src="URI.js"></script>
	</head>
<body style="font-family: 'Istok Web', sans-serif;" onload="setup();">
	<div data-role="page" data-theme="a" id="demo-page">

		<div data-role="header">
            <a class="ui-nodisc-icon" id="cnclBtn" onclick="window.history.back();" data-role="button" data-theme="d">Cancel</a>
			<h1 id="headerTxt">Installing...</h1><a class="ui-nodisc-icon"  data-role="button" id="doneBtn" data-theme="d" onclick="window.history.back();">Done</a>
		</div>
		<div data-role="content" data-theme="" role="main">
			<script>
				installApp();
			</script>
			<div id="line1"></div>
			<div id="line2"></div>
			<div id="line3"></div>
			<div id="line4"></div>
			<div id="line5"></div>
			<div id="line6"></div>
			<div id="line7"></div>
			<div id="countDiv"></div>
		</div>
	</div>
</body>
</html>
