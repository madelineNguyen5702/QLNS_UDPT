<?php
session_start();
session_destroy();
header('Location: /QLNS/public/index.php');
exit();
?>
