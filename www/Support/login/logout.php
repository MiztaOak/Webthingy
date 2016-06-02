<?php

//loggar ut användaren och skickar dem till login sidan
session_start();
session_destroy();
header('Location: ../index.php?page=login');
exit;
?>