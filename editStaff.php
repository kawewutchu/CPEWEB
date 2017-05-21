<?php
	$conn = mysqli_connect("localhost", "root", "", "phpbasic");
	mysqli_set_charset($conn, "utf8");
	// Check connection
	if(!empty($_FILES["img"]["name"])) {
	    $target_dir = "Staff/";
		$_Photo_name = (string)$_POST["id"].".jpg";
		$target_file = $target_dir . $_Photo_name;
	  	unlink($target_file);
	  	move_uploaded_file($_FILES["img"]["tmp_name"], $target_file);
	}
	if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());
	}
	$sql = "UPDATE TABLE_7 SET job='".$_POST['job']."',name='".$_POST['name']."',role='".$_POST['role']."',education='".$_POST['education']."',email='".$_POST['email']."' WHERE id = '".$_POST["id"]."'";
	if (mysqli_query($conn, $sql)) {
	    echo "Record updated successfully";
	} else {
	    echo "Error updating record: " . mysqli_error($conn);
	}
	mysqli_close($conn);
	echo "<meta http-equiv='refresh' content='1;URL=adminformStaff.php'>"; //<--- CHECK URL !!!!!!!!!!
?>