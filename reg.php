<?php
// Include config file
require_once 'config.php';
 
// Define variables and initialize with empty values
$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate username
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter a username.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = trim($_POST["username"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "This username is already taken.";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Validate password
    if(empty(trim($_POST['password']))){
        $password_err = "Please enter a password.";     
    } elseif(strlen(trim($_POST['password'])) < 6){
        $password_err = "Password must have atleast 6 characters.";
    } else{
        $password = trim($_POST['password']);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = 'Please confirm password.';     
    } else{
        $confirm_password = trim($_POST['confirm_password']);
        if($password != $confirm_password){
            $confirm_password_err = 'Password did not match.';
        }
    }
    
    // Check input errors before inserting in database
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){
        
        // Prepare an insert statement
        $sql = "INSERT INTO users (username, password) VALUES (?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);
            
            // Set parameters
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                header("location: login.php");
            } else{
                echo "Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($link);
}
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
	<script src="js/jquery.js"></script>
        <script src="/appinfo.js"></script>
	</script>
	<script type="text/javascript">
	$(document).ready(function(){
	       // iOS web app full screen hacks.
	       if(window.navigator.standalone == true) {
	               // make all link remain in web app mode.
	               $('a').click(function() {
	                       window.location = $(this).attr('href');
	           return false;
	               });
	       }
	});
	</script>
	<script src="js/jquery.mobile-1.4.0-rc.1.js">
	</script>
	<script type="text/javascript">
	function AlertIt() {
	var answer = confirm ("Please click on OK to continue.")
	 if (answer)
	 window.location="http://google.com";
	}
	</script>
        <style>
                @import url('https://fonts.googleapis.com/css?family=Gaegu');
                .font-new{
                font-family: 'Istok Web', sans-serif;
                }
        </style>
	<title></title>
<script type="text/javascript">
    $(document).ready(function() {
            $("body").css("display", "none");
            $("body").fadeIn(400);
    });
</script>
<script src="/hideloader.js"></script>
    <script src="/loader.js"></script>
</head>
<body style="font-family: 'Istok Web', sans-serif;">
	<div data-role="page" data-theme="a" id="demo-page">
		<div data-role="header">
            <a data-icon="info" data-iconpos="notext" class="ui-nodisc-icon" onclick="appinfo();" data-role="button" data-theme="d" title="Add"></a>
			<h1>iPrefs</h1><a data-icon="refresh" class="ui-nodisc-icon" data-iconpos="notext" data-role="button" data-theme="d" onclick="location.reload();"></a>
		</div>
		<div data-role="content" data-theme="" role="main">
			<center>



			<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <label>Username</label>
                <input type="text" name="username"class="form-control" value="<?php echo $username; ?>">
                <span class="help-block"><?php echo $username_err; ?></span>
            </div>    
            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label>Password</label>
                <input type="password" name="password" class="form-control" value="<?php echo $password; ?>">
                <span class="help-block"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
                <label>Confirm Password</label>
                <input type="password" name="confirm_password" class="form-control" value="<?php echo $confirm_password; ?>">
                <span class="help-block"><?php echo $confirm_password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" data-theme="d" value="Submit">
                <input type="reset" class="btn btn-default" data-theme="d" value="Reset">
            </div>
            <p>Already have an account? <a onclick="$(location).attr('href', 'http://kmtech.dx.am/login.php')">Login here</a>.</p>
        </form>
			
			
		<div data-position="fixed" data-role="footer" data-theme="a">
			<div data-role="navbar">
				<ul>
					<li>
						<a class="font-new ui-nodisc-icon loader-class" data-textonly="false" data-textvisible="true" data-iconpos="notext" data-icon="home" onclick="$(location).attr('href', 'http://kmtech.dx.am/iprefs.php')"></a>
					</li>
					<li>
                        <a data-icon="flat-menu" class="font-new loader-class" data-textonly="false" data-textvisible="true" onclick="$(location).attr('href', 'http://kmtech.dx.am/store.php')"></a>
                    </li>
                    </li>
					<li>
						<a data-icon="flat-settings" class="font-new loader-class" data-textonly="false" data-textvisible="true" href=""></a>
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
