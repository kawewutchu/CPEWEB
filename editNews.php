<?php
	$conn = mysqli_connect("localhost", "root", "", "phpbasic");
	mysqli_set_charset($conn, "utf8");
	// Check connection
	if(!empty($_FILES["img"]["name"])) {
	    $target_dir = "img/";
		$_Photo_name = (string)$_POST["id"].".jpg";
		$target_file = $target_dir . $_Photo_name;
	  	unlink($target_file);
	  	move_uploaded_file($_FILES["img"]["tmp_name"], $target_file);
	}
	if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());
	}
	$sql = "UPDATE news_table SET title='".$_POST['title']."',title_show='".$_POST['title_show']."',detail='".$_POST['detail']."',detail_show='".$_POST['detail_show']."' WHERE id = '".$_POST["id"]."'";
	if (mysqli_query($conn, $sql)) {
	    echo "Record updated successfully";
	} else {
	    echo "Error updating record: " . mysqli_error($conn);
	}
	mysqli_close($conn);
	echo "<meta http-equiv='refresh' content='1;URL=adminformNews.php'>"; // <----------CHECK URL !!!!!!!!!!!!!
?>