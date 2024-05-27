<!DOCTYPE html>
<html lang="zh-Hant">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>清單頁面</title>
<style>
    table {
        margin: 0 auto;
        text-align: center;
        border: 1px solid #000;
        width: 30%;
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
<body>
<?php
session_start();
$num = $_SESSION['num'];

if (!isset($num)) {
    header("Location:login.html");
} else {
    $bookFile = '../word/book.txt';
    $foodFile = '../word/food.txt';

    $totalBill = 0;

    echo "<p style=\"font-size:30px;text-align:center;\">感謝您的購買，您的購買清單如下：</p>";
    echo "<table border=1><tr><th>項次</th><th>產品編號</th><th>產品名稱</th><th>售價</th>";
    $index = 1;

    // book
    if (isset($_SESSION['book'])) {
        $bookItems = $_SESSION['book'];
        $bookLines = file($bookFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        if ($bookLines !== false) {
            foreach ($bookItems as $item) {
                foreach ($bookLines as $line) {
                    $columns = explode(',', $line);
                    if ($item == $columns[0]) {
                        echo "<tr><td>$index</td>";
                        foreach ($columns as $col) {
                            echo "<td>$col</td>";
                        }
                        echo "</tr>";
                        $totalBill += $columns[2];
                        $index++;
                        break;
                    }
                }
            }
        } else {
            echo "<p class=\"center\">無法讀取書籍資訊。</p>";
        }
    }

    // food
    if (isset($_SESSION['food'])) {
        $foodItems = $_SESSION['food'];
        $foodLines = file($foodFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        if ($foodLines !== false) {
            foreach ($foodItems as $item) {
                foreach ($foodLines as $line) {
                    $columns = explode(',', $line);
                    if ($item == $columns[0]) {
                        echo "<tr><td>$index</td>";
                        foreach ($columns as $col) {
                            echo "<td>$col</td>";
                        }
                        echo "</tr>";
                        $totalBill += $columns[2];
                        $index++;
                        break;
                    }
                }
            }
        } else {
            echo "<p class=\"center\">無法讀取食品資訊。</p>";
        }
    }

    echo "</table>";

    echo "<p style=\"font-size:20px;text-align:center;\">總計： $totalBill 元</p>";
    echo "<a href=\"checkout.php\">確認結帳</a></p>";

    $_SESSION['total'] = $totalBill;
}
?>
</body>
</html>
