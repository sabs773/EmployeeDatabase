<!DOCTYPE html>
<html lang="en">
<head>

<?php

include('session.php');

?>

<meta charset="utf-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <title>Cleaning Management HRIS</title>
          <meta name="description" content="">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <meta name="robots" content="all,follow">
          <!-- Bootstrap CSS-->
          <link rel="stylesheet" href="vendorbootstrap/bootstrap/css/bootstrap.min.css">
          <!-- Font Awesome CSS-->
          <link rel="stylesheet" href="vendorbootstrap/font-awesome/css/font-awesome.min.css">
          <!-- Fontastic Custom icon font-->
          <link rel="stylesheet" href="css/fontastic.css">
          <!-- Google fonts - Roboto -->
          <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
          <!-- jQuery Circle-->
          <link rel="stylesheet" href="css/grasp_mobile_progress_circle-1.0.0.min.css">
          <!-- Custom Scrollbar-->
          <link rel="stylesheet" href="vendorbootstrap/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css">
          <!-- theme stylesheet-->
          <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
          <!-- Custom stylesheet - for your changes-->
          <link rel="stylesheet" href="css/custom.css">
          <!-- Favicon-->
          <link rel="shortcut icon" href="css/faviconlogo.ico">
          <!-- Tweaks for older IEs--><!--[if lt IE 9]>
              <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
              <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
        </head>
        <body>
          <!-- Side Navbar -->
          <nav class="side-navbar">
            <div class="side-navbar-wrapper">
              <!-- Sidebar Header    -->
              <div class="sidenav-header d-flex align-items-center justify-content-center">
                <!-- User Info-->
                <div class="sidenav-header-inner text-center"><img src="img/avatar-11.jpg" alt="person" class="img-fluid rounded-circle">
                  <h2 class="h5"><?php echo $usernameadmin;?></h2><span>Administrator</span>
                </div>
                <!-- Small Brand information, appears on minimized sidebar-->
                <div class="sidenav-header-logo"><a href="index.html" class="brand-small text-center"><strong>CM</strong><strong class="text-primary">S</strong></a></div>
              </div>
              <!-- Sidebar Navigation Menus-->
              <div class="main-menu">
                <h5 class="sidenav-heading">Main</h5>
                <ul id="side-main-menu" class="side-menu list-unstyled">                  
                  <li><a href="EmployeeManagerMenu.php"> <i class="icon-home"></i>Home                             </a></li>
                  <li><a href="EmployeeDatabase.php"> <i class="fa fa-users"></i>Employee Database</a></li>
                  <li><a href="manageleaves.php"> <i class="fa fa-calendar"></i>Manage Leaves</a></li>
                    <li><a href="#LocationManager" aria-expanded="false" data-toggle="collapse"> <i class="fa fa-map-marker"></i>Location Manager</a>
                    <ul id="LocationManager" class="collapse list-unstyled ">
                      <li><a href="/LocationManager/LocationView.php">Location</a></li>
                      <li><a href="/LocationManager/Roaster.php">Assign Employees</a></li>
                      <li><a href="/LocationManager/DisplayDuty.php">Duty Roster</a></li>
                    </ul> 
                    </li>                            </a></li>
                    <li><a href="#PayrollManager" aria-expanded="false" data-toggle="collapse"> <i class="fa fa-money"></i>Payroll Manager</a>
                      <ul id="PayrollManager" class="collapse list-unstyled ">
                          <li><a href="/Payroll/PayrollMenu.php">Payroll</a></li>
                          <li><a href="/Payroll/PayrollSettings.php">Payroll Settings</a></li>
                          <li><a href="/Payroll/AdminClaims.php">Claims</a></li>
                        </ul>
                  <li><a href="#Smartapp" aria-expanded="false" data-toggle="collapse"> <i class="fa fa-mobile"></i>Smart App</a>
                    <ul id="Smartapp" class="collapse list-unstyled ">
                      <li><a href="/loginsystem/view.php">Attendance</a></li>
                      <li><a href="reports.php">Reports</a></li>
                      <li><a href="appDownload.php">App APK</a></li>
                    </ul>
                  </li>
              </div>
          </nav>
          <div class="page">
            <!-- navbar-->
            <header class="header">
              <nav class="navbar">
                <div class="container-fluid">
                  <div class="navbar-holder d-flex align-items-center justify-content-between">
                    <div class="navbar-header"><a id="toggle-btn" href="#" class="menu-btn"><i class="icon-bars"> </i></a><a href="index.html" class="navbar-brand">
                        <div class="brand-text d-none d-md-inline-block"><span>CLEANING MANAGEMENT SYSTEM</span><strong class="text-primary"> HRIS</strong></div></a></div>
                    <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                      <!-- Notifications dropdown-->
                      <li class="nav-item dropdown"> <a id="notifications" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link"><i class="fa fa-bell"></i><span class="badge badge-warning">12</span></a>
                        <ul aria-labelledby="notifications" class="dropdown-menu">
                          <li><a rel="nofollow" href="#" class="dropdown-item"> 
                              <div class="notification d-flex justify-content-between">
                                <div class="notification-content"><i class="fa fa-envelope"></i>You have 6 new messages </div>
                                <div class="notification-time"><small>4 minutes ago</small></div>
                              </div></a></li>
                          <li><a rel="nofollow" href="#" class="dropdown-item"> 
                              <div class="notification d-flex justify-content-between">
                                <div class="notification-content"><i class="fa fa-twitter"></i>You have 2 followers</div>
                                <div class="notification-time"><small>4 minutes ago</small></div>
                              </div></a></li>
                          <li><a rel="nofollow" href="#" class="dropdown-item"> 
                              <div class="notification d-flex justify-content-between">
                                <div class="notification-content"><i class="fa fa-upload"></i>Server Rebooted</div>
                                <div class="notification-time"><small>4 minutes ago</small></div>
                              </div></a></li>
                          <li><a rel="nofollow" href="#" class="dropdown-item"> 
                              <div class="notification d-flex justify-content-between">
                                <div class="notification-content"><i class="fa fa-twitter"></i>You have 2 followers</div>
                                <div class="notification-time"><small>10 minutes ago</small></div>
                              </div></a></li>
                          <li><a rel="nofollow" href="#" class="dropdown-item all-notifications text-center"> <strong> <i class="fa fa-bell"></i>view all notifications                                            </strong></a></li>
                        </ul>
                      </li>
                      <!-- Log out-->
                      <li class="nav-item"><a href="/Users/SignIn.php" class="nav-link logout"> <span class="d-none d-sm-inline-block">Logout</span><i class="fa fa-sign-out"></i></a></li>
                    </ul>
                  </div>
                </div>
              </nav>
            </header>
