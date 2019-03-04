<?php

    include 'database_connection.php';

    $content = $_POST['content'];
    
    $query_review = "INSERT INTO reviews VALUES( '', '$content' )";
    
    $add_review = $conn -> query($query_review);

    if($add_review){
        
        echo "<li>".$content."</li>";

    }

?>