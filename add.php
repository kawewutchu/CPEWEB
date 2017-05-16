<?php
	$target_dir = "52-59_60/";
	$photo_name = (string)$_POST["studentId"].".jpg";
	$target_file = $target_dir . $photo_name;
	$uploadOk = 1;
	$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
	if(isset($_POST["submit"])) {
	    $check = getimagesize($_FILES["img"]["tmp_name"]);
	    if($check !== false) {
	        echo "File is an image - " . $check["mime"] . ".";
	        $uploadOk = 1;
	    } else {
	        echo "File is not an image.";
	        $uploadOk = 0;
	    }
	}
	// Check if file already exists
	if (file_exists($target_file)) {
	    echo "Sorry, file already exists.";
	    $uploadOk = 0;
	}
	// Check file size
	if ($_FILES["img"]["size"] > 500000) {
	    echo "Sorry, your file is too large.";
	    $uploadOk = 0;
	}
	// Allow certain file formats
	if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"&& $imageFileType != "gif" ) {
	    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
	    $uploadOk = 0;
	}
	// Check if $uploadOk is set to 0 by an error
	if ($uploadOk == 0) {
	    echo "Sorry, your file was not uploaded.";
	// if everything is ok, try to upload file
	} else {
	    if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
	        echo "The file ". basename( $_FILES["img"]["name"]). " has been uploaded.";
	    } else {
	        echo "Sorry, there was an error uploading your file.";
	    }
	}
	
	
	/**************************connect database*********************************/
	
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
	
	if($_POST["year"]==1)
	{
		$sql = "INSERT INTO TABLE_1 (year, name, lastname, nickname, studentId, school, addmission, special, sex, tel, email, line, twitter, facebook)
            VALUES ('".$_POST["year"]."', '".$_POST["name"]."','".$_POST["lastname"]."','".$_POST["nickname"]."','".$_POST["studentId"]."','".$_POST["school"]."','".$_POST["addmission"]."','".$_POST["special"]."','".$_POST["sex"]."','".$_POST["tel"]."','".$_POST["email"]."','".$_POST["line"]."','".$_POST["twitter"]."','".$_POST["facebook"]."')";
	}
	else if($_POST["year"]==2)
	{
		$sql = "INSERT INTO TABLE_2 (year, name, lastname, nickname, studentId, school, addmission, special, sex, tel, email, line, twitter, facebook)
            VALUES ('".$_POST["year"]."', '".$_POST["name"]."','".$_POST["lastname"]."','".$_POST["nickname"]."','".$_POST["studentId"]."','".$_POST["school"]."','".$_POST["addmission"]."','".$_POST["special"]."','".$_POST["sex"]."','".$_POST["tel"]."','".$_POST["email"]."','".$_POST["line"]."','".$_POST["twitter"]."','".$_POST["facebook"]."')";
	}
	else if($_POST["year"]==3)
	{
		$sql = "INSERT INTO TABLE_3 (year, name, lastname, nickname, studentId, school, addmission, special, sex, tel, email, line, twitter, facebook)
            VALUES ('".$_POST["year"]."', '".$_POST["name"]."','".$_POST["lastname"]."','".$_POST["nickname"]."','".$_POST["studentId"]."','".$_POST["school"]."','".$_POST["addmission"]."','".$_POST["special"]."','".$_POST["sex"]."','".$_POST["tel"]."','".$_POST["email"]."','".$_POST["line"]."','".$_POST["twitter"]."','".$_POST["facebook"]."')";
	}
	else if($_POST["year"]==4)
	{
		$sql = "INSERT INTO TABLE_4 (year, name, lastname, nickname, studentId, school, addmission, special, sex, tel, email, line, twitter, facebook)
            VALUES ('".$_POST["year"]."', '".$_POST["name"]."','".$_POST["lastname"]."','".$_POST["nickname"]."','".$_POST["studentId"]."','".$_POST["school"]."','".$_POST["addmission"]."','".$_POST["special"]."','".$_POST["sex"]."','".$_POST["tel"]."','".$_POST["email"]."','".$_POST["line"]."','".$_POST["twitter"]."','".$_POST["facebook"]."')";
	}
	if ($conn->query($sql) === TRUE) {
		header('Location:admin-form.php');
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
	$conn->close();

?>


  
