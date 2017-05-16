<?php require_once("headerAdmin.html"); ?>
<!-- <?php

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
	
	$sql = "SELECT * FROM TABLE_3";
	$result = $conn->query($sql);
	
	
?>
    <!-- MAIN SECTION -->
     <section class="mainContent full-width clearfix">
     <div class="medical-breadcrumb">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <h2 style="font-size: 45px;">Student Year 3</h2>
                    </div>
                     <div class="col-md-3">
                      <a href="admin-form.php" class="btn btn-success" role="button">Add student</a>
                    </div>
                </div>
            </div>
        </div>
          <div class="container">
                <div class="row">
                     <div class="col-xs-12">
                        <h3 style="margin-top: 35px; font-size: 30px;" class="color-1">จำนวนนักศึกษา <?=$result->num_rows?> คน</h3>
                        <div class="table-responsive">
                              <table class="table table-curved">
                                    <thead>
                                          <tr>
                                           
                                                <th style="font-size: 20px;" class="col-sm-2 bg-color-1">ชื่อ</th>
                                                <th style="font-size: 20px;" class="col-sm-2 bg-color-2">นามสกุล</th>
                                                <th style="font-size: 20px;" class="col-sm-2 bg-color-3">รหัสนักศึกษา</th>

                                                <th style="font-size: 20px;" class="col-sm-2 bg-color-4">เครื่องมือ</th>
                                                
                                          </tr>
                                    </thead>
                                    <tbody>
                                    	 <?php while($row = $result->fetch_assoc()): ?>
                                    		<tr>
                                            	  <td><a style="font-size: 20px;"><?=$row["name"]?></a></td>
                                            	  <td><a style="font-size: 20px;"><?=$row["lastname"]?></a></td>
                                                <td><a style="font-size: 20px;"><?=$row["studentId"]?></a></td>
                                                <td> <a href="#" style="margin-right: 20px;" class="btn btn-info" role="button">Edit</a> <a href="#" class="btn btn-danger" role="button">Delete</a></td>
                                            </tr>
                                         <?php endwhile; ?>
                                    </tbody>
                               </table>
                       </div>
                  </div>
          </div>
    </section>
 --><?php $conn->close(); ?>
<?php require_once("footer.html"); ?>
    