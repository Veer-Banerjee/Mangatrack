<?php
    $connection = mysqli_connect('localhost','root','','mangatrack');
    $username = $_POST['username'];
    $password = $_POST['password'];

    $checkdata = mysqli_query($connection,"SELECT * FROM userdata WHERE username = '$username' AND password = '$password'");
    $check = mysqli_num_rows($checkdata);

    if($check > 0){
        header('Location:http://localhost/mangatrack/track.html');
    } else {
        header('Location:http://localhost/mangatrack/login.html');
        echo "No account registered with that username or password";
    }
?>