<!-- Header Section-->
<section class="dashboard-header section-padding">
  <div class="container-fluid">
    <div class="row d-flex align-items-md-stretch">
<!-- JavaScript files-->
<script src="vendorbootstrap/jquery/jquery.min.js"></script>
<script src="vendorbootstrap/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="js/grasp_mobile_progress_circle-1.0.0.min.js"></script>
<script src="vendorbootstrap/jquery.cookie/jquery.cookie.js"> </script>
<script src="vendorbootstrap/chart.js/Chart.min.js"></script>
<script src="vendorbootstrap/jquery-validation/jquery.validate.min.js"></script>
<script src="vendorbootstrap/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="js/charts-home.js"></script>
<!-- Main File-->
<script src="js/front.js"></script>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<!-- Extra css files -->
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<style>

.cards {
background-color:  #D5DBDF;
}   

.container{
background-color : #D5DBDF;
}

h2{

  font-family: "Roboto", sans-serif;
}


</style> 

<body class="w3-light-grey">

<!-- Page Container -->
<div class="w3-content w3-margin-top" style="max-width:1400px;">

  <!-- The Grid -->
  <div class="w3-row-padding">


       <!-- Clock -->
     <!-- Left Column -->
     <div class="w3-third">
      <div class="w3-white w3-text-grey w3-card-4">
        <div class="w3-display-container">
        <br></br>
          <div class="w3-display-bottomleft w3-container w3-text-black">
          </div>
        </div>
        <div class="w3-container">
        <center>
        <p>Date</p>
        <h3><?php date_default_timezone_set('Asia/Kuala_Lumpur'); echo $date = date('d/m/Y'); ?></h3>
        <br></br>
        <p>Time</p>
        <h3><?php echo date('h:i:s A',time());  ?></h3>
        </center>
        <br>
        <br>
        </div>
      </div><br>

    <!-- End Left Column -->
    </div>
  
    <!-- Left Column -->
    <div class="w3-third">
      <div class="w3-white w3-text-grey w3-card-4">
        <div class="w3-display-container">
        <br></br>
          <div class="w3-display-bottomleft w3-container w3-text-black">
          <p class="w3-large"><b><i class="fa fa-university fa-fw w3-margin-right w3-text-teal"></i>Organization</b></p>
          </div>
        </div>
        <div class="w3-container">
        <div id="piechart"></div>

          <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

          <script type="text/javascript">
          // Load google charts
          google.charts.load('current', {'packages':['corechart']});
          google.charts.setOnLoadCallback(drawChart);

          // Draw the chart and set the chart values
          function drawChart() {
            var data = google.visualization.arrayToDataTable([
            ['Employee', 'Number of employees'],
            ['Managers', 2],
            ['Cleaners', 3],
            ['Office Workers', 1]
          ]);

            // Display the chart inside the <div> element with id="piechart"
            var chart = new google.visualization.PieChart(document.getElementById('piechart'));
            chart.draw(data);
          }
          </script>
          <br>
        <br>
        </div>
      </div><br>

    <!-- End Left Column -->
    </div>
     <!-- Left Column -->
     <div class="w3-third">
      <div class="w3-white w3-text-grey w3-card-4">
        <div class="w3-display-container">
        <br></br>
          <div class="w3-display-bottomleft w3-container w3-text-black">
          <p class="w3-large"><b><i class="fa fa-building-o fa-fw w3-margin-right w3-text-teal"></i>Cleaning Contracts</b></p>
          </div>
        </div>
        <div class="w3-container">
        <p>Places with Signed Contracts</p>
        <?php $i = 0; foreach($Allplace[0] as $row){$i++; ?>
          <p><i class="fa fa-building-o fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $row["LocationName"]; ?></p>
          <?php } ?>
          <br>
          <br>
        </div>
      </div><br>

    <!-- End Left Column -->
    </div>

    <!-- Right Column -->
    <div class="w3-twothird">
    
      <div class="w3-container w3-card w3-white w3-margin-bottom">
        <div class="w3-container">
        <p class="w3-large"><b><i class="fa fa-asterisk fa-fw w3-margin-right w3-text-teal"></i>Client Details</b></p>
       
        <div class = "card" style = "width: auto;">
            <div class = "card-body" style = "width: auto;">
                <div class = "table-responsive"> 
              <table class = "table table-bordered table-sm" id = "tableclaim" >
                <thread> 
                <tr> 
                <th>No</th>
                <th>Location</th>
                <th>Name</th>
                <th>Phone Number</th>
                <th>Working Hours</th>
                </tr>
                </thread>
                <tbody>
                <tr> 
                <?php $i = 0; foreach($Allplace[0] as $row){$i++; ?>
                <td><?php echo $i; ?></td> 
                <td><?php echo $row['LocationName']; ?></td>
                <td><?php echo $row['ClientName']; ?></td>
                <td><?php echo $row['ClientPhone']; ?></td>
                <td><?php echo $row['workingHours']; ?></td>
                
                </tr>

                  <?php
                  }
                  ?>
                </tbody>
                </table>
                </div>
                </div>
                </div>
                 
        </div>
      
            
          <hr>
        </div>
      </div>

    <!-- End Right Column -->
    </div>
    
  <!-- End Grid -->
  </div>
  
  <!-- End Page Container -->
</div>
</html>
