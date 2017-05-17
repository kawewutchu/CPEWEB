<?php
	$conn = mysqli_connect("localhost", "root", "", "phpbasic");
	mysqli_set_charset($conn, "utf8");
	// Check connection
	if(!empty($_FILES["img"]["name"])) {
	    $target_dir = "52-59_60/";
		$_Photo_name = (string)$_POST["studentId"].".jpg";
		$target_file = $target_dir . $_Photo_name;
	  	unlink($target_file);
	  	move_uploaded_file($_FILES["img"]["tmp_name"], $target_file);
	}
	if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());
	}
	$sql = "UPDATE TABLE_1 SET name='".$_POST['name']."',lastname='".$_POST['lastname']."',nickname='".$_POST['nickname']."',studentId='".$_POST['studentId']."',school='".$_POST['school']."',special='".$_POST['special']."',tel='".$_POST['tel']."',email='".$_POST['email']."',line='".$_POST['line']."',twitter='".$_POST['twitter']."',facebook='".$_POST['facebook']."' WHERE studentId = '".$_POST["studentId"]."'";

	if (mysqli_query($conn, $sql)) {
	    echo "Record updated successfully";
	} else {
	    echo "Error updating record: " . mysqli_error($conn);
	}
	mysqli_close($conn);
	echo "<meta http-equiv='refresh' content='1;URL=adminformStudent1.php'>";
?>