<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>aMule - Control Panel - Logs</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">


	<?php
		if ( $_SESSION["auto_refresh"] > 0 ) {
			echo "<meta http-equiv=\"refresh\" content=\"", $_SESSION["auto_refresh"], '">';
		}
	?>

	<!-- Inclusion of bootstrap css -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

	<script type="text/Javascript">
		$(function () { $("[data-toggle='tooltip']").tooltip(); });
		$(function () { $("[data-toggle='popover']").popover(); });
	</script>

	<!-- Style for navigation bar -->
	<style type="text/css">
		body {
			padding-top: 60px;
			background-color: #eee;
		}
		.logo-nav {
			height: 40px;
			width: 40px;
		}
		.navbar-brand {
			padding-top: 5px;
		}
		.btn-dark {
			background-color: hsl(0, 0%, 16%) !important;
			background-repeat: repeat-x;
			filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#5b5b5b", endColorstr="#282828");
			background-image: -khtml-gradient(linear, left top, left bottom, from(#5b5b5b), to(#282828));
			background-image: -moz-linear-gradient(top, #5b5b5b, #282828);
			background-image: -ms-linear-gradient(top, #5b5b5b, #282828);
			background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #5b5b5b), color-stop(100%, #282828));
			background-image: -webkit-linear-gradient(top, #5b5b5b, #282828);
			background-image: -o-linear-gradient(top, #5b5b5b, #282828);
			background-image: linear-gradient(#5b5b5b, #282828);
			border-color: #282828 #282828 hsl(0, 0%, 11%);
			color: #fff !important;
			text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.33);
			-webkit-font-smoothing: antialiased;
		}
	</style>

	<!-- Tasks panel -->
	<style type="text/css">
		.panel-tasks {
			width: 95%;
			margin-left: auto;
			margin-right: auto;
		}
		.panel-center {
			text-align: center;
			margin: auto;
		}
		#filter {
			width: 125px;
			height: 28px;
			border-top-right-radius: 0px;
			border-bottom-right-radius: 0px;
		}
		#category {
			width: 125px;
			height: 28px;
			border-radius: 0px;
		}
		.btn-filter {
			border-top-left-radius: 0px;
			border-bottom-left-radius: 0px;
		}
		.form-inline {
			margin-top: 1px;
			margin-bottom: 1px;
		}
		
	</style>

	<!-- Tables -->
	<style type="css/text">
		.panel-tr {		
			width: 95%;
			margin-left: auto;
			margin-right: auto;
			margin-top: 10px;
		}
	</style>

	<!-- Styling for footer -->
	<style text="css/text">
		#footer {
			position: fixed;
			bottom: 0;
			width: 100%;
			/* Set the fixed height of the footer here */
			height: 45px;
			background-color: #f5f5f5;
		}
		#ed2link {
			margin-right: 5px;
			width: 120px;
		}
		#selectcat {
			border-radius: 0px;
			width: 100px;
		}
		#formed2link {
			margin: 5px;
		}
	</style>


	<script language="JavaScript" type="text/JavaScript">
		function formCommandSubmit(command)
		{
			var frm=document.forms.mainform
			frm.command.value=command
			frm.submit()
		}
	</script>

</head>

