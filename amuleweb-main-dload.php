<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>

<head>

	<title>aMule - Control Panel - Downloads and Uploads</title>
	<?php
		if ( $_SESSION["auto_refresh"] > 0 ) {
			echo "<meta http-equiv=\"refresh\" content=\"", $_SESSION["auto_refresh"], '">';
		}
	?>

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
			background-color:#2F303D;
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
		.panel-tr
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
			border: 1;
                }
		.glyphicon + span {
    			position: absolute;
    			left:-5px;
 			top:20px;
			color:red;
    			font-size:12px;
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


	<!--<link href="style.css" rel="stylesheet" type="text/css">-->

	<script language="JavaScript" type="text/JavaScript">
	function formCommandSubmit(command)
	{
		if ( command == "cancel" ) {
			var res = confirm("Delete selected files ?")
			if ( res == false ) {
				return;
			}
		}
		if ( command != "filter" ) {
			<?php
				if ($_SESSION["guest_login"] != 0) {
						echo 'alert("You logged in as guest - commands are disabled");';
						echo "return;";
				}
			?>
		}
		var frm=document.forms.mainform
		frm.command.value=command
		frm.submit()
	}
	</script>
</head>

<body class="animated fadeIn" style="animation-duration: 1.5s">
	<!-- Navigation bar :: This part will be common in all the scripts -->
	<nav class="navbar  navbar-fixed-top" "role="navigation">
	    <div class="container">
	    	<a class="navbar-brand" href="#"><img src="logo-nav.png" class="logo-nav">aMule WebUI</a>
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
    		</div>
    	</div>
    </nav>

    <!-- Commands -->
    <form action="amuleweb-main-dload.php" method="post" name="mainform">
    <input type="hidden" name="command">
    <div class="panel panel-tasks">
  		<div class="panel-body container panel-center">
    		<div class="form-inline form-tasks">
    		<div class="btn-group">
    			<a class="btn" href="javascript:formCommandSubmit('pause');" title="Pause"><span class="glyphicon glyphicon-pause">
			<div style="font-size:9px"><br>Pause</div>
			</span></a>
    			<a class="btn" href="javascript:formCommandSubmit('resume');" title="Resume"><span class="glyphicon glyphicon-play">
			<div style="font-size:9px"><br>Resume</div>
			</span></a>
    		</div>
    		<div class="btn-group">
    			<a class="btn" href="javascript:formCommandSubmit('priodown');" title="Lower priority"><span class="glyphicon glyphicon-download">
			<div style="font-size:9px"><br>Lower Priority</div>
			</span></a>
    			<a class="btn" href="javascript:formCommandSubmit('cancel');" title="Remove"><span class="glyphicon glyphicon-remove-circle">
			<div style="font-size:9px"><br>Remove</div>
			</span></a>
    			<a class="btn" href="javascript:formCommandSubmit('prioup');" title="Higher priority"><span class="glyphicon glyphicon-upload">
			<div style="font-size:9px"><br>High Priority</div>
			</span></a>
    		</div>
    		<!-- Inserting filtering php -->
    		<div class="btn-group">
     		<?php
    			$all_status = array("all", "Waiting", "Paused", "Downloading");	
 				if ( $HTTP_GET_VARS["command"] == "filter") {
 					$_SESSION["filter_status"] = $HTTP_GET_VARS["status"];
 					$_SESSION["filter_cat"] = $HTTP_GET_VARS["category"];
 				}
        		if ( $_SESSION["filter_status"] == '') $_SESSION["filter_status"] = 'all';

        		if ( $_SESSION["filter_cat"] == '') $_SESSION["filter_cat"] = 'all';

        		echo '<select name="status" id="filter" class="form-control btn-group"> ';
        		foreach ($all_status as $s) {
        			echo (($s == $_SESSION["filter_status"]) ? '<option selected>' : '<option>'), $s, '</option>';
        		}
        		echo '</select>';

        		echo '<select name="category" id="category" class="form-control btn-group">';
				$cats = amule_get_categories();
				foreach($cats as $c) {
					echo (($c == $_SESSION["filter_cat"]) ? '<option selected>' : '<option>'), $c, '</option>';
				}
				echo '</select>';
    		?>
    		<a class="btn btn-filter" href="javascript:formCommandSubmit('filter');" title="Filter"><span class="glyphicon glyphicon-filter">
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

	<!-- BEGIN OF CENTRAL BODY -->
	<div class="container-fluid panel-tr">

		<!-- Table Download -->
		<div class="panel">
		<div class="panel-heading panel-center"><h4>DOWNLOAD</h4></div>
			<table class="table">
				<thead>
					<tr>
						<th><a href="amuleweb-main-dload.php?sort=name">File name</a></th>
						<th><a href="amuleweb-main-dload.php?sort=size">Size</a></th>
						<th><a href="amuleweb-main-dload.php?sort=size_done">Completed</a></th>
						<th><a href="amuleweb-main-dload.php?sort=speed">Speed</a></th>
						<th><a href="amuleweb-main-dload.php?sort=progress">Progress</a></th>
						<th><a href="amuleweb-main-dload.php?sort=srccount">Sources</a></th>
						<th><a href="amuleweb-main-dload.php?sort=status">Status</a></th>
						<th><a href="amuleweb-main-dload.php?sort=prio">Priority</a></th>
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

					//
					// declare it here, before any function reffered it in "global"
					//
					$sort_order; $sort_reverse;

					function my_cmp($a, $b)	{
						global $sort_order, $sort_reverse;

						switch ( $sort_order) {
							case "size": $result = $a->size > $b->size; break;
							case "size_done": $result = $a->size_done > $b->size_done; break;
							case "progress": $result = (((float)$a->size_done)/((float)$a->size)) > (((float)$b->size_done)/((float)$b->size)); break;
							case "name": $result = $a->name > $b->name; break;
							case "speed": $result = $a->speed > $b->speed; break;
							case "scrcount": $result = $a->src_count > $b->src_count; break;
							case "status": $result = StatusString($a) > StatusString($b); break;
							case "prio": $result = $a->prio < $b->prio; break;
						}

						if ( $sort_reverse ) {
							$result = !$result;
						}
						//var_dump($sort_reverse);
						return $result;
					}

					function create_prg_bar($file) {

						$done = ((float)$file->size_done*100)/((float)$file->size);
						$status = StatusCode($file);

						switch (StatusCode($file)) {
							case -1: // waiting
								$status = 'class="progress-bar progress-bar-warning"';
								break;
							case 0: // downloading
								$status = 'class="progress-bar progress-bar-info"';
								break;
							case 1: // paused
								$status ='class="progress-bar progress-bar-info"';
								break;
							default: // paused
								$status ='class="progress-bar progress-bar-danger"';
								break;
						}
						echo '	<div class="progress" style="margin: 0px;"
						            data-toggle="popover" data-placement="bottom" data-title="Segments"
								    data-html="true" data-trigger="hover" data-content='. "'" . $file->progress . "'" . '>
								    <div '.$status.' role="progressbar" aria-valuenow="'.$done.'" aria-valuemin="0" aria-valuemax="100" style="width: '.$done.'%"></div>
								</div>';
					}

					// perform command before processing content
					if ( ($HTTP_GET_VARS["command"] != "") && ($_SESSION["guest_login"] == 0) ) {
						foreach ( $HTTP_GET_VARS as $name => $val) {
							// this is file checkboxes
							if ( (strlen($name) == 32) and ($val == "on") ) {
								//var_dump($name);
								amule_do_download_cmd($name, $HTTP_GET_VARS["command"]);
							}
						}
						// check "filter-by-status" settings
						if ( $HTTP_GET_VARS["command"] == "filter") {
							//var_dump($_SESSION);
							$_SESSION["filter_status"] = $HTTP_GET_VARS["status"];
							$_SESSION["filter_cat"] = $HTTP_GET_VARS["category"];
						}
					}
					if ( $_SESSION["filter_status"] == "") $_SESSION["filter_status"] = "all";
					if ( $_SESSION["filter_cat"] == "") $_SESSION["filter_cat"] = "all";

					$downloads = amule_load_vars("downloads");
					$sort_order = $HTTP_GET_VARS["sort"];

					if ( $sort_order == "" ) {
						$sort_order = $_SESSION["download_sort"];
					} else {
						if ( $_SESSION["download_sort_reverse"] == "" ) {
							$_SESSION["download_sort_reverse"] = 0;
						} else {
							if ( $HTTP_GET_VARS["sort"] != '') {
								$_SESSION["download_sort_reverse"] = !$_SESSION["download_sort_reverse"];
							}
						}
					}
					//var_dump($_SESSION);
					$sort_reverse = $_SESSION["download_sort_reverse"];
					if ( $sort_order != "" ) {
						$_SESSION["download_sort"] = $sort_order;
						usort(&$downloads, "my_cmp");
					}
					// Prepare categories index array
					$cats = amule_get_categories();
					foreach($cats as $i => $c) {
						$cat_idx[$c] = $i;
					}

					foreach ($downloads as $file) {
						$filter_status_result = ($_SESSION["filter_status"] == "all") or
							($_SESSION["filter_status"] == StatusString($file));

						$filter_cat_result = ($_SESSION["filter_cat"] == "all") or
							($cat_idx[ $_SESSION["filter_cat"] ] == $file->category);

						if ( $filter_status_result and $filter_cat_result) {
							print "<tr>";
								// Name and checkbox
								echo "<td style='font-size:12px;color:#f5f5f5'>", '<div class="checkbox download-checkbox" style="margin: 0px;"><label><input type="checkbox" name="', $file->hash, '" >&nbsp;<b>', $file->short_name, "</b></label></div></td>";
								echo "<td style='font-size:12px;color:#f5f5f5'>", CastToXBytes($file->size), "</td>";
								// Size
								echo "<td style='font-size:12px;color:#f5f5f5'>", CastToXBytes($file->size_done), "&nbsp;(",
									((float)$file->size_done*100)/((float)$file->size), "%)</td>";
								// Speed
								echo "<td style='font-size:12px;color:#f5f5f5'>", ($file->speed > 0) ? (CastToXBytes($file->speed) . "/s") : "-", "</td>";
								// Progress
								//echo "<td style='font-size:12px;'>", $file->progress, "</td>";
								echo "<td style='font-size:12px;'>", create_prg_bar($file), "</td>";
								// Sources
								echo "<td style='font-size:12px;color:#f5f5f5'>";
								if ( $file->src_count_not_curr != 0 ) {
									echo $file->src_count - $file->src_count_not_curr, " / ";
								}
								echo $file->src_count, " ( ", $file->src_count_xfer, " ) ";
								if ( $file->src_count_a4af != 0 ) {
									echo "+ ", $file->src_count_a4af;
								}
								echo "</td style='font-size:12px;'>";
								// Status
								echo "<td style='font-size:12px;'>", StatusString($file), "</td>";
								// Priority
								echo "<td style='font-size:12px;color:#f5f5f5'>", PrioString($file), "</td>";
							echo "</tr>";
						}
					}

					?>
				</tbody>
			</table>
		</div>
		</form>

		<!-- Table Upload -->
		<div class="panel" style="margin-bottom: 60px;background-color:#39425f;">
		<div class="panel-heading panel-center" style="background-color:#319a9b;"><h4>UPLOAD</h4></div>
			<table class="table">
				<thead>
					<tr>
						<th style="color:#4db6ac">File Name</th>
						<th style="color:#4db6ac">Username</th>
						<th style="color:#4db6ac">Up</th>
						<th style="color:#4db6ac">Down</th>
						<th style="color:#4db6ac">Speed</th>
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

					$uploads = amule_load_vars("uploads");

					foreach ($uploads as $file) {
						echo "<tr>";
						// Name
						echo "<td style='font-size:12px;color:#f5f5f5'><b>", $file->short_name, "</b></td>";
						// User name
						echo "<td style='font-size:12px;color:#f5f5f5'>", $file->user_name, "</td>";
						// Upload dimension
						echo "<td style='font-size:12px;color:#f5f5f5'>", CastToXBytes($file->xfer_up), "</td>";
						// Download dimension
						echo "<td style='font-size:12px;color:#f5f5f5'>", CastToXBytes($file->xfer_down), "</td>";
						// Speed
						echo "<td style='font-size:12px;color:#f5f5f5'>", ($file->xfer_speed > 0) ? (CastToXBytes($file->xfer_speed) . "/s") : "-", "</td>";
					}
				?>
      </table>


				</tbody>
			</table>
		</div>


	</div>
	<div id="footer">
		<div class="col-md-1"></div>
		<div class="col-md-5">
			<form name="formlink" method="post" class="form-inline" action="amuleweb-main-dload.php" role="form" id="formed2link">
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
