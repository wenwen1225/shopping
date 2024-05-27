<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>結帳頁面</title>
<style>
        table {
            margin: 0 auto;
            text-align: center;
            border: 1px solid #000;
            width: 20%;
            border-collapse: collapse;
        }

        td {
            border: 1px solid #000;
        }

        td:first-child {
            border-left: none;
        }

        td:last-child {
            border-right: none;
        }

        tr:last-child td {
            border-bottom: none;
        }

        tr:first-child td {
            border-top: none;
        }
        a{
            text-align: center;
            display: block;
        }
    </style>
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