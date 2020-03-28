<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
  <title>aMule - Control Panel - Preferences</title>
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
  function formCommandSubmit(command) {
    var frm=document.forms.mainform
    frm.command.value=command
    frm.submit()
  }

  var initvals = new Object;

  <?php
    // apply new options before proceeding

    if ( ($HTTP_GET_VARS["Submit"] == "Apply") && ($_SESSION["guest_login"] == 0) ) {
      $file_opts = array("check_free_space", "extract_metadata", 
        "ich_en","aich_trust", "preview_prio","save_sources", "resume_same_cat",
        "min_free_space", "new_files_paused", "alloc_full", "alloc_full_chunks",
        "new_files_auto_dl_prio", "new_files_auto_ul_prio"
      );
      $conn_opts = array("max_line_up_cap","max_up_limit",
        "max_line_down_cap","max_down_limit", "slot_alloc", 
        "tcp_port","udp_dis","max_file_src","max_conn_total","autoconn_en");
      $webserver_opts = array("use_gzip", "autorefresh_time");
      
      $all_opts;
      foreach ($conn_opts as $i) {
        $curr_value = $HTTP_GET_VARS[$i];
        if ( $curr_value == "on") $curr_value = 1;
        if ( $curr_value == "") $curr_value = 0;
        
        $all_opts["connection"][$i] = $curr_value;
      }
      foreach ($file_opts as $i) {
        $curr_value = $HTTP_GET_VARS[$i];
        if ( $curr_value == "on") $curr_value = 1;
        if ( $curr_value == "") $curr_value = 0;
        
        $all_opts["files"][$i] = $curr_value;
      }
      foreach ($webserver_opts as $i) {
        $curr_value = $HTTP_GET_VARS[$i];
        if ( $curr_value == "on") $curr_value = 1;
        if ( $curr_value == "") $curr_value = 0;
        
        $all_opts["webserver"][$i] = $curr_value;
      }
      //var_dump($all_opts);
      amule_set_options($all_opts);
    }

    $opts = amule_get_options();
    
    $opt_groups = array("connection", "files", "webserver");
    
    foreach ($opt_groups as $group) {
      $curr_opts = $opts[$group];
      //var_dump($curr_opts);
      foreach ($curr_opts as $opt_name => $opt_val) {
        echo 'initvals["', $opt_name, '"] = "', $opt_val, '";';
      }
    }
  ?>

  function focusName(name) {
    document.getElementsByName(name)[0].focus();
  }


  function toggleStatus(object, target) {
    check = document.getElementsByName(object)[0];
    text = document.getElementsByName(target)[0];
    if (check.checked) {
      text.disabled = false;
    } else {
      text.disabled = true;
    }
  }

  function init_data() {
    var frm = document.forms.mainform

    var str_param_names = new Array(
      "max_line_down_cap", "max_line_up_cap",
      "max_up_limit", "max_down_limit", "max_file_src",
      "slot_alloc", "max_conn_total",
      "tcp_port", "udp_port",
      "min_free_space",
      "autorefresh_time"
      )
    for(i = 0; i < str_param_names.length; i++) {
      frm[str_param_names[i]].value = initvals[str_param_names[i]];
    }
    var check_param_names = new Array(
      "autoconn_en", "reconn_en", "udp_dis", "new_files_paused",
      "aich_trust", "alloc_full", "alloc_full_chunks",
      "check_free_space", "extract_metadata", "ich_en",
      "new_files_auto_dl_prio", "new_files_auto_ul_prio",
      "use_gzip"
      )
    for(i = 0; i < check_param_names.length; i++) {
      frm[check_param_names[i]].checked = initvals[check_param_names[i]] == "1" ? true : false;
      console.log(check_param_names[i]);
    }
    frm["min_free_space"].disabled = initvals["check_free_space"] == "1" ? false : true;
  }

  $( document ).ready( function() {
    init_data();
  });

  </script>

</head>

