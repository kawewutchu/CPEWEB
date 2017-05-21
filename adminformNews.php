<?php require_once("headerAdmin.html"); ?>
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
                    <div class="col-md-9">
                        <h2 style="font-size: 45px;">News</h2>
                    </div>
                     <div class="col-md-3">
                      <a href="form_news.php"  class="btn btn-success" role="button">Add News</a>
                    </div>
                </div>
            </div>
        </div>
          <div class="container">
                <div class="row">
                     <div class="col-xs-12">
                        <h3 style="margin-top: 35px; font-size: 30px;" class="color-1">จำนวนข่าว <?=$result->num_rows?> เรื่อง</h3>
                        <div class="table-responsive">
                              <table class="table table-curved">
                                    <thead>
                                          <tr>
                                                <th style="font-size: 20px;" class="col-sm-2 bg-color-1">Title</th>
                                                <th style="font-size: 20px;" class="col-sm-2 bg-color-2">เครื่องมือ</th>
                                          </tr>
                                    </thead>
                                    <tbody>
                                    	 <?php while($row = $result->fetch_assoc()): ?>
                                    		<tr>
                                            	  <td><a style="font-size: 20px;"><?=$row["title"]?></a></td>
                                                <td> <center><a href="newsEdit.php?id=<?=$row["id"]?>" style="margin-right: 20px;" class="btn btn-info" role="button">Edit</a> 
                                                <a href="deleteNews.php?id=<?=$row["id"]?>" class="btn btn-danger" role="button">Delete</a>
                                            </tr>
                                         <?php endwhile; ?>
                                    </tbody>
                               </table>
                       </div>
                  </div>
          </div>
    </section>
<?php $conn->close(); ?>
<?php require_once("footer.html"); ?>
    