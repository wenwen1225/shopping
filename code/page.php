<?php
$page = $_POST['choice'];

if($page == "food"){
    // $book = $_SESSION['book'];
    // if(!isset($book))
    //     $book = array();
    // $book[] = $id;
    // $_SESSION['book']=$book;
    header("Location:food.php");
}
elseif ($page =="book") {
    // $food = $_SESSION['food'];
    // if(!isset($food))
    //     $food = array();
    // $food[] = $id;
    // $_SESSION['food'] = $food;
    header("Location:book.php");
}
?>