<body class="animated fadeIn" style="animation-duration: 1.5s">

  <!-- Navigation bar :: This part will be common in all the scripts -->
  <nav class="navbar  navbar-fixed-top" role="navigation">
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
    <!-- Center body -->
    <form name="mainform" action="amuleweb-main-prefs.php" method="post">
           <!-- Commands -->
    <div class="panel panel-default panel-tasks">
      <div class="panel-body container panel-center">
        <div class="form-inline form-tasks">
            <?php
              if ($_SESSION["guest_login"] == 0) {
                echo '<input class="btn btn-warning" type="submit" name="Submit" value="Apply">';
              } else {
                echo '<input class="btn btn-warning" type="submit" name="Submit" value="Apply" disabled>';
                echo '<br><br><span class="label label-warning">You logged in as guest - commands are disabled</span>';
              }
            ?>
          </div>
        </div>
      </div>
  </div>

         <div class="container-fluid panel-tr" style="margin-bottom:60px;">
      <div class="panel">
      <div class="panel-heading panel-center"><h4>PREFERENCES</h4></div>

        <div style="width:600px; margin: auto; margin-top: 20px;">
          <p><b style="font-size:16px;width:550px;background-color:#319a9b;color:cfd8dc" class="form-control">WEBSERVER</b>

          <div class="btn-group form-inline">
            <label class="form-control btn-group"
              style=" width:450px;
                      background-color:#ffffff;
			color:319a9b;
                      border-top-right-radius: 0px;
                      border-bottom-right-radius: 0px;" onclick="javascript:focusName('autorefresh_time')">
                <input type="checkbox" class="btn btn-default" name="nothing" disabled>&nbsp;&nbsp;
                Page refresh interval
              </label>
              <input type="text" class="btn-group form-control"
                style=" border-top-left-radius:0px;
                        border-bottom-left-radius:0px;
                        width: 100px" name="autorefresh_time">
          </div>
          <div class="btn-group form-inline">
            <label class="form-control btn-group" 
              style=" width:450px;
                       background-color:#ffffff;
                        color:319a9b;
                      border-top-right-radius: 0px;
                      border-bottom-right-radius: 0px;">
                <input type="checkbox" class="btn btn-default" name="use_gzip">&nbsp;&nbsp;
                Use gzip compression
              </label>
              <input type="text" class="btn-group form-control"
                style=" border-top-left-radius:0px;
                        border-bottom-left-radius:0px;
                        width: 100px" disabled="true" name="nothing">
          </div></p>

          <p><b style="font-size:16px; width:550px;background-color:#319a9b;color:cfd8dc" " class="form-control">BANDWIDTH LIMITS</b>

          <div class="btn-group form-inline">
            <label class="form-control btn-group" 
              style=" width:450px;
			 background-color:#ffffff;
                        color:319a9b;
                      border-top-right-radius: 0px;
                      border-bottom-right-radius: 0px;" onclick="javascript:focusName('max_down_limit')">
                <input type="checkbox" class="btn btn-default" name="nothing" disabled>&nbsp;&nbsp;
                Max download rate
              </label>
              <input type="text" class="btn-group form-control"
                style=" border-top-left-radius:0px;
                        border-bottom-left-radius:0px;
                        width: 100px" name="max_down_limit">
          </div>
          <div class="btn-group form-inline">
            <label class="form-control btn-group" 
              style=" width:450px;
                       background-color:#ffffff;
                        color:319a9b;
                      border-top-right-radius: 0px;
                      border-bottom-right-radius: 0px;" onclick="javascript:focusName('max_up_limit')">
                <input type="checkbox" class="btn btn-default" name="nothing" disabled>&nbsp;&nbsp;
                Max Upload Rate
              </label>
              <input type="text" class="btn-group form-control"
                style=" border-top-left-radius:0px;
                        border-bottom-left-radius:0px;
                        width: 100px" name="max_up_limit">
          </div>
          <div class="btn-group form-inline">
            <label class="form-control btn-group" 
              style=" width:450px;
                       background-color:#ffffff;
                        color:319a9b;
                      border-top-right-radius: 0px;
                      border-bottom-right-radius: 0px;" onclick="javascript:focusName('slot_alloc')">
                <input type="checkbox" class="btn btn-default" name="nothing" disabled>&nbsp;&nbsp;
                Slot Allocation
              </label>
              <input type="text" class="btn-group form-control"
                style=" border-top-left-radius:0px;
                        border-bottom-left-radius:0px;
                        width: 100px" name="slot_alloc">
          </div></p>

          <p><b style="font-size:16px; width:550px;background-color:#319a9b;color:cfd8dc" class="form-control">CONNECTION SETTINGS</b>

          <div class="btn-group form-inline">
            <label class="form-control btn-group" 
              style=" width:450px;
                       background-color:#ffffff;
                        color:319a9b;
                      border-top-right-radius: 0px;
                      border-bottom-right-radius: 0px;" onclick="javascript:focusName('max_conn_total')">
                <input type="checkbox" class="btn btn-default" name="nothing" disabled>&nbsp;&nbsp;
                Max total connections
              </label>
              <input type="text" class="btn-group form-control"
                style=" border-top-left-radius:0px;
                        border-bottom-left-radius:0px;
                        width: 100px" name="max_conn_total">
          </div>
          <div class="btn-group form-inline">
            <label class="form-control btn-group" 
              style=" width:450px;
                       background-color:#ffffff;
                        color:319a9b;
                      border-top-right-radius: 0px;
                      border-bottom-right-radius: 0px;" onclick="javascript:focusName('max_file_src')">
                <input type="checkbox" class="btn btn-default" name="nothing" disabled>&nbsp;&nbsp;
                Max sources per file
              </label>
              <input type="text" class="btn-group form-control"
                style=" border-top-left-radius:0px;
                        border-bottom-left-radius:0px;
                        width: 100px" name="max_file_src">
          </div>
          <div class="btn-group form-inline">
            <label class="form-control btn-group" 
              style=" width:450px;
                       background-color:#ffffff;
                        color:319a9b;
                      border-top-right-radius: 0px;
                      border-bottom-right-radius: 0px;">
                <input type="checkbox" class="btn btn-default" name="autoconn_en">&nbsp;&nbsp;
                Autoconnect at startup
              </label>
              <input type="text" class="btn-group form-control"
                style=" border-top-left-radius:0px;
                        border-bottom-left-radius:0px;
                        width: 100px" disabled="true" name="nothing">
          </div>
          <div class="btn-group form-inline">
            <label class="form-control btn-group" 
              style=" width:450px;
                       background-color:#ffffff;
                        color:319a9b;
                      border-top-right-radius: 0px;
                      border-bottom-right-radius: 0px;">
                <input type="checkbox" class="btn btn-default" name="reconn_en">&nbsp;&nbsp;
                Reconnect when connection lost
              </label>
              <input type="text" class="btn-group form-control"
                style=" border-top-left-radius:0px;
                        border-bottom-left-radius:0px;
                        width: 100px" disabled="true" name="nothing">
          </div></p>

          <p><b style="font-size:16px; width:550px;background-color:#319a9b;color:cfd8dc" class="form-control">CONNECTION SETTINGS</b>

          <div class="btn-group form-inline">
            <label class="form-control btn-group" 
              style=" width:450px;
                       background-color:#ffffff;
                        color:319a9b;
                      border-top-right-radius: 0px;
                      border-bottom-right-radius: 0px;" onclick="javascript:focusName('tcp_port')">
                <input type="checkbox" class="btn btn-default" name="nothing" disabled>&nbsp;&nbsp;
                TCP Port
              </label>
              <input type="text" class="btn-group form-control"
                style=" border-top-left-radius:0px;
                        border-bottom-left-radius:0px;
                        width: 100px" name="tcp_port">
          </div>
          <div class="btn-group form-inline">
            <label class="form-control btn-group" 
              style=" width:450px;
                       background-color:#ffffff;
                        color:319a9b;
                      border-top-right-radius: 0px;
                      border-bottom-right-radius: 0px;" onclick="javascript:focusName('udp_port')">
                <input type="checkbox" class="btn btn-default" name="nothing" disabled>&nbsp;&nbsp;
                UDP Port
              </label>
              <input type="text" class="btn-group form-control"
                style=" border-top-left-radius:0px;
                        border-bottom-left-radius:0px;
                        width: 100px" name="udp_port">
          </div>
          <div class="btn-group form-inline">
            <label class="form-control btn-group" 
              style=" width:450px;
                       background-color:#ffffff;
                        color:319a9b;
                      border-top-right-radius: 0px;
                      border-bottom-right-radius: 0px;">
                <input type="checkbox" class="btn btn-default" name="udp_dis">&nbsp;&nbsp;
                Disable UDP connections
              </label>
              <input type="text" class="btn-group form-control"
                style=" border-top-left-radius:0px;
                        border-bottom-left-radius:0px;
                        width: 100px" disabled="true" name="nothing">
          </div></p>

        <p><b style="font-size:16px; width:550px;background-color:#319a9b;color:cfd8dc" class="form-control">LINE CAPACITY (STATISTICS)</b>

          <div class="btn-group form-inline">
            <label class="form-control btn-group" 
              style=" width:450px;
                       background-color:#ffffff;
                        color:319a9b;
                      border-top-right-radius: 0px;
                      border-bottom-right-radius: 0px;" onclick="javascript:focusName('max_line_down_cap')">
                <input type="checkbox" class="btn btn-default" name="nothing" disabled>&nbsp;&nbsp;
                Max download rate
              </label>
              <input type="text" class="btn-group form-control"
                style=" border-top-left-radius:0px;
                        border-bottom-left-radius:0px;
                        width: 100px" name="max_line_down_cap">
          </div>
          <div class="btn-group form-inline">
            <label class="form-control btn-group" 
              style=" width:450px;
                       background-color:#ffffff;
                        color:319a9b;
                      border-top-right-radius: 0px;
                      border-bottom-right-radius: 0px;" onclick="javascript:focusName('max_line_up_cap')">
                <input type="checkbox" class="btn btn-default" name="nothing" disabled>&nbsp;&nbsp;
                Max upload rate
              </label>
              <input type="text" class="btn-group form-control"
                style=" border-top-left-radius:0px;
                        border-bottom-left-radius:0px;
                        width: 100px" name="max_line_up_cap">
          </div></p>

          <p><b style="font-size:16px; width:550px;background-color:#319a9b;color:cfd8dc" class="form-control">FILE SETTINGS</b>

          <div class="btn-group form-inline">
            <label class="form-control btn-group" 
              style=" width:450px;
                       background-color:#ffffff;
                        color:319a9b;
                      border-top-right-radius: 0px;
                      border-bottom-right-radius: 0px;">
                <input type="checkbox" class="btn btn-default" name="check_free_space"
                   onclick="javascript:toggleStatus('check_free_space','min_free_space')">&nbsp;&nbsp;
                Check free minimum space (MB)
              </label>
              <input type="text" class="btn-group form-control"
                style=" border-top-left-radius:0px;
                        border-bottom-left-radius:0px;
                        width: 100px" name="min_free_space">
          </div>
          <div class="btn-group form-inline">
            <label class="form-control btn-group" 
              style=" width:450px;
                       background-color:#ffffff;
                        color:319a9b;
                      border-top-right-radius: 0px;
                      border-bottom-right-radius: 0px;">
                <input type="checkbox" class="btn btn-default" name="new_files_auto_dl_prio">&nbsp;&nbsp;
                Added download with auto priority
              </label>
              <input type="text" class="btn-group form-control"
                style=" border-top-left-radius:0px;
                        border-bottom-left-radius:0px;
                        width: 100px" disabled="true" name="nothing">
          </div>
          <div class="btn-group form-inline">
            <label class="form-control btn-group" 
              style=" width:450px;
                       background-color:#ffffff;
                        color:319a9b;
                      border-top-right-radius: 0px;
                      border-bottom-right-radius: 0px;">
                <input type="checkbox" class="btn btn-default" name="new_files_auto_ul_prio">&nbsp;&nbsp;
                New shared files with auto priority
              </label>
              <input type="text" class="btn-group form-control"
                style=" border-top-left-radius:0px;
                        border-bottom-left-radius:0px;
                        width: 100px" disabled="true" name="nothing">
          </div>
          <div class="btn-group form-inline">
            <label class="form-control btn-group" 
              style=" width:450px;
                       background-color:#ffffff;
                        color:319a9b;
                      border-top-right-radius: 0px;
                      border-bottom-right-radius: 0px;">
                <input type="checkbox" class="btn btn-default" name="ich_en">&nbsp;&nbsp;
                I.C.H. active
              </label>
              <input type="text" class="btn-group form-control"
                style=" border-top-left-radius:0px;
                        border-bottom-left-radius:0px;
                        width: 100px" disabled="true" name="nothing">
          </div>
          <div class="btn-group form-inline">
            <label class="form-control btn-group" 
              style=" width:450px;
                       background-color:#ffffff;
                        color:319a9b;
                      border-top-right-radius: 0px;
                      border-bottom-right-radius: 0px;">
                <input type="checkbox" class="btn btn-default" name="aich_trust">&nbsp;&nbsp;
                AICH trusts every hash (not recommended)
              </label>
              <input type="text" class="btn-group form-control"
                style=" border-top-left-radius:0px;
                        border-bottom-left-radius:0px;
                        width: 100px" disabled="true" name="nothing">
          </div>
          <div class="btn-group form-inline">
            <label class="form-control btn-group" 
              style=" width:450px;
                       background-color:#ffffff;
                        color:319a9b;
                      border-top-right-radius: 0px;
                      border-bottom-right-radius: 0px;">
                <input type="checkbox" class="btn btn-default" name="alloc_full_chunks">&nbsp;&nbsp;
                Alloc full chunks for <code>.part</code> files
              </label>
              <input type="text" class="btn-group form-control"
                style=" border-top-left-radius:0px;
                        border-bottom-left-radius:0px;
                        width: 100px" disabled="true" name="nothing">
          </div>
          <div class="btn-group form-inline">
            <label class="form-control btn-group" 
              style=" width:450px;
                       background-color:#ffffff;
                        color:319a9b;
                      border-top-right-radius: 0px;
                      border-bottom-right-radius: 0px;">
                <input type="checkbox" class="btn btn-default" name="alloc_full">&nbsp;&nbsp;
                Alloc full disk space for <code>.part</code> files
              </label>
              <input type="text" class="btn-group form-control"
                style=" border-top-left-radius:0px;
                        border-bottom-left-radius:0px;
                        width: 100px" disabled="true" name="nothing">
          </div>
          <div class="btn-group form-inline">
            <label class="form-control btn-group" 
              style=" width:450px;
                       background-color:#ffffff;
                        color:319a9b;
                      border-top-right-radius: 0px;
                      border-bottom-right-radius: 0px;">
                <input type="checkbox" class="btn btn-default" name="new_files_paused">&nbsp;&nbsp;
                Add files to download in pause
              </label>
              <input type="text" class="btn-group form-control"
                style=" border-top-left-radius:0px;
                        border-bottom-left-radius:0px;
                        width: 100px" disabled="true" name="nothing">
          </div>
          <div class="btn-group form-inline">
            <label class="form-control btn-group" 
              style=" width:450px;
                       background-color:#ffffff;
                        color:319a9b;
                      border-top-right-radius: 0px;
                      border-bottom-right-radius: 0px;">
                <input type="checkbox" class="btn btn-default" name="extract_metadata">&nbsp;&nbsp;
                Extract MetaData tags
              </label>
              <input type="text" class="btn-group form-control"
                style=" border-top-left-radius:0px;
                        border-bottom-left-radius:0px;
                        width: 100px" disabled="true" name="nothing">
          </div></p>

        </div>

        
      </div>  
    </div>
    </form>

  <!-- Footer -->
  <div id="footer">
    <div class="col-md-1"></div>
    <div class="col-md-5">
      <form name="formlink" method="post" class="form-inline" action="amuleweb-main-prefs.php" role="form" id="formed2link">
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

