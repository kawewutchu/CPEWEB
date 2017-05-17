<?php require_once("headeradmin.html"); ?>
<?php
    require_once("checkLoggedIn.php");
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "phpbasic";
	$conn = new mysqli($servername, $username, $password,$dbname);
	mysqli_set_charset($conn, "utf8");

	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 
	
	$sql = "SELECT * FROM news_table";
	$result = $conn->query($sql);
	
	
?>
    <!-- MAIN SECTION -->
     <section class="mainContent full-width clearfix">
     <div class="medical-breadcrumb">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h2 style="font-size: 45px;">Admin</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <a href="adminformStudent1.php" class="col-md-12 btn btn-warning" role="button" style="margin-top: 50px; padding: 20px; font-size: 50px;">Student Year 1</a>
                    </div>
                    <div class="col-md-6">
                        <a href="adminformStudent2.php" class="col-md-12 btn btn-warning" role="button" style="margin-top: 50px; padding: 20px; font-size: 50px;">Student Year 2</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <a href="adminformStudent3.php" class="col-md-12 btn btn-warning" role="button" style="margin-top: 50px; padding: 20px; font-size: 50px;">Student Year 3</a>
                    </div>
                    <div class="col-md-6">
                        <a href="adminformStudent4.php" class="col-md-12 btn btn-warning" role="button" style="margin-top: 50px; padding: 20px; font-size: 50px;">Student Year 4</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <a href="adminformAcademic.php" class="col-md-12 btn btn-warning" role="button" style="margin-top: 50px; margin-bottom: 50px; padding: 20px; font-size: 50px;">Academic</a>
                    </div>
                    <div class="col-md-6">
                        <a href="adminformStaff.php" class="col-md-12 btn btn-warning" role="button" style="margin-top: 50px; margin-bottom: 50px; padding: 20px; font-size: 50px;">Staff</a>
                    </div>
                </div>

    </section>
<?php $conn->close(); ?>
<?php require_once("footer.html"); ?>
    