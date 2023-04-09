<?php 

include "connection.php";

if(isset($_GET['delete_id'])){
    $book_id = $_GET['delete_id'];
    $sql = "DELETE FROM `library` WHERE `book_id` = '$book_id'";
    $result = mysqli_query($conn, $sql);
    if($result){
        echo "<script>alert('Book Deleted'); window.location.href= 'library.php';</script>";
    }
    else{
        echo "<script>alert('Cannot Delete Book');
        window.location.href= 'library.php#update_books';</script>";
    }
}

?>