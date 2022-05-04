<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="logo.ico">
    <title>PixelCore</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <div class="nawigacja">
        <div class="kontenern">


            
            <a class="logo" href="index.php">Pixel<span>Core</span></a>
            
            
            <div class="navi-mobile">
                <ul class="pierwsza-listan-mobile">
                    <li class="list_item"><a class="listani2" href="#">O nas</a></li>
                    <li class="list_item"><a class="listani2" href="ofertyUslug.php">Oferty</a></li>
                    <li class="list_item"><a class="listani2" href="#inf">Kontakt</a></li>
                    <li class="list_item"><a class="listani2"  href="#">Sklep</a></li>
                </ul>
                <ul class="druga-listan-mobile">
                    <li class="logowanie2"><a href="logowanie.php">Zaloguj się</a></li>
                </ul>
                <?php
                    session_start();
                    if((isset($_SESSION['zalogowany'])) && ($_SESSION['zalogowany'] == true)){
                        echo "<p>Witaj ".$_SESSION['user']."!"."<a href='logout.php'> [ Wyloguj się! ] </a>"."</p>";
                        echo "<p>ID ".$_SESSION['id']."</p>";
                    }else{
                        // tu ma być ul z przyciskiem zaloguj.
                    }
                    
                ?>
                    
            </div>
            <button class="hamburger ">
                <span class="hamburger_box" id="mobile-otworz" class="mobile-menu">
                    <span class="hamburger_inner"></span>
                </span>
            </button>
            <script src="main.js"></script>
            <nav>

                <ul class="pierwsza-listan">
                    <li class="jeden"><a class="listani" href="#o-nas">O nas</a></li>
                    <li><a class="listani" href="ofertyUslug.php">Oferty</a></li>
                    <li><a class="listani" href="#inf">Kontakt</a></li>
                </ul>

                <ul class="druga-listan">
                    <li class="logowanie"><a href="logowanie.php" class="listani">Zaloguj się</a></li>
                </ul>
                <?php
                    
                    if((isset($_SESSION['zalogowany'])) && ($_SESSION['zalogowany'] == true)){
                        echo "<p>Witaj ".$_SESSION['user']."!"."<a href='logout.php'> [ Wyloguj się! ] </a>"."</p>";
                        echo "<p>ID ".$_SESSION['id']."</p>";
                    }else{
                        
                    }
                    
                ?>
            </nav>
        </div>
    </div>

    <section class="glowny">
        <div class="kontenerp">
            <div class="kolumna-logo" >
                <img class="logo" src="logo.png" alt="Logo Firmy">

                <div class="o-firmie" >
                    <h2 class="misja-firmy" id="o-nas">Misja Firmy</h2>
                    <p class="misja-firmy-tresc">Misją PixelCore jest świadczenie usług na najwyższym poziomie oraz obsługi klientów przez dobrze wykwalifikowaną kadrę pracowników. Nasza firma stawia na rozwój umiejętności swoich pracowników. Dzięki różnorodnym szkoleniom jesteśmy w stanie zagwarantować ciągłe poszerzanie swoich umiejętności. Dbamy również o naszych klientów, którym służymy fachową radą i pomocą.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="wszystko">
        <section class="oferty-firmy">
            <div class="kontenero">
                <h2 class="uslugi">Nasze Usługi</h2>
                <div class="lista-ofert">
                    <img class="loiz" src="instalowaniesterownikow.svg" alt="Instalowanie Sterowników">
    
                        <h3 class="nazwa-oferty">Instalowanie Sterowników:</h3>

                        <blockquote>
                            Cena: 40 PLN
                            <br>
                            Rabat: 0 PLN
                        </blockquote>

                </div>

                <div class="lista-ofert">
                    <img class="loiz" src="iso.svg" alt="Instalowanie Systemu Operacyjnego">
                        
                        <h3 class="nazwa-oferty">Instalowanie Systemu Operacyjnego:</h3>

                        <blockquote>
                            Cena: 128 PLN
                            <br>
                            Rabat: 7 PLN
                        </blockquote>
                        
                </div>

                <div class="lista-ofert">
                    <img class="loiz" src="uno.svg" alt="Usuwanie Niechcianego Oprogramowania">
                        
                        <h3 class="nazwa-oferty">Usuwanie Niechcianego Oprogramowania:</h3>

                        <blockquote>
                            Cena: 51 PLN
                            <br>
                            Rabat: 0 PLN
                        </blockquote>
                        
                </div>
                <button class="wiecej-ofert" type="button"><a class="wiecej-ofertp" href="ofertyUslug.php">Więcej Ofert</a></button>
            </div>
        </section>
        
        <section class="stopka" id="inf">
            <div class="kontenerk">
                <div class="informacje">
                    <h2 class="dni-otwarcia">Godziny Otwarcia</h2>
    
                    <ul class="godz-otwarcia">
                        <li class="gol">Poniedziałek - Piątek: 9:00 - 17:00</li>
                        <li class="gol">Sobota - Niedziela: 10:00 - 17:00</li>
                    </ul>
    
                    <h2 class="kontakt">Kontakt</h2>
    
                    <ul class="mozliwos-kontaktu">
                        <li class="mkl">Tel: 000 000 000</li>
                        <li class="mkl">E-mail: PixelCore@pk.pl</li>
                    </ul>

                    <h2 class="komentarze">Komentarze</h2>
    
                    <form action="POST">
    
                        <label for="wiadomosc">Wyślij do Nas komentarz:</label>
                        <textarea name="wiadomosc" id="wiadomosc" cols="30" rows="10"></textarea>
    
                        <input class="przycisk" type="submit" class="wyslij-komentarz" value="Wyślij">
                    </form>
                </div>
            </div>
        </section>
    </section>

</body>
</html>