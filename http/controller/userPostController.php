<?php
session_start();
echo $_SESSION['UserPost']="Set User Post";
header('Location: ../../index.php');
