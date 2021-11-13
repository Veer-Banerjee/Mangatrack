<?php 
    $connection = mysqli_connect('localhost','root','','mangatrack');
    $id = $_POST['id'];
    $title = $_POST['title'];
    $description = $_POST['description'];

    $input = mysqli_query($connection,"INSERT INTO mangadata(id,title,description) VALUES ('$id','$title','$description')");
    if($input){
        header('Location:http://localhost/mangatrack/track.html');
    } else {
        header('Location:http://localhost/mangatrack/login.html');
    }
?>