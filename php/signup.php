<?php 
    $connection = mysqli_connect('localhost','root','','mangatrack');
    $id = $_POST['id'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $checkdata = mysqli_query($connection,"SELECT * FROM userdata WHERE username = '$username'");
    $check = mysqli_num_rows($checkdata);

    if($check >0){
        echo "Username already exists";
    } else{
        $input = mysqli_query($connection,"INSERT INTO userdata(id,username,password) VALUES ('$id','$username','$password')");
        if($input){
            header('Location:http://localhost/mangatrack/track.html');
        } else {
            header('Location:http://localhost/mangatrack/signup.html');
            echo "Error Ocurred";
        }
    }
?>