<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>aMule - Control Panel - Search</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

	<?php
		if ( $_SESSION["auto_refresh"] > 0 ) {
			echo "<meta http-equiv=\"refresh\" content=\"", $_SESSION["auto_refresh"], '">';
		}
	?>

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

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
    <form action="amuleweb-main-search.php" method="post" name="mainform">
    <input type="hidden" name="command">
    <div class="panel panel-default panel-tasks">
  		<div class="panel-body container panel-center">
    		<div class="form-inline form-tasks">
    		<p><div class="btn-group">
    			<a class="btn btn-info btn-group" href="amuleweb-main-search.php?search_sort=<?php echo($HTTP_GET_VARS["sort"]);?>" title="Refresh to see the results" style="height:34px;">
    				<span class="glyphicon glyphicon-refresh"></span>
    			</a>
    			<input type="text" placeholder="Insert string to search..." name="searchval" class="form-control btn-group" style="border-radius:0px; z-index:1;" size="70">
    			<select class="form-control btn-group" style="border-radius:0px; background-color:#eee;" name="searchtype">
    				<option>Local</option>
    				<option selected>Global</option>
    				<option>Kad</option>
    			<input class="btn btn-info btn-group" name="Search" type="submit" value="Search" onClick="javascript:formCommandSubmit('search');" style="width:140px;">
    		</div></p><p>
    		<div class="btn-group">
    			<label class="form-control btn-group" style="border-top-right-radius:0px; border-bottom-right-radius:0px; background-color:#eee;">Availability</label>
    			<input type="text" class="form-control btn-group" name="avail" style="border-top-left-radius:0px; border-bottom-left-radius:0px; z-index:1;" size="10">
    		</div>
    		<div class="btn-group">
    			<label class="form-control btn-group" style="border-top-right-radius:0px; border-bottom-right-radius:0px; background-color:#eee;">Min size</label>
    			<input type="text" class="form-control btn-group" name="minsize" style="border-radius: 0px; z-index:1;" size="5">
    			<select class="form-control btn-group" style="border-radius:0px; background-color:#eee;" name="minsizeu">
    				<option>Byte</option>
					<option>KByte</option>
					<option selected>MByte</option>
					<option>GByte</option>
    			</select>
    			<label class="form-control btn-group" style="border-radius:0px; background-color:#eee;">Max size</label>
    			<input type="text" class="form-control btn-group" name="maxsize" style="border-radius: 0px; z-index:1;" size="5">
    			<select class="form-control btn-group" style="border-top-left-radius: 0px; border-bottom-left-radius:0px; background-color:#eee;" name="maxsizeu">
    				<option>Byte</option>
					<option>KByte</option>
					<option selected>MByte</option>
					<option>GByte</option>
    			</select>
    		</div>
    		</p>
  			</div>
  		</div>
	</div>

    <div class="panel panel-default panel-tasks">
  		<div class="panel-body container panel-center">
    		<div class="form-inline form-tasks">
    		<div class="btn-group">
    			<label class="form-control btn-group" style="border-top-right-radius:0px; border-bottom-right-radius:0px; background-color:#eee;">For each element selected</label>
    			<input class="btn btn-success btn-group" name="Download" type="submit" value="Download" onClick="javascript:formCommandSubmit('download');" style="border-radius:0px;">
    			<label class="form-control btn-group" style="border-radius:0px; background-color:#eee;"> in category </label>
    			<select class="form-control btn-group" name="targetcat" style="border-top-left-radius:0px; border-bottom-left-radius:0px; background-color:#eee;">
          		<?php
                	$cats = amule_get_categories();
                	foreach($cats as $c) {
                		echo "<option>", $c, "</option>";
                	}
                ?>
        		</select>
        	</div>
    		</div>
  		</div>
	</div>

	
  
	<!-- BEGIN OF CENTRAL BODY -->
	<div class="container-fluid panel-tr">
		
		<!-- Table Download -->
		<div class="panel panel-default" style="margin-bottom:60px;">
		<div class="panel-heading panel-center"><h4>Search results</h4></div>
			<table class="table">
				<thead>
					<tr>
						<th><a href="amuleweb-main-search.php?sort=name">File name</a></th>
						<th><a href="amuleweb-main-search.php?sort=size">Size</a></th>
						<th><a href="amuleweb-main-search.php?sort=sources">Sources</a></th>
					</tr>
				</thead>
				<tbody>

				<?php
					function CastToXBytes($size) {
						if ( $size < 1024 ) {
							$result = $size . " b";
						} elseif ( $size < 1048576 ) {
							$result = ($size / 1024.0) . "kb";
						} elseif ( $size < 1073741824 ) {
							$result = ($size / 1048576.0) . "mb";
						} else {
							$result = ($size / 1073741824.0) . "gb";
						}
						return $result;
					}

					$sort_order;$sort_reverse;

					function my_cmp($a, $b) {
						global $sort_order, $sort_reverse;
						
						switch ( $sort_order) {
							case "size": $result = $a->size > $b->size; break;
							case "name": $result = $a->name > $b->name; break;
							case "sources": $result = $a->sources > $b->sources; break;
						}

						if ( $sort_reverse ) {
							$result = !$result;
						}

						return $result;
					}

					function str2mult($str) {
						$result = 1;
						switch($str) {
							case "Byte":	$result = 1; break;
							case "KByte":	$result = 1024; break;		
							case "MByte":	$result = 1012*1024; break;
							case "GByte":	$result = 1012*1024*1024; break;
						}
						return $result;
					}

					function cat2idx($cat) {
					        	$cats = amule_get_categories();
					        	$result = 0;
					        	foreach($cats as $i => $c) {
					        		if ( $cat == $c) $result = $i;
					        	}
					    		return $result;
					}

					if ($_SESSION["guest_login"] == 0) {
						if ( $HTTP_GET_VARS["command"] == "search") {
							$search_type = -1;
							switch($HTTP_GET_VARS["searchtype"]) {
								case "Local": $search_type = 0; break;
								case "Global": $search_type = 1; break;
								case "Kad": $search_type = 2; break;
							}
							$min_size = $HTTP_GET_VARS["minsize"] == "" ? 0 : $HTTP_GET_VARS["minsize"];
							$max_size = $HTTP_GET_VARS["maxsize"] == "" ? 0 : $HTTP_GET_VARS["maxsize"];

							$min_size *= str2mult($HTTP_GET_VARS["minsizeu"]);
							$max_size *= str2mult($HTTP_GET_VARS["maxsizeu"]);
							
							amule_do_search_start_cmd($HTTP_GET_VARS["searchval"],
								//$HTTP_GET_VARS["ext"], $HTTP_GET_VARS["filetype"],
								"", "",
								$search_type, $HTTP_GET_VARS["avail"], $min_size, $max_size);
						} elseif ( $HTTP_GET_VARS["command"] == "download") {
							foreach ( $HTTP_GET_VARS as $name => $val) {
								// this is file checkboxes
								if ( (strlen($name) == 32) and ($val == "on") ) {
									$cat = $HTTP_GET_VARS["targetcat"];
									$cat_idx = cat2idx($cat);
									amule_do_search_download_cmd($name, $cat_idx);
								}
							}
						} else {
						}
					}		
					$search = amule_load_vars("searchresult");

					$sort_order = $HTTP_GET_VARS["sort"];

					if ( $sort_order == "" ) {
						$sort_order = $_SESSION["search_sort"];
					} else {
						if ( $_SESSION["search_sort_reverse"] == "" ) {
							$_SESSION["search_sort_reverse"] = 0;
						} else {
							$_SESSION["search_sort_reverse"] = !$_SESSION["search_sort_reverse"];
						}
					}

					$sort_reverse = $_SESSION["search_sort_reverse"];
					if ( $sort_order != "" ) {
						$_SESSION["search_sort"] = $sort_order;
						usort(&$search, "my_cmp");
					}

					foreach ($search as $file) {
						echo '<tr>';
						echo '<td><label style="font-size:12px;"><input type="checkbox" name="', $file->hash, '" > ',$file->name,'</label></td>';
						echo '<td style="font-size: 12px;">', CastToXBytes($file->size), '</td>';
						echo '<td style="font-size: 12px;"><span class="badge badge-default">', $file->sources, '</span></td>';
						echo '</tr>';
					}

					
				?>
				</tbody>
			</table>
		</div>
	</form>

 	<!-- Footer -->
	<div id="footer">
		<div class="col-md-1"></div>
		<div class="col-md-5">
			<form name="formlink" method="post" class="form-inline" action="amuleweb-main-search.php" role="form" id="formed2link">
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
