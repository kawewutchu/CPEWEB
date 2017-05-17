<?php
  session_start();
if(!isset($_SESSION["ses_userid"]) && empty($_SESSION["ses_userid"])) {
      echo "Please Login to system<br />";
      echo "<a href=loginByAdmin.php>Login</a>";
      exit();
  }
?>  