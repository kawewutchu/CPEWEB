<?php




	/**********************image upload***********************/
	$target_dir = "img/";
	$target_file = $target_dir . basename($_FILES["img"]["name"]);
	$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
	
	/*************************ตรวจสอบว่าเป็น file ที่ upload เป็นรูปภาพ***********************************/
	if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    	echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    	exit(1);
    } else {
    /*******************************ตรวจสอบว่า upload file สำเร็จหรือไม่********************************/
		if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
			//echo "The file ". basename( $_FILES["image"]["name"]). " has been uploaded.";
		} else {
			echo "Sorry, there was an error uploading your file.";
			exit(1);
		}
}
	/**********************end image upload**********************/
	
	
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
	
//	$computerLanguage = implode(",", $_POST["computerLanguage"]); //เปลี่ยน array เป็น String โดยเชื่อมแต่ละตัวด้วย ","

	$sql = "INSERT INTO `TABLE_7` (job, name, role, education, email, img)
            VALUES ('".$_POST["job"]."', '".$_POST["name"]."','".$_POST["role"]."','".$_POST["education"]."','".$_POST["email"]."','".$target_file."')";

	if ($conn->query($sql) === TRUE) {
		header('Location:adminformStaff.php');
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
	$conn->close();

?>


  
