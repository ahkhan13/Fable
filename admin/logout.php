<?php
include 'config.php';
session_start();
session_unset();
session_destroy();
header("Location: http://{$host}/news/index.php");
?>
