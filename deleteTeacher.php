<?php	
	$conn = mysqli_connect("localhost", "root", "","phpbasic");
  $sql = mysqli_query($conn,"DELETE FROM TABLE_6 WHERE id = '".$_GET["id"]."'" );
  if(! $sql ) {
        die('Could not delete data: ' . mysqli_error($conn));
  }
  // $target_dir = "Staff/";
  // $filename=(string)$_GET["id"];
  // unlink($target_dir.$filename.".jpg");
  echo "Deleted data successfully\n";
  mysqli_close($conn);
  echo "<meta http-equiv='refresh' content='1;URL=adminformAcademic.php'>";
?>