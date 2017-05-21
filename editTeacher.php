<?php
	$conn = mysqli_connect("localhost", "root", "", "phpbasic");
	mysqli_set_charset($conn, "utf8");
	// Check connection
	if(!empty($_FILES["img"]["name"])) {
	    $target_dir = "Prof/";
		$_Photo_name = (string)$_POST["id"].".jpg";
		$target_file = $target_dir . $_Photo_name;
	  	unlink($target_file);
	  	move_uploaded_file($_FILES["img"]["tmp_name"], $target_file);
	}
	if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());
	}
	$sql = "UPDATE TABLE_6 SET name='".$_POST['name']."',englishName='".$_POST['englishName']."',workplace='".$_POST['workplace']."',room='".$_POST['room']."',phone='".$_POST['phone']."',email='".$_POST['email']."',personalPage='".$_POST['personalPage']."',re_group='".$_POST['re_group']."',fax='".$_POST['fax']."',researchInterests='".$_POST['researchInterests']."',education='".$_POST['education']."',pastGraduation='".$_POST['pastGraduation']."',workExperience='".$_POST['workExperience']."' WHERE id = '".$_POST["id"]."'";
	if (mysqli_query($conn, $sql)) {
	    echo "Record updated successfully";
	} else {
	    echo "Error updating record: " . mysqli_error($conn);
	}
	mysqli_close($conn);

	header("Location: adminformAcademic.php")
	//echo "<meta http-equiv='refresh' content='1;URL=adminformAcademic.php'>"; //<------CHECK URL!!!
?>