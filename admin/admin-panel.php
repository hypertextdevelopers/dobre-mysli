<?php

    session_start();

    if( !isset($_SESSION['logged']) || $_SESSION['logged'] != TRUE ){

        header("Location: http://www.dobremysli.eu/admin/error.php"); 

    }

    if( isset($_GET['post_added']) ){

        echo "<script src='../js/added.js'></script>";

    }

?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dobre Myśli | Admin panel</title>
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900|Open+Sans:300,400,600,700,800|Roboto:300,400,500,700,900&amp;subset=latin-ext" rel="stylesheet"> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="../styles/cms-panel.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="../js/src.js"></script>
</head>
<body>
    <div class="dark-layer"></div>
    <div class="wrapper">
        <nav>
            <a href="index.php?logged_out"><button class="btn btn-primary">Wyloguj się</button></a>
            <h1>Witaj Waldek</h1>
        </nav>
        <main>
            <header>
                <h1>Jesteś gotowy do edycji Bloga?</h1>
            </header>
            <div class="main-container">
                <header>
                    <h2>Wypełnij poniższe pola aby utworzyć nowy post</h2>
                </header>
                <form action="../php/create-post.php" method="POST" enctype="multipart/form-data">
                    <input type="text" class="form-control" placeholder="Podaj nagłówek" id="title" name="title" required>
                    <textarea class="form-control" placeholder="Wpisz tekst..." id="content" name="content" required></textarea>
                    <div class="file">
                        <div class="left btn btn-primary" id="file-button">
                            <input type="file" id="file" accept="image/*" name="file" required>
                            <p>Dodaj zdjęcie</p>
                        </div>
                        <div class="right" id="src"></div>
                    </div>
                    <button type="submit" class="btn btn-secondary" id="btn-date">
                        <p>Stwórz post</p>
                    </button>
                </form>
            </div>
        </main>
    </div>
    <div class="alert-added" id="added">
        <h2>Post został dodany</h2>
    </div>
</body>
</html>