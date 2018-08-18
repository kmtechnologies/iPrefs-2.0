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
            $("body").fadeIn(400);
    });
</script>
                          <script src="https://www.gstatic.com/firebasejs/5.3.1/firebase.js"></script>
                        </script>
                        <style>
                @import url('https://fonts.googleapis.com/css?family=Gaegu');
                .font-new{
                font-family: 'Istok Web', sans-serif;
                }
        </style>
        <script src="setupApps.js"></script>
                        <title></title>
                      </head>
                      <body style="font-family: 'Istok Web', sans-serif;" onload="setupApps();">
                        <div data-role="page" data-theme="a" id="demo-page">

                          <div data-role="header">
                            <a data-icon="info" data-iconpos="notext" class="ui-nodisc-icon" onclick="appinfo();" data-role="button" data-theme="d" title="Add"></a>
                            <h1>iPrefs</h1>
                            <a data-icon="refresh" class="ui-nodisc-icon" data-iconpos="notext" data-role="button" data-theme="d" onclick="location.reload();"></a>
                          </div>
                          <div data-role="content" data-theme="" role="main">
                            <center>
                              <h2>
                                <b>iPrefs. Exquisite. Fast. Simple.</b>
                              </h2>
                              <p>We created iPrefs as a dream to accomplish things that no other service like us has done before. To bring all our favorite packages to one 
                                <b>SIMPLE</b> place, to have a 
                                <b>FAST</b> and enjoyable service to use, and to have an 
                                <b>EXQUSITE</b> and friendly UI.
                              </p>
                              <hr>
                                <ul data-inset="true" data-role="listview" data-theme="c" class="font-new">
                                  <li data-role="list-divider" data-theme="d">iPrefs</li>
                                  <li>
                                    <a onclick="$(location).attr('href', 'store.php')" class="font-new">Packages(beta)</a>
                                  </li>
                                  <li>
                                    <a onclick="$(location).attr('href', 'firebaseapps.php')" class="font-new">Firebase Apps
                                      <span class="ui-li-count" style="color: white;">Beta</span>
                                    </a>
                                  </li>
                                  <li>
                                    <a onclick="$(location).attr('href', 'change.php')" class="font-new">Change Log</a>
                                  </li>
                                </ul>
                              </center>
                            </div>
                            <div data-position="fixed" data-role="footer" data-theme="a">
                              <div data-role="navbar">
                                <ul>
                                  <li>
                                    <a class="font-new ui-btn-active ui-nodisc-icon loader-class" data-textonly="false" data-textvisible="true" data-iconpos="notext" onclick="location.reload();" data-icon="home" href="#"></a>
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
