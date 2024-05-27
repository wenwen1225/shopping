<?php

session_start();
echo "<p style=\"text-align: center; font-size: 24px;\">Login success</br>";
echo "<a href=\"production.html\">進入產品類別頁</a></p>";

$num= $_POST['num'];
$_SESSION['num'] = $num;

?>