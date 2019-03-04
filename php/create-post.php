<?php

    include 'database_connection.php';

    $title = $_POST['title'];
    $content = $_POST['content'];
    
    $file_tmp = $_FILES['file']['tmp_name'];
    $name = $_FILES['file']['name'];

    $rl_path = '../zdjecia_do_bloga/'.$name;

    $migraion_rsl = move_uploaded_file($file_tmp, '../zdjecia_do_bloga/'.$name);
    $date = date("d.m.Y");

    $push_query = "INSERT INTO posts VALUES('', '$title', '$content','$date', '$rl_path')";

    $rsl = $conn -> query($push_query);

    if($rsl){

        header("Location: http://localhost/portfolio/DobreMysli/YYFA7pliZH2XfY2S0ghEpccrw3VhAQEmE7LAmUIc/admin-panel.php?post_added");

    }  
  
?>