<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
	<title>aMule - Control Panel - Login</title>

	<script language="JavaScript" type="text/javascript">
		function login_init()
		{
			breakout_of_frame();
			document.login.pass.focus();
		}
	</script>
	
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" integrity="sha384-7tY7Dc2Q8WQTKGz2Fa0vC4dWQo07N4mJjKvHfIGnxuC4vPqFGFQppd9b3NWpf18/" crossorigin="anonymous">
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css" integrity="sha384-BD3p+z3TqIhBK2OaMBRzK4Nz02t4OQcwrEkJxy3PAqU2Rwm1giS6RCgvBDk6+iPH" crossorigin="anonymous">
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js" integrity="sha384-oFMgcGzKX7GaHtF4hx14KbxdsGjyfHK6m1comHjI1FH6g4m6qYre+4cnZbwaYbHD" crossorigin="anonymous"></script>
	
	<style type="text/css">
		body {
 			padding-top: 50px;
 			background-color: #eee;
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
	    	<form class="navbar-form navbar-right" role="form" name="login">
				<div class="form-group">
			   		<input name="pass" type="password" class="form-control" placeholder="Password" required autofocus>
			   		<button class="btn btn-primary" type="submit" name="submit" value="Submit">
			   			<span class="glyphicon glyphicon-log-in"></span>
			   		</button>
		    	</div>
    		</form>
    		</div>
    	</div>
    </div>
    <div class="container logo-cont">
    	<img src="logo.png" class="logo-img">
    	<h1>aMule Web Interface</h1>
    	<p class="lead">Welcome!<br>Please login to access the complete interface!</p>
    </div>
</body>
</html>
