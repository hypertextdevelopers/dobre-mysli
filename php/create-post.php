<?php

    include 'database_connection.php';

    $title = $_POST['title'];
    $content = $_POST['content'];
    
    $file_tmp = $_FILES['file']['tmp_name'];
    $name = $_FILES['file']['name'];

    $rl_path = '../zdjecia_do_bloga/'.$name;

    $migraion_rsl = move_uploaded_file($file_tmp, '../zdjecia_do_bloga/'.$name);
    $date = date("d.m.Y H:i");

    $push_query = "INSERT INTO posts VALUES('', '$title', '$content','$date', '$rl_path')";

    $rsl = $conn -> query($push_query);

    if($rsl){

        header("Location: http://www.dobremysli.eu/admin/admin-panel.php?post_added");

    }  
  
?>