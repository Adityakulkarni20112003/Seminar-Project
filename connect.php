<?php
$connection = mysqli_connect('localhost','root','','book_db');

    $username = $_POST['username'];
    $email = $_POST['email'];
    $message = $_POST['message']; 
    $request = "insert into book_s(username,email,message)values('$username','$email','$message')";
    mysqli_query($connection,$request);
    header('location:post.php');


?>