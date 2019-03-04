<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dobre Myśli | Kontakt</title>
    <link href="../styles/large-contact.css" rel="stylesheet">
    <link href="../styles/medium-contact.css" rel="stylesheet">
    <link href="../styles/small-contact.css" rel="stylesheet">
    <link href="../styles/extra-small-contact.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900|Open+Sans:300,400,600,700,800|Roboto:300,400,500,700,900&amp;subset=latin-ext" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="../js/contact-elements-controller.js"></script>
    <script src="../js/send-message.js"></script>
</head>
<body>
    <div class="wrapper" id="contact-wrapper">
        <nav>
            <ul>
                <a href="../">
                    <li><span class="border-bottom border-home"></span>Strona główna</li>
                </a>
                <a href="../o-mnie">
                    <li><span class="border-bottom border-about"></span>O mnie</li>
                </a>
                <a href="../terapia">
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
                <a href="">
                    <li><span class="border-bottom border-contact"></span>Kontakt</li>
                </a>
            </ul>
        </nav>
        <div class="contact-header" id="contact-header">
            <header>
                <h1>Kontakt</h1>
                <i class="fas fa-angle-down" id="arrow_down"></i>
            </header>
        </div>
        <div class="dark-layer"></div>
    </div>
    <div class="contact-perf">
        <div class="contact-text-main" id="contact-text-main">
            <div class="contact-container">
                <header>
                    <h2>Skontaktuj się ze mną</h2>
                </header>
                <div class="data-box">
                    <div class="datas">
                        <div class="icon-box">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div class="content">
                            <h4>NUMERY Kontaktowe</h4>
                            <p>+48 123456789</p>
                            <p>+48 987654321</p>
                        </div>
                    </div>
                    <div class="datas">
                    <div class="icon-box">
                        <i class="fas fa-at"></i>
                        </div>
                        <div class="content">
                            <h4>ADRES E-MAIL</h4>
                            <p>test@wp.pl</p>
                            <p>test2@onet.pl</p>
                        </div>
                    </div>
                </div>
                <form action="" method="POST" id="form">
                    <div class="inputs" id="inputs">
                        <input type="text" id="inp_name" placeholder="Podaj imię">
                        <input type="text" id="inp_lastname" placeholder="Podaj nazwisko">
                        <input type="email" id="inp_email" placeholder="Podaj adres e-mail">
                    </div>
                    <textarea id="textarea" placeholder="Wprowadź wiadomość..."></textarea>
                    <button type="button" id="message_button">Wyślij</button>
                    <div class="alert" id="alert">
                        <h2>Dziękuję za kontakt ze mną, postaram się odpowiedzieć jak najszybciej :)</h2>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="contact-main">
        <div class="dark-layer"></div>
        <footer>
            <p>© 2019 Dobre Myśli - Wszelkie prawa zastrzeżone</p>
        </footer>
    </div>
</body>
</html>