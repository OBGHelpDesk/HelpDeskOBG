<?php
setcookie('helpdesk_logedin', 0, time() - 3600, "/"); // 86400 = 1 day
setcookie('helpdesk_admin', 0, time() - 3600, "/"); // 86400 = 1 day
header('location: index.php');
die();
?>