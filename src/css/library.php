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
	<link href="src/jquery.mobile.theme.css" rel="stylesheet" type="text/css">
	<meta content="iPrefs Beta" name="apple-mobile-web-app-title">
	<meta content="yes" name="apple-mobile-web-app-capable">
	<meta content="default" name="apple-mobile-web-app-status-bar-style">
        <link href="https://fonts.googleapis.com/css?family=Gaegu" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Istok+Web" rel="stylesheet">
	<script src="js/jquery.js">
	</script>

	<script src="js/jquery.mobile-1.4.0-rc.1.js">
	</script>
	<script type="text/javascript">
	 $( document ).on( "pagecreate", "#demo-page", function() {
	    $( document ).on( "swipeleft", "#demo-page", function( e ) {
	        // We check if there is no open panel on the page because otherwise
	        // a swipe to close the left panel would also open the right panel (and v.v.).
	        // We do this by checking the data that the framework stores on the page element (panel: open).
	        if ( $( ".ui-page-active" ).jqmData( "panel" ) !== "open" ) {
	            if ( e.type === "swipeleft" ) {
	                $( "#panel" ).panel( "open" );
	            }
	        }
	    });
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
		<div data-role="popup" id="popupLogin" data-theme="a" class="ui-corner-all">
</div>
		<div data-display="overlay" data-position="right" data-role="panel" data-theme="d" id="panel">
			<center>
				<h2 style="font-family: 'Istok Web', sans-serif;">Quick Settings</h2>
				<hr>
				
				<!--<a class="font-new" href="#delete" data-role="button" data-theme="d">Delete Account</a>-->
			</center>
                        
                        <div data-role="collapsible-set" data-theme="" data-content-theme="d">
        <div data-role="collapsible" data-collapsed-icon="flat-settings" style="font-family: 'Istok Web', sans-serif;" data-expanded-icon="flat-cross" data-collapsed="false" data-theme="d">
       				<h3 class="font-new">Application</h3>
					<ul data-inset="true" data-role="listview" data-theme="c">
						<li>
							<a class="font-new" href="javascript:alert('iPrefs version: 0.1.0b3')">iPrefs Version</a>
						</li>
						<li>
							<a class="font-new" href="javascript:alert('Coming soon in 0.2.0b')">Location</a>
						</li>  
                                                						<li>
							<a class="font-new" href="javascript:alert('iPrefs version: 0.1.0b3\nCreated By: KMTech\nMinimum iOS Version: iOS7')">App Information</a>
						</li> 
                                                						<li>
							<a class="font-new" href="javascript:alert('Email: kmendell84@gmail.com')">Report a problem</a>
						</li> 
					</ul>
        </div>
        <div data-role="collapsible" data-collapsed-icon="flat-settings" style="font-family: 'Istok Web', sans-serif;" data-expanded-icon="flat-cross">
       				<h3 class="font-new">Account</h3>
					<ul data-inset="true" data-role="listview" data-theme="c" class="font-new">
						<li>
							<a class="font-new" href="#">Payment</a>
						</li>
						<li>
							<a class="font-new" href="#">My Library</a>
						</li>
                                                <li>
                                                        <a class="font-new" href="#">Change Password</a>
                                                </li>
					</ul>
        </div>
        <div data-role="collapsible" data-collapsed-icon="flat-settings" style="font-family: 'Istok Web', sans-serif;" data-expanded-icon="flat-cross">
  <h3 class="font-new">Request a feature</h3>
					<textarea class="font-new" cols="40" id="textarea" name="textarea" placeholder="Tell us a little about your idea..." rows="10"></textarea> <a class="ui-shadow ui-btn ui-corner-all ui-btn-inline ui-btn-icon-left ui-icon-flat-mail font-new" href="#">Send Request</a>
        </div>
      </div>
                        
		</div>
		<div data-role="header">
                
			
			<h1>iPrefs Beta</h1><a data-icon="flat-cross" data-iconpos="left" data-role="button" data-theme="d" href="logout.php">Logout</a>
		</div>
		<div data-role="content" data-theme="" role="main">
			

			<center>
        <h3><?php echo htmlspecialchars($_SESSION['username']); ?>'s Library</h3><hr>
    
    <form class="ui-filterable">
    <input id="autocomplete-input" data-type="search" placeholder="Search packages...">
</form>
<ul data-role="listview" data-filter="true" data-filter-reveal="true" data-input="#autocomplete-input" data-inset="true">
    <a href="#">Apple</a>
    <a href="#">Banana</a>
    <li><a href="#">Cherry</a></li>
    <li><a href="#">Cranberry</a></li>
    <li><a href="#">Grape</a></li>
    <li><a href="#">Orange</a></li>
</ul>
			
			
		<div data-position="fixed" data-role="footer" data-theme="a">
			<div data-role="navbar">
				<ul>
					<li>
						<a class="font-new ui-nodisc-icon" data-iconpos="notext" data-icon="home" href="/index.php"></a>
					</li>
					<li>
						<a data-icon="flat-menu" class="font-new" href="store/index.html"></a>
					</li>
					<li>
						<a data-icon="flat-settings" class="font-new" href=""></a>
					</li>
					<li>
						<a data-icon="flat-lock" class="font-new ui-btn-active ui-nodisc-icon" onclick="location.reload();" href=""></a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</body>
</html>




