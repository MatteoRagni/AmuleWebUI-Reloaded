<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
  <title>aMule - Control Panel - KAD</title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

  <?php
  	if ( $_SESSION["auto_refresh"] > 0 ) {
  		echo "<meta http-equiv=\"refresh\" content=\"", $_SESSION["auto_refresh"], '">';
  	}

  	amule_load_vars("stats_graph");
  ?>

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

  <!-- Tables -->
  <style type="css/text">
    .panel-tr {
      width: 95%;
      margin-left: auto;
      margin-right: auto;
      margin-top: 10px;
    }
    .panel-center {
      text-align: center;
      margin: auto;
    }
    .glyphicon-green {
      color: #00CC33;
    }
    .glyphicon-red {
      color: #B00000;
    }

    .stats-col {
      margin: 5px;
    }
    .status-table {
      margin: 0 auto;
      width: auto;
    }
  </style>

  <!-- Styling for footer -->
  <style text="css/text">
    #footer {
      position: fixed;
      bottom: 0;
      width: 100%;
      /* Set the fixed height of the footer here */
      height:auto;
      background-color: #2f303d;
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
    .form-inline {
      margin-top: 1px;
      margin-bottom: 1px;
   }
    #ip-text {
      background-color:#27282E;
      width: 35px;
      padding-left: 3px;
      padding-right: 3px;
      text-align:center;
      border-radius:0px;
      z-index: 1;
    }
    #port-text {
      width: 50px;
      padding-left: 3px;
      padding-right: 3px;
      text-align:center;
      border-radius:0px;
      z-index: 1;
    }
    #ip-label {
      background-color:#27282E;
      border-radius:0px;
      width: 30px;
      text-align: center;
    }
    #text-label{
      background-color:#27282E;
      border-top-right-radius: 0px;
      border-bottom-right-radius: 0px;
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

    <form name="mainform" action="amuleweb-main-kad.php" method="post" role="form">
    <div class="panel panel-default  panel-tasks">
      <div class="panel-body container panel-center">
        <div class="form-inline form-tasks">
        <div class="btn-group">
          <label class="control-label form-control btn-group" id="text-label" style="background-color:#39425f;"><b style="color:#4db6ac">Bootstrap from Node</b></label>
          <input class="form-control btn-group" style="background-color:#ffffff;" type="text" name="ip3" maxlength="3" id="ip-text" placeholder="255">
          <label class="control-label form-control btn-group" style="background-color:#ffffff;" id="ip-label">.</label>
          <input class="form-control btn-group" style="background-color:#ffffff;" type="text" name="ip2" maxlength="3" id="ip-text" placeholder="255">
          <label class="control-label form-control btn-group" style="background-color:#ffffff;" id="ip-label">.</label>
          <input class="form-control btn-group" style="background-color:#ffffff;" type="text" name="ip1" maxlength="3" id="ip-text" placeholder="255">
          <label class="control-label form-control btn-group" style="background-color:#ffffff;" id="ip-label">.</label>
          <input class="form-control btn-group" style="background-color:#ffffff;" type="text" name="ip0" maxlength="3" id="ip-text" placeholder="255">
          <label class="control-label form-control btn-group" style="background-color:#ffffff;" id="ip-label">:</label>
          <input class="form-control btn-group" style="background-color:#ffffff;" type="text" name="port" id="port-text" maxlength="5" placeholder="Port">
          <input class="btn btn-warning btn-group" type="submit" name="Submit" value="Connect">
        </div>
      </div>
    </div>
  </div>
  </form>

  <!-- BEGIN OF CENTRAL BODY -->
  <div class="container-fluid panel-tr"  style="margin-bottom: 60px;">
    <div class="panel">
    <div class="panel-heading panel-center"><h4>KAD STATUS</h4></div>
      <?php
        function print_table($kad1, $kad2) {
          echo '<table class="table status-table" style="width:auto; margin: 0 auto; margin-bottom: 15px; margin-top:15px;"> 
          <thead>
            <tr>
              <th>Parameter</th>
              <th>Status</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Connection</td>
              <td>'.$kad1.'</td>
            </tr>
            <tr>
              <td>Firewall</td>
              <td>'.$kad2.'</td>
            </tr>
            <tr>
              <td colspan="2" style="text-align:center;">
                <img src="amule_stats_kad.png" width="500" height="200" border="0" alt="" title="" />
              </td>
            </tr>
          </tbody>
        </table>';
        }

        function print_kad1($status) {
          if ($status["kad_connected"] == 1) {
            if ($status["kad_firewalled"] == 0) { return '<span class="label label-success">OK</span>'; }
            else { return '<span class="label label-warning">OK</span>'; }
          } else {
            return '<span class="label label-danger">ERROR</span>';   
          }
        }
        function print_kad2($status) {
            if ($status["kad_firewalled"] == 0) { return '<span class="label label-success">OK</span>'; }
            else { return '<span class="label label-danger">ERROR</span>'; }
        }

        $stats = amule_get_stats();
        //$stats_tree = amule_load_vars("stats_tree");

        $kad1 = print_kad1($stats);
        $kad2 = print_kad2($stats);

        print_table($kad1, $kad2);
      ?>
    </div>
  </div>

  <!-- Footer -->
    <div id="footer">
    <div class="col-md-1"></div>
    <div class="col-md-5">
      <form name="formlink" method="post" class="form-inline" action="amuleweb-main-kad.php" role="form" id="formed2link">
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
