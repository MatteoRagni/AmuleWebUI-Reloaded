<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
	<title>aMule Login</title>

	<script language="JavaScript" type="text/javascript">
		function breakout_of_frame()
		{
		  // see http://www.thesitewizard.com/archive/framebreak.shtml
		  // for an explanation of this script and how to use it on your
		  // own website
		  if (top.location != location) {
		    top.location.href = document.location.href ;
		  }
		}

		function login_init()
		{
			breakout_of_frame();
			document.login.pass.focus();
		}
	</script>
	
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
	
	<style type="text/css">
		body {
 			padding-top: 50px;
		}
		.logo-cont {
  			padding: 40px 15px;
  			text-align: center;
		}
		.logo-img {
			border: 3px solid #BDBDBD;
			border-radius: 30px;
		}
		.logo-nav {
			height: 40px;
			width: 40px;
		}
		.navbar-brand {
			padding-top: 5px;
		}
		.navbar-form input[type="password"] {
			height: 28px;
		}
	</style>
</head>

<body  onload="login_init();">

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
	    <div class="container">
	    	<a class="navbar-brand" href="#"><img src="logo-nav.png" class="logo-nav"> aMule WebUI</a>
	    	<form class="navbar-form navbar-right" role="form">
				<div class="form-group">
			   		<input name="pass" type="password" class="form-control" placeholder="Password" required autofocus>
			   		<button class="btn btn-primary" type="submit" name="submit" value="Submit">
			   			<span class="glyphicon glyphicon-log-in"></span>
			   		</button>
		    	</div>
    		</form>
    		</div><!--/.navbar-collapse -->
    	</div>
    </div>
    <div class="container logo-cont">
    	<img src="logo.png" class="logo-img">
    	<h1>aMule Web Interface</h1>
    	<p class="lead">Welcome!<br>Please login to access the complete interface!</p>
    </div>
</body>
</html>
