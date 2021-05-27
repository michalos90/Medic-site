<?php
error_reporting(0);
session_start();
  $_SESSION[p_login_is_true] =null;
  $_SESSION[pacjentid] =null;
$_SESSION[adminlogin]=null;
echo " <script type='text/javascript'>";
echo "location.href='index.php'";
echo "</script>";
?>
