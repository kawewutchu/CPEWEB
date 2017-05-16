<?php
	session_start(); 
	echo '<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />';
	$username = $_POST["username"];
	$password = $_POST["password"];
	if($username == "") 
	{  
		echo "Please enter Username";
	} 
	else if($password == "")
	{       
		echo "Please enter Password";
	}
	else
	{               
		include("connect.php");                              
		$check_log = mysql_query("SELECT * FROM Admin WHERE username ='$username' AND password='$password'");                         
		if(mysql_num_rows($check_log) <=0)                                                         
			echo "Invalid Username or Password <br/><a href='loginByAdmin.php'>Back</a>";
	 	else 
	 	{
			while ($data = mysql_fetch_array($check_log) )
			{
				$_SESSION["ses_userid"] = session_id();
				$_SESSION["ses_username"] = $username;
				echo "<meta http-equiv='refresh' content='1;URL=admin-form.php'>";
			}
		}
	}
?>