<body>

	<!-- Navigation bar :: This part will be common in all the scripts -->
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
	    <div class="container">
	    	<a class="navbar-brand" href="#"><img src="logo-nav.png" class="logo-nav"> aMule WebUI</a>
	    	<form class="navbar-form navbar-right" role="form" name="login">
				<div class="collapse navbar-collapse">
					<div class="btn-group">
						<!-- Downloads -->
						<a class="btn btn-dark navbar-link" title="Downloads and Uploads" href="amuleweb-main-dload.php">
				   			<span class="glyphicon glyphicon-transfer"></span>
				   		</a>
				   		<!-- Shared -->
				   		<a class="btn btn-dark navbar-link" title="Sharing" href="amuleweb-main-shared.php">
					   			<span class="glyphicon glyphicon-share"></span>
				   		</a>
				   		<!-- Search -->
				   		<a class="btn btn-dark navbar-link" title="Search" href="amuleweb-main-search.php">
					   		<span class="glyphicon glyphicon-search"></span>
					   	</a>
				   		<!-- Servers -->
				   		<a class="btn btn-dark navbar-link" title="Servers" href="amuleweb-main-servers.php">
					   		<span class="glyphicon glyphicon-tasks"></span>
					   	</a>
				   		<!-- Kad -->
				   		<a class="btn btn-dark navbar-link" title="Kademlia" href="amuleweb-main-kad.php">
					   		<span class="glyphicon glyphicon-asterisk"></span>
					   	</a>
				   		<!-- Stats -->
				   		<a class="btn btn-dark navbar-link" title="Statistics" href="amuleweb-main-stats.php">
					   		<span class="glyphicon glyphicon-stats"></span>
					   	</a>
				   	</div>
				   	<div class="btn-group">
						<!-- Configuration -->
						<a class="btn btn-dark navbar-link" title="Configurations" href="amuleweb-main-prefs.php">
					   		<span class="glyphicon glyphicon-cog"></span>
					   	</a>
				   		<!-- Log -->
				   		<a class="btn btn-dark navbar-link" title="Log" href="amuleweb-main-log.php">
					   		<span class="glyphicon glyphicon-flag"></span>
					   	</a>
				   		<!-- Exit -->
				   		<a class="btn btn-danger navbar-link" title="Exit" href="login.php">
				   			<span class="glyphicon glyphicon-off"></span>
				   		</a>
				   	</div>
		    	</div>
    		</form>
    		</div><!--/.navbar-collapse -->
    	</div>
    </nav>

       <!-- Commands -->
    <div class="panel panel-default panel-tasks">
  		<div class="panel-body container panel-center">
    		<div class="form-inline form-tasks">
    			<div class="btn-group">
    				<a class="btn btn-default btn-group" href="amuleweb-main-log.php">
	    				<span class="glyphicon glyphicon-refresh"></span>&nbsp;Refresh Log
	    			</a>
    			</div>
    			<div class="btn-group">
	    			<a class="btn btn-danger btn-group" href="amuleweb-main-log.php?rstlog=1" onclick="return confirm('Do you really want to RESET aMule log?')">
	    				<span class="glyphicon glyphicon-floppy-remove"></span>&nbsp;Clear aMule Log
	    			</a>
	    			<a class="btn btn-danger btn-group" href="amuleweb-main-log.php?rstsrv=1" onclick="return confirm('Do you really want to RESET Server log?')">
	    				<span class="glyphicon glyphicon-floppy-remove"></span>&nbsp;Clear Server Log
	    			</a>  
	    		</div>
  			</div>
  		</div>
	</div>

	<div class="container-fluid panel-tr">
		<div class="panel panel-default">
		<div class="panel-heading panel-center"><h4>AMULE LOG</h4></div>
			<?php 
				$amulelog = '<pre style="height:300px;"><code>' . amule_get_log($HTTP_GET_VARS['rstlog']) . '</code></pre>';
				echo $amulelog;
			?>
		</div>
	</div>

	<div class="container-fluid panel-tr" style="margin-bottom:60px;">
		<div class="panel panel-default">
		<div class="panel-heading panel-center"><h4>SERVER LOG</h4></div>
			<?php 
				$serverlog = '<pre style="height:300px;"><code>' . amule_get_serverinfo($HTTP_GET_VARS['rstsrv']) . '</code></pre>';
				echo $serverlog;
			?>
	</div>


	<!-- Footer -->
	<div id="footer">
		<div class="col-md-1"></div>
		<div class="col-md-5">
			<form name="formlink" method="post" class="form-inline" action="amuleweb-main-log.php" role="form" id="formed2link">
    			<div class="btn-group">
        			<input class="form-control btn-group" name="ed2klink" type="text" id="ed2klink" placeholder="ed2k:// - Insert link" style="border-top-right-radius: 0px; border-bottom-right-radius: 0px; height: 30px;" size="25">
        			<select class="form-control btn-group" name="selectcat" id="selectcat" style="height: 30px;">
        
			        <?php
						$cats = amule_get_categories();
						
						if ( $HTTP_GET_VARS["Submit"] != "" ) {
							$link = $HTTP_GET_VARS["ed2klink"];
							$target_cat = $HTTP_GET_VARS["selectcat"];
							$target_cat_idx = 0;

							foreach($cats as $i => $c) {
								if ( $target_cat == $c) $target_cat_idx = $i;
							}

							if ( strlen($link) > 0 ) {
								$links = split("ed2k://", $link);
								foreach($links as $linkn) {
								    amule_do_ed2k_download_cmd("ed2k://" . $linkn, $target_cat_idx);
								}
							}
						}

						foreach($cats as $c) {
							echo  '<option>', $c, '</option>';
						}
					?>
			        
        		</select>
        		<input class="btn btn-default btn-group" type="submit" name="Submit" value="Download link" onClick="amuleweb-main-dload.php" style="height: 30px;">
    		</div>
    </form>
		</div>
		<div class="col-md-5">
			<div class="form-inline" style="margin-top:10px;">
				<?php
			      	$stats = amule_get_stats();
			    	if ( $stats["id"] == 0 ) {
			    		$ed2k = "Not connected";
			    		$ed2k_status = "danger";
			    	} elseif ( $stats["id"] == 0xffffffff ) {
			    		$ed2k = "Connecting ...";
			    		$ed2k_status = "info";
			    	} else {
			    		$ed2k = "Connected " . (($stats["id"] < 16777216) ? "(low)" : "(high)") . " " . $stats["serv_name"] . " " . $stats["serv_addr"];
			    		$ed2k_status = (($stats["id"] < 16777216) ? "warning" : "success");
			    	}
			    	if ( $stats["kad_connected"] == 1 ) {
			    		$kad1 = "Connected";
						if ( $stats["kad_firewalled"] == 1 ) {
							$kad2 = "(FW)";
							$kad_status = "warning";
						} else {
							$kad2 = "(OK)";
							$kad_status = "success";
						}
			    	} else {
			    		$kad1 = "Disconnected";
			    		$kad2 = "";
			    		$kad_status = "danger";
			    	}

			    	echo '<span class="label label-default">ED2k:</span> ';
			    	echo '<span class="label label-', $ed2k_status, '">', $ed2k, '</span> ';
			    	echo '<span class="label label-default">KAD:</span> ';
			    	echo '<span class="label label-', $kad_status, '">', $kad1, ' ', $kad2, '</span>';
			    ?>
			</div>
		</div>
		<div class="col-md-1"></div>
	</div>
	</form>

</body>
</html>
