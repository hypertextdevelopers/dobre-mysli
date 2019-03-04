<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dobre Myśli | Terapia</title>
    <link href="../styles/large-terapy.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900|Open+Sans:300,400,600,700,800|Roboto:300,400,500,700,900&amp;subset=latin-ext" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="../js/terapy-elements-controller.js"></script>
    <script src="../js/review-controller.js"></script>
</head>
<body>
    <div class="wrapper" id="terapy-wrapper">
        <nav>
            <ul>
                <a href="../">
                    <li><span class="border-bottom border-home"></span>Strona główna</li>
                </a>
                <a href="../o-mnie">
                    <li><span class="border-bottom border-about"></span>O mnie</li>
                </a>
                <a href="">
                    <li class="active"><span class="border-bottom border-terapy"></span>Psychoterapia</li>
                </a>
                <a href="../myśli">
                    <li><span class="border-bottom border-thoughts"></span>Dobre myśli</li>
                </a>
                <a href="../wino">
                    <li><span class="border-bottom border-vine"></span>Wino</li>
                </a>
                <a href="../blog">
                    <li><span class="border-bottom border-blog"></span>Blog</li>
                </a>
                <a href="https://plus.google.com/100928644371242007629" target="_blank">
                    <li><span class="border-bottom border-gallery"></span>Galeria</li>
                </a>
                <a href="../kontakt">
                    <li><span class="border-bottom border-contact"></span>Kontakt</li>
                </a>
            </ul>
        </nav>
        <div class="terapy-header" id="terapy-header">
            <header>
                <h1>Psychoterapia systemowa</h1>
                <i class="fas fa-angle-down" id="arrow_down"></i>
            </header>
        </div>
        <div class="dark-layer"></div>
    </div>
    <div class="terapy-perf">
        <div class="terapy-text-main" id="terapy-text-main"></div>
    </div>
    <div class="review-main">
        <div class="review-box">
            <header>
                <h1>Opinie</h1>
            </header>
            <div class="review-controller">
                <textarea  placeholder="Napisz swoją opinię..." id="review-text"></textarea>
                <button type="button" id="review-btn">Dodaj opinię</button>
            </div>
            <div class="reviews">
                <ul id="review-ul"></ul>
            </div>
        </div>
        <div class="dark-layer"></div>
        <footer>
            <p>© 2019 Dobre Myśli - Wszelkie prawa zastrzeżone</p>
        </footer>
    </div>
</body>
</html>