<?php
session_start();
session_destroy();
header('Location: ../main_page/index.php?page=login');
exit;


?>