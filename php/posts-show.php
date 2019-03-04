<?php

    include 'database_connection.php';

    $post_query = "SELECT * FROM posts ORDER BY ID desc";

    $rsl = $conn -> query($post_query);

    if($rsl -> num_rows > 0){

        while($row = $rsl -> fetch_assoc()){

            echo '<li>
                    <div class="dot">
                        <i class="fas fa-circle"></i>
                    </div>
                    <div class="post-content">
                        <header>
                            <h3>'.$row['title'].'</h3>
                        </header>
                        <p class="text">'.$row['content'].'</p>
                        <p class="date">'.$row['date'].'</p>
                    </div>
                    <img class="image-post" src='.$row['src'].'>
                </li>';

        }

    }else{

        echo '<li>
                <div class="post-content">
                    <header class="ul-empty">
                        <h3>Brak postów</h3>
                    </header>
                </div>
            </li>';

    }

?>