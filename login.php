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
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js" integrity="sha384-oFMgcGzKX7GaHtF4hx14KbxdsGjyfHK6m1comHjI1FH6g4m6qYre+4cnZbwaYbHD" crossorigin="anonymous"></script>

	<style type="text/css">
		body {
 			padding-top: 50px;
 			background-color:#39425f;
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

		 <!-- /* Styling for Brax AmuleWebUI Material Theme */-->
        <style text="css/text">

                .navbar {
                background-color:#2f303d;
                }
                .label-success {
                        background-color:#319a9b;
                }
                .label-default {
                        background-color:#ffffff;
                        color:#319a9b;
                }
                .panel {
                        background-color:#39425f;
                        border: 0;
                }
                .panel-heading{
                        background-color:#319a9b;
                        border: 0;
                }
                .form-control {
                border: 0;
                }
                .table > thead > tr > th, .table > thead > tr > td {
                        border: 0;
                }
                .glyphicon {
                        color:#319a9b;
                }
                .btn:hover .glyphicon{
			color:#fff;
                  }
                  a:hover {
                        color:#fff;
                        }
                a {
                        color:#4db6ac;
                }
                h4 {
                        color:#cfd8dc;
                }
                 td {
                        color:#cfd8dc
                }
                  th {
                        color:#4db6ac
                }
        </style>

</head>

<body class="animated fadeIn" style="animation-duration: 1.5s" onload="login_init();">

    <div class="navbar navbar-fixed-top" "role="navigation">
	    <div class="container">
	    	<a class="navbar-brand" href="#"><img src="logo-nav-brax.png" class="logo-nav"> aMule WebUI</a>
	    	<form class="navbar-form navbar-right" role="form" name="login">
				<div class="form-group">
			   		<input name="pass" type="password" class="form-control" placeholder="Password" required autofocus>
			   		<button class="btn btn-primary" type="submit" name="submit" value="Submit">
			   			<span class="glyphicon glyphicon-log-in" style="color:#ffffff"></span>
			   		</button>
		    	</div>
    		</form>
    		</div>
    	</div>
    </div>
    <div class="container logo-cont">
    	<img class="animated rubberBand" style="animation-duration: 1s" src="logo-brax.png" width="400" height="400">
    	<h1 style="color:#319a9b;">aMule Web Interface</h1>
    	<p style="color:white;">Welcome!<br>Please login to access the complete interface!</p>
    </div>
</body>
</html>
