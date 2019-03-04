<?php

    include 'database_connection.php';

    $reviews_show = "SELECT * FROM reviews ORDER BY ID ASC";

    $rsl = $conn -> query($reviews_show);

    while($row = $rsl -> fetch_assoc()){

        echo "<li>".$row['review']."</li>";

    }

?>