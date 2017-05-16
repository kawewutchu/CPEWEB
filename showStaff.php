
<?php require_once("header.html"); ?> 
 <div class="medical-breadcrumb">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h2>Year 2nd</h2>
                    </div>
                </div>
            </div>
</div><!--breadcrumb-->
<div class="divide70"></div>

<?php

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
	
	$sql = "SELECT * FROM TABLE_7";
	$result = $conn->query($sql);
	
?>

     <section>
     <div class="container">
            <div class="row">
                <div class="col-md-12 margin-btm-40">
                    <div class="row">
                            <?php while($row = $result->fetch_assoc()): ?>
                            <div class="col-sm-4 margin-btm-30 staff">
                                <tr>
                                  <center>
                                   <a href="staffProfile.php?id=<?=$row["id"]?>">
                                    <img src="Staff/<?echo($row["id"])?>.jpg" class="img-responsive" alt="">
                                    <h4></h4>
                                      <p style="font-size: 20px;  "><?=$row["name"]?> </p></a>
                                    <p style="margin-top: -20px;"><?=$row["job"]?></p>
                                    <h4></h4>
                                  </center>
                                 </tr>
                              </div>
                            <?php endwhile; ?>
    </section>
<?php $conn->close(); ?>

<?php require_once("footer.html"); ?> 


    