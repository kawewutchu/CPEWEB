 <?php

  require_once("checkLoggedIn.php");
  $ses_userid = $_SESSION["ses_userid"];         
  $ses_username = $_SESSION["ses_username"]; 
  if($ses_userid <> session_id() or $ses_username =="")
  {
      echo "Please Login to system<br />";
      echo "<a href=loginByAdmin.php>Login</a>";
      exit();
  }
  else
  {
      require_once("adminForm.php");
  }
?>
 