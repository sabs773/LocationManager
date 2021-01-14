<!DOCTYPE html>
<html lang="en">
<head>
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
                <h2 class="h5">ADMIN001</h2><span>Administrator</span>
                </div>
                <!-- Small Brand information, appears on minimized sidebar-->
                <div class="sidenav-header-logo"><a href="index.html" class="brand-small text-center"><strong>CM</strong><strong class="text-primary">S</strong></a></div>
              </div>
              <!-- Sidebar Navigation Menus-->
              <div class="main-menu">
                <h5 class="sidenav-heading">Main</h5>
                <ul id="side-main-menu" class="side-menu list-unstyled">                  
                  <li><a href="/EmployeeDatabase/EmployeeManagerMenu.html"> <i class="icon-home"></i>Home                             </a></li>
                  <li><a href="/EmployeeDatabase/EmployeeDatabase.php"> <i class="fa fa-users"></i>Employee Database </a></li>
                  <li><a href="/EmployeeDatabase/manageleaves.php"> <i class="fa fa-calendar"></i>Manage Leaves</a></li>
                    <li><a href="#LocationManager" aria-expanded="false" data-toggle="collapse"> <i class="fa fa-map-marker"></i>Location Manager</a>
                    <ul id="LocationManager" class="collapse list-unstyled ">
                      <li><a href="/LocationManager/LocationView.php">Location</a></li>
                      <li><a href="/LocationManager/Roaster.php">Assign Employees</a></li>
                      <li><a href="/LocationManager/DisplayDuty.php">Duty Roster</a></li>
                    </ul> 
                    </li>                            
                  <li><a href="#PayrollManager" aria-expanded="false" data-toggle="collapse"> <i class="fa fa-money"></i>Payroll Manager</a>
                  <ul id="PayrollManager" class="collapse list-unstyled ">
                      <li><a href="/Payroll/PayrollMenu.php">Payroll</a></li>
                      <li><a href="/Payroll/PayrollSettings.php">Payroll Settings</a></li>
                      <li><a href="/Payroll/AdminClaims.php">Claims</a></li>
                    </ul>
                  </li>
                  <li><a href="#Smartapp" aria-expanded="false" data-toggle="collapse"> <i class="fa fa-mobile"></i>Smart App</a>
                    <ul id="Smartapp" class="collapse list-unstyled ">
                      <li><a href="/loginsystem/view.php">Attendance</a></li>
                      <li><a href="reports.php">Reports</a></li>
                      <li><a href="appDownload.php">Feedback</a></li>
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

<!-- Additional JavaScript files-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/css/bootstrap-multiselect.css" />

<!-- Main File-->
<script src="js/front.js"></script>

<script>  


</script>

<style>

table {
  border-collapse: collapse;
  width: auto;
  color: #D5DBDF;
  font-family: serif;
  font-size: 15px;
  text-align: center;
  }
  
  th {
  background-color: #475056 ;
  color: white;
  font-size: 16px;
  }
  tr:nth-child(even) {background-color: #D5DBDF}

  .bottom-center { 
            top: 50%; 
            left: 50%; 
            transform: translateX(-50%) translateY(-60%); 
        } 
          

</style> 

<?php 

//Employee Register
include('GFirestore.php');
$Doc = new firestore('EmployeeRegistar');
$results[] = $Doc->getAllDocuments();


//Location Registar
$location = new firestore('LocationRegistar');
$place[] = $location->getAllDocuments();


//Get only Managers
$y= 0;

foreach($results[0] as $rows){ 
     $y++;
      if(strpos(strtolower($rows['Position']),strtolower('manager')) !== false){ 
           
          $manager[] = $rows['Name'];
        
        }
     }


//Get only Cleaners
     $x= 0;

     foreach($results[0] as $row){ 
          $y++;
           if(strpos(strtolower($row['Position']),strtolower('cleaner')) !== false){ 
                
               $cleaner[] = $row['Name'];
             
             }
           
          }

//Retrieve Data 
$token = $_GET['token'];

require_once("GFirestore.php");
$location = new firestore('DutyRoaster');
$places = $location->getDocument($token);


?>

<body>


<form action = "UpdateDuty.php" method="POST" id="framework_form">

<h2><?php echo "Place : ".$places["LocationName"]."<br>"; ?></h2>
<h2><?php echo "Block : ".$places["Block"]."<br>"; ?></h2>
<br></br>

<!--Manager List-->
  <div class="container" style="width:600px;">
    <div class="form-group">
     <label>Select Manager </label>
     <br></br>
     <select id="framework" name="framework[]" multiple class="form-control" >
     <?php $x= 0; foreach($manager as $row){ $x++;?>
     <option value="<?php echo $row;?>">
     <?php echo $row;?>
     <?php } ?>
     </option>
     </select>
    </div>
    <div class="form-group">
    </div> <br /> </div>
 

<!--Cleaner List-->
  <div class="container" style="width:600px;">
    <div class="form-group">
     <label>Select Cleaner </label>
     <br></br>
     <select id="cleaner" name="cleaner[]" multiple class="form-control" >
     <?php $x= 0; foreach($cleaner as $row){ $x++;?>
     <option value="<?php echo $row;?>">
     <?php echo $row;?>
     <?php } ?>
     </option>
     </select>
    </div>
    <div class="form-group">
    </div> <br /> </div>


<!--Client Notes-->
<div class="container" style="width:600px;">
<div class="left">
<label>Additional Notes : </label></div>
<input type="text" id="note" name="note" placeholder="Additional notes" class="form-control"  value ="<?php echo $places["Note"]; ?>"></div>
</div></div>


 <!--Hidden LocationName Field-->
 <input type="hidden" id="token" name="token" value="<?php echo $token ?>">


<br></br>            
<!--Buttons-->
<center>
<div class="center">
<button type="submit" name="submit"  class="btn btn-success" value="Submit">Save</button>
&nbsp; &nbsp;&nbsp;
<button type="reset" class="btn btn-primary" value="Reset">Reset</button>
&nbsp; &nbsp;&nbsp;
<button type="button" class="btn btn-danger" value="cancel" onclick="window.location.href='DisplayDuty.php';">Cancel</button></div></center>
</div>  


</form>


<script>

//retreive selected text 

//For manager

$(document).ready(function(){
 $('#framework').multiselect({
  nonSelectedText: 'Select Manager',
  enableFiltering: true,
  enableCaseInsensitiveFiltering: true,
  buttonWidth:'400px'
 });
 
 
});

//multiselect  
$(document).ready(function(){
 $('#cleaner').multiselect({
  nonSelectedText: 'Select Cleaner',
  enableFiltering: true,
  enableCaseInsensitiveFiltering: true,
  buttonWidth:'400px'
 });

});

 </script>


</body>
</html>















