<?php	
	$conn = mysqli_connect("localhost", "root", "","phpbasic");
  $sql = mysqli_query($conn,"DELETE FROM TABLE_4 WHERE studentId = '".$_GET["studentId"]."'" );
  if(! $sql ) {
        die('Could not delete data: ' . mysqli_error($conn));
  }
   $target_dir = "52-59_60/";
  $filename=(string)$_GET["studentId"];
  unlink($target_dir.$filename.".jpg");
  echo "Deleted data successfully\n";
  mysqli_close($conn);
  echo "<meta http-equiv='refresh' content='1;URL=adminformStudent4.php'>";
?>