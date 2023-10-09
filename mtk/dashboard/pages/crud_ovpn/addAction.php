<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("Location: login.php", true, 301);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    

    <title>TKHOTSPOT - VPN</title>

    <?php require('../../tools/header.php');?>  

</head>

<body id="page-top">

     <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
       <?php require('../../tools/sidebar.php');?>
	   <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                

                    <!-- Topbar Navbar -->
                    <?php require('../../tools/topbar.php');?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Contacts</h1>
<?php
// Include the database connection file
require_once("dbConnection.php");

if (isset($_POST['submit'])) {
	// Escape special characters in string for use in SQL statement	
	$devicename = mysqli_real_escape_string($mysqli, $_POST['devicename']);
	$macaddress = mysqli_real_escape_string($mysqli, $_POST['macaddress']);
	$ipaddress = mysqli_real_escape_string($mysqli, $_POST['ipaddress']);
	$servicetype = mysqli_real_escape_string($mysqli, $_POST['servicetype']);
	$plan = mysqli_real_escape_string($mysqli, $_POST['plan']);
	$connection = mysqli_real_escape_string($mysqli, $_POST['connection']);
	$port = mysqli_real_escape_string($mysqli, $_POST['port']);
	$user = mysqli_real_escape_string($mysqli, $_POST['user']);
	$password = mysqli_real_escape_string($mysqli, $_POST['password']);
	$profile = mysqli_real_escape_string($mysqli, $_POST['profile']);
	$portservice= mysqli_real_escape_string($mysqli, $_POST['portservice']);
	$description = mysqli_real_escape_string($mysqli, $_POST['description']);
	$status = mysqli_real_escape_string($mysqli, $_POST['status']);
		
			
	// Check for empty fields
	if (empty($devicename)|| empty($macaddress)|| empty($ipaddress)|| empty($servicetype) || empty($plan)|| empty($connection)|| empty($port)||
	empty($user)|| empty($password)|| empty($profile)|| empty($portservice)|| empty($description)|| empty($status)) {
		if (empty($devicename)) {
			echo "<font color='red'>Device Name  is empty.</font><br/>";
		}
		if (empty($macaddress)) {
			echo "<font color='red'>MAC  is empty.</font><br/>";
		}
		if (empty($ipaddress)) {
			echo "<font color='red'>IP is empty.</font><br/>";
		}
		if (empty($servicetype)) {
			echo "<font color='red'>Service is empty.</font><br/>";
		}
		if (empty($plan)) {
			echo "<font color='red'>Plan is empty.</font><br/>";
		}
		if (empty($connection)) {
			echo "<font color='red'>Connection is empty.</font><br/>";
		}
		if (empty($port)) {
			echo "<font color='red'>Port is empty.</font><br/>";
		}
		if (empty($user)) {
			echo "<font color='red'>User Name is empty.</font><br/>";
		}
		if (empty($password)) {
			echo "<font color='red'>Password  is empty.</font><br/>";
		}
		if (empty($profile)) {
			echo "<font color='red'>Profile is empty.</font><br/>";
		}
		if (empty($portservice)) {
			echo "<font color='red'>Port Service is empty.</font><br/>";
		}
		if (empty($description)) {
			echo "<font color='red'>Description is empty.</font><br/>";
		}
		if (empty($status)) {
			echo "<font color='red'>Status is empty.</font><br/>";
		}
		// Show link to the previous page
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		// If all the fields are filled (not empty) 

		// Insert data into database
		$result = mysqli_query($mysqli, "INSERT INTO `vpn`(`device_name`, `device_mac`, `device_ip`, `port_service`, `vpn_plan_id`, `vpn_connection`, `vpn_port_assigned`, `vpn_username`, `vpn_password`, `vpn_profile`, `vpn_service_port`, `description`, `status`)  VALUES ('$devicename','$macaddress','$ipaddress','$servicetype','$plan','$connection','$port','$user','$password','$profile','$portservice','$description','$status' )");
		
		// Display success message
		echo "<p><font color='green'>Data added successfully!</p>";
		echo "<a href='index.php'>View Result</a>";
	}
}
?>
 </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

             <!-- Footer -->
            <?php require('../../tools/footer.php');?>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <?php require('../../tools/scroll.php');?>

    <!-- Logout Modal-->
    <?php require('../../tools/logout.php');?>

    <!-- Bootstrap core JavaScript-->
    <!-- Core plugin JavaScript-->
    <!-- Custom scripts for all pages-->
    <?php require('../../tools/scripts.php');?>

</body>

</html>
