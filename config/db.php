<?php
$conn = mysqli_connect("127.0.0.1", "root", "", "arsenal_db_master");
$_SESSION['connection'] = $conn;
mysqli_set_charset($_SESSION['connection'], "utf8");
