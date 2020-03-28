<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
	<title>aMule - Control Panel - Shared</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

	<!-- Inclusion of bootstrap css -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js" integrity="sha384-/Gm+ur33q/W+9ANGYwB2Q4V0ZWApToOzRuA8md/1p9xMMxpqnlguMvk8QuEFWA1B" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" integrity="sha384-7tY7Dc2Q8WQTKGz2Fa0vC4dWQo07N4mJjKvHfIGnxuC4vPqFGFQppd9b3NWpf18/" crossorigin="anonymous">
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css" integrity="sha384-BD3p+z3TqIhBK2OaMBRzK4Nz02t4OQcwrEkJxy3PAqU2Rwm1giS6RCgvBDk6+iPH" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js" integrity="sha384-oFMgcGzKX7GaHtF4hx14KbxdsGjyfHK6m1comHjI1FH6g4m6qYre+4cnZbwaYbHD" crossorigin="anonymous"></script>

	<script type="text/Javascript">
		$(function () { $("[data-toggle='tooltip']").tooltip(); });
		$(function () { $("[data-toggle='popover']").popover(); });
	</script>

	<!-- Style for navigation bar -->
	<style type="text/css">
		body {
			padding-top: 60px;
			background-color:#39425f;
		}
		.logo-nav {
			height: 40px;
			width: 40px;
		}
		.navbar-brand {
			padding-top: 5px;
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
                        border: 1;
                }
                .glyphicon {
                        color:#319a9b;
                }
                .btn:hover .glyphicon{
                        color:#fff;
                }
                .popover {
                background-color:#319a9b;
                color:black;
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
                b:hover {
                        color:#319a9b;
                        }
                b {
                        color:#cfd8dc
                }
                  th {
                        color:#4db6ac
                }
		td {
			color:#ffffff
		}
        </style>


        <!-- Styling for footer -->
        <style text="css/text">
                #footer {
                        position: fixed;
                        bottom: 0;
                        width: 100%;
                        /* Set the fixed height of the footer here */
                        height: auto;
                        background-color:#2f303d;
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

</head>

<script language="JavaScript" type="text/JavaScript">
function formCommandSubmit(command)
{
	<?php
		if ($_SESSION["guest_login"] != 0) {
				echo 'alert("You logged in as guest - commands are disabled");';
				echo "return;";
		}
	?>
	var frm=document.forms.mainform
	frm.command.value=command
	frm.submit()
}
</script>


<body class="animated fadeIn" style="animation-duration: 1.5s">

	<!-- Navigation bar :: This part will be common in all the scripts -->
	<nav class="navbar navbar-fixed-top" role="navigation">
	    <div class="container">
	    	<a class="navbar-brand" href="#"><img src="logo-nav-brax.png" class="logo-nav"> aMule WebUI</a>
	    	<form class="navbar-form navbar-right" role="form" name="login">
				<div class="collapse navbar-collapse">
									<div class="btn-group">
                                                <!-- Downloads -->
                                                <a class="btn  navbar-link title="Downloads and Uploads" href="amuleweb-main-dload.php">
                                                                <span class="glyphicon glyphicon-transfer">
                                                                <div style="font-size:9px"><br>Transfer</div>
                                                                </span>
                                                </a>
                                                <!-- Shared -->
                                                <a class="btn  navbar-link" title="Sharing" href="amuleweb-main-shared.php">
                                                                <span class="glyphicon glyphicon-share">
                                                                <div style="font-size:9px"><br>Shared</div>
                                                                </span>
                                                                </a>
                                                <!-- Search -->
                                                <a class="btn  navbar-link" title="Search" href="amuleweb-main-search.php">
                                                                <span class="glyphicon glyphicon-search">
                                                                <div style="font-size:9px"><br>Search</div>
                                                                </span>
                                                </a>
                                                <!-- Servers -->
                                                <a class="btn  navbar-link" title="Servers" href="amuleweb-main-servers.php">
                                                                <span class="glyphicon glyphicon-tasks">
                                                                <div style="font-size:9px"><br>Server</div>
                                                                </span>
                                                </a>
                                                <!-- Kad -->
                                                <a class="btn  navbar-link" title="Kademlia" href="amuleweb-main-kad.php">
                                                                <span class="glyphicon glyphicon-asterisk">
                                                                <div style="font-size:9px"><br>Kad</div>
                                                                </span>
                                                </a>
                                                <!-- Stats -->
                                                <a class="btn  navbar-link" title="Statistics" href="amuleweb-main-stats.php">
                                                                <span class="glyphicon glyphicon-stats">
                                                                <div style="font-size:9px"><br>Stats</div>
                                                                </span>
                                                </a>
                                        </div>
                                        <div class="btn-group">
                                                <!-- Configuration -->
                                                <a class="btn navbar-link" title="Configurations" href="amuleweb-main-prefs.php">
                                                                <span class="glyphicon glyphicon-cog">
                                                                <div style="font-size:9px"><br>Settings</div>
                                                                </span>
                                                </a>
                                                <!-- Log -->
                                                <a class="btn  navbar-link" title="Log" href="amuleweb-main-log.php">
                                                                <span class="glyphicon glyphicon-flag">
                                                                <div style="font-size:9px"><br>Logs</div>
                                                                </span>
                                                </a>
                                                <!-- Exit -->
                                                <a class="btn navbar-link" title="Exit" href="login.php">
                                                                <span class="glyphicon glyphicon-off">
                                                                <div style="font-size:9px"><br>Exit</div>
                                                                </span>
                                                </a>
				   	</div>
		    	</div>
    		</form>
    		</div><!--/.navbar-collapse -->
    	</div>
    </nav>

    <!-- Commands -->
    <form name="mainform" action="amuleweb-main-shared.php" method="post">
    <div class="panel panel-tasks">
  		<div class="panel-body container panel-center">
    		<div class="form-inline form-tasks" action="amuleweb-main-shared.php" method="post" name="mainform">
    		<input type="hidden" name="command">
    		<div class="btn-group">
    			<a class="btn" href="javascript:formCommandSubmit('priodown');" title="Lower priority"><span class="glyphicon glyphicon-download">
			<div style="font-size:9px"><br>Lower Priority</div>
			</span></a>
    			<a class="btn" href="javascript:formCommandSubmit('reload');" title="Refresh"><span class="glyphicon glyphicon-refresh">
			<div style="font-size:9px"><br>Refresh</div>
			</span></a>
    			<a class="btn" href="javascript:formCommandSubmit('prioup');" title="Higher priority"><span class="glyphicon glyphicon-upload">
			<div style="font-size:9px"><br>High Priority</div>
			</span></a>
    		</div>
    		<!-- Inserting filtering php -->
    		<div class="btn-group">
     			<select name="select" id="filter" class="form-control btn-group">
     				<option selected>All</option>
     				<option>Low</option>
     				<option>Normal</option>
     				<option>High</option>
     				<option>Release</option>
     			</select>
    			<a class="btn btn-filter" href="javascript:formCommandSubmit('setprio');" title="Filter"><span class="glyphicon glyphicon-check">
			<div style="font-size:9px"><br>Filter</div>
			</span></a>
    			<?php
    				if ($_SESSION["guest_login"] != 0) {
					    echo '<br><br><span class="label label-warning">You logged in as guest - commands are disabled</span>';
					}
				?>
			</div>
  		</div>
  		</div>
	</div>


	<!-- Center table -->
	<div class="container-fluid panel-tr">

		<!-- Table Download -->
		<div class="panel" style="margin-bottom: 60px;">
		<div class="panel-heading panel-center"><h4>SHARED FILES</h4></div>
			<table class="table">
				<thead>
					<tr>
						<th><a href="amuleweb-main-shared.php?sort=name">File name</a></th>
						<th><a href="amuleweb-main-shared.php?sort=xfer">Transferred</a> <a href="amuleweb-main-shared.php?sort=xfer_all">(Total)</a></th>
						<th><a href="amuleweb-main-shared.php?sort=req">Requested</a> <a href="amuleweb-main-shared.php?sort=req_all">(Total)</a></th>
						<th><a href="amuleweb-main-shared.php?sort=acc">Accepted Rqst</a> <a href="amuleweb-main-shared.php?sort=acc_all">(Total)</a></th>
						<th><a href="amuleweb-main-shared.php?sort=size">Size</a></th>
						<th><a href="amuleweb-main-shared.php?sort=prio">Priority</a></th>
					</tr>
				</thead>
				<tbody>

				<?php
					function CastToXBytes($size) {
						if ( $size < 1024 ) {
							$result = $size . " b";
						} elseif ( $size < 1048576 ) {
							$result = ($size / 1024.0) . " kb";
						} elseif ( $size < 1073741824 ) {
							$result = ($size / 1048576.0) . " mb";
						} else {
							$result = ($size / 1073741824.0) . " gb";
						}
						return $result;
					}

					function StatusString($file) {
						if ( $file->status == 7 ) {
							return '<span class="label label-info" style="font-size:12px; padding-top:3.6px;">Paused</span>';
						} elseif ( $file->src_count_xfer > 0 ) {
							return '<span class="label label-success" style="font-size:12px;">Downloading</span>';
						} else {
							return '<span class="label label-warning" style="font-size:12px;">Waiting</span>';
						}
					}

					function StatusCode($file) {
						if ( $file->status == 7 ) {
							return 1; // Paused
						} elseif ( $file->src_count_xfer > 0 ) {
							return 0; // downloading
						} else {
							return -1; // waiting
						}
					}

					function PrioString($file) {
						$prionames = array(0 => "Low", 1 => "Normal", 2 => "High",
							3 => "Very high", 4 => "Very low", 5=> "Auto", 6 => "Release");
						$result = $prionames[$file->prio];
						if ( $file->prio_auto == 1) {
							$result = $result . "&nbsp(auto)";
						}
						return $result;
					}

					function PrioStringSorter($file) {
						$prionames = array(0 => "Low", 1 => "Normal", 2 => "High",
							3 => "High", 4 => "Low", 5=> "Normal", 6 => "Release");
						$result = $prionames[$file->prio];
						return $result;
					}

					$sort_order;$sort_reverse;

					function my_cmp($a, $b)	{
						global $sort_order, $sort_reverse;

						switch ( $sort_order) {
							case "size": $result = $a->size > $b->size; break;
							case "name": $result = $a->name > $b->name; break;
							case "xfer": $result = $a->xfer > $b->xfer; break;
							case "xfer_all": $result = $a->xfer_all > $b->xfer_all; break;
							case "acc": $result = $a->accept > $b->accept; break;
							case "acc_all": $result = $a->accept_all > $b->accept_all; break;
							case "req": $result = $a->req > $b->req; break;
							case "req_all": $result = $a->req_all > $b->req_all; break;
							case "prio": $result = PrioSort($a) < PrioSort($b); break;
						}

						if ( $sort_reverse ) {
							$result = !$result;
						}
						//var_dump($sort_reverse);
						return $result;
					}

					//
					// perform command before processing content
					//
					//var_dump($HTTP_GET_VARS);
					if (($HTTP_GET_VARS["command"] != "") && ($_SESSION["guest_login"] == 0)) {
						//amule_do_download_cmd($HTTP_GET_VARS["command"]);
						foreach ( $HTTP_GET_VARS as $name => $val) {
							// this is file checkboxes
							if ( (strlen($name) == 32) and ($val == "on") ) {
								//var_dump($name);var_dump($val);
								amule_do_shared_cmd($name, $HTTP_GET_VARS["command"]);
							}
						}
						if ($HTTP_GET_VARS["command"] == "reload") {
							amule_do_reload_shared_cmd();
						}
					}
					$shared = amule_load_vars("shared");

					$sort_order = $HTTP_GET_VARS["sort"];

					if ( $sort_order == "" ) {
						$sort_order = $_SESSION["shared_sort"];
					} else {
						if ( $_SESSION["sort_reverse"] == "" ) {
							$_SESSION["sort_reverse"] = 0;
						} else {
							$_SESSION["sort_reverse"] = !$_SESSION["sort_reverse"];
						}
					}
					//var_dump($_SESSION);
					$sort_reverse = $_SESSION["sort_reverse"];
					if ( $sort_order != "" ) {
						$_SESSION["shared_sort"] = $sort_order;
						usort(&$shared, "my_cmp");
					}

					if ($HTTP_GET_VARS["select"] == "All" || $HTTP_GET_VARS["select"] == "") {
						foreach ($shared as $file) {

							echo '<tr>';

							echo '<td style="font-size:12px;">', '<div class="checkbox download-checkbox" style="margin: 0px;"><label><input type="checkbox" name="', $file->hash, '" >&nbsp;<b>', $file->short_name, "</b></label></div></td>";
							echo '<td style="font-size:12px;">', CastToXBytes($file->xfer), " (", CastToXBytes($file->xfer_all),")</td>";
							echo '<td style="font-size:12px;">', $file->req, " (", $file->req_all, ")</td>";
							echo '<td style="font-size:12px;">', $file->accept, " (", $file->accept_all, ")</td>";
							echo '<td style="font-size:12px;">', CastToXBytes($file->size), "</td>";
							echo '<td style="font-size:12px;">', PrioString($file), "</td>";;
							echo '</tr>';
						}
					} else {
						foreach ($shared as $file) {
							if ($HTTP_GET_VARS["select"] == PrioStringSorter($file)) {
								echo '<tr>';

								echo '<td style="font-size:12px;">', '<div class="checkbox download-checkbox" style="margin: 0px;"><label><input type="checkbox" name="', $file->hash, '" >&nbsp;<b>', $file->short_name, "</b></label></div></td>";
								echo '<td style="font-size:12px;">', CastToXBytes($file->xfer), " (", CastToXBytes($file->xfer_all),")</td>";
								echo '<td style="font-size:12px;">', $file->req, " (", $file->req_all, ")</td>";
								echo '<td style="font-size:12px;">', $file->accept, " (", $file->accept_all, ")</td>";
								echo '<td style="font-size:12px;">', CastToXBytes($file->size), "</td>";
								echo '<td style="font-size:12px;">', PrioString($file), "</td>";;
								echo '</tr>';
							}
						}
					}
				?>

				</tbody>
			</table>
		</div>
		</div>
		</form>
		</div>

		<!-- Footer -->
		<div id="footer">
			<div class="col-md-1"></div>
			<div class="col-md-5">
				<form name="formlink" method="post" class="form-inline" action="amuleweb-main-shared.php" role="form" id="formed2link">
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
</body>
</html>
