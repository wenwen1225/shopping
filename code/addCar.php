<?php
session_start();
if (isset($_GET['page']) && isset($_GET['id'])) {
    $page = $_GET['page'];
    $id = $_GET['id'];
    if (strcmp($page, 'book') == 0) {  
        $book = $_SESSION['book'] ?? array();
        $book[] = $id;
        $_SESSION['book'] = $book;
        #echo "Book added to cart: " . $id;
		header("Location: production.html");
    } else {
        $food = $_SESSION['food'] ?? array();
        $food[] = $id;
        $_SESSION['food'] = $food;
        #echo "Food added to cart: " . $id;
		header("Location: production.html");
    }
} else {
    echo "Error: Missing page or id parameters.";
}
?>
