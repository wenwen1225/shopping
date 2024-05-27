<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>結帳頁面</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<?php
	header("Content-Type:text/html; charset=utf-8");
    session_start();
          
    $total = $_SESSION['total'];
    $orderNumber = date('Ymdhm') . rand(10, 99);

    echo "<p style=\"text-align: center; font-size: 35px; font-weight: bold;\">感謝您的購買，期待您再次光臨</br></p>";
    echo "<p style=\"text-align: center; font-size: 35px; font-weight: bold;\">您的訂單編號為：<span style='color:red;'>$orderNumber</span></br>";
    echo "購買總金額為：<span style='color:blue;'>$total</span> </br></p>";
    echo "<br>";
    echo "<a href=\"production.html\">回購物畫面</a>";

    session_destroy();

?>