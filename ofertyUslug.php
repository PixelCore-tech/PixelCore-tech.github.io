<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="logo.ico">
        <title>PixelCore</title>
    <link rel="stylesheet" href="stylOfert.css">
</head>
<body>
    <div class="nawigacja">
        <div class="kontenern">
            <a class="logo" href="index.php">Pixel<span>Core</span></a>
            <nav>
                <div class="dropdown">
                <a href="#"><b>Kategorie<span> Ofert</span></b></a>
                <ul>
                    <li class="lista"><a href="#NaprawaOprogramowania">Naprawa Oprogramowania</a></li>
                    <li class="lista"><a href="#StronyWWW">Strony WWW</a></li>
                    <li class="lista"><a href="#NaprawaLaptopów">Naprawa Laptopów</a></li>
                </ul>
            </div>
            </nav>
            <ul class="druga-listan">
                <li class="logowanie"><a href="logowanie.php" class="listani">Zaloguj się</a></li>
            </ul>
            <?php
                    session_start();
                    if((isset($_SESSION['zalogowany'])) && ($_SESSION['zalogowany'] == true)){
                        echo "<p>Witaj ".$_SESSION['user']."!"."<a href='logout.php'> [ Wyloguj się! ] </a>"."</p>";
                        echo "<p>ID ".$_SESSION['id']."</p>";
                    }else{
                        
                    }
                    
                ?>
        </div>
    </div>
    <section class="wszystko">
        <h2 id="NaprawaOprogramowania" class="dostepne-oferty">Naprawa <span>Oprogramowania</span></h2>
        <!-- pierwsza oferta -->
        <div class="niebieskie-tło">
            <div class="lista-ofert" class="lista-ofert-inf" id="pierwsza-oferta">
                <div class="zdj-w-liscie-ofert">
                    <img class="loz" src="instalowaniesterownikow.svg" alt="Instalowanie Sterowników">
                </div>
                <hr> 
                <div class="nazwa-w-liscie-ofert">
                    <h3 class="nazwa-oferty">Instalowanie Sterowinków</h3>
                </div>
                <blockquote>
                Cena: <br>
                40 PLN
                <br><br>
                Rabat: <br>
                0 PLN
                </blockquote>
                <div class="stopka-w-ofertach">
                        <a class="strzałka" href="index.php">></a>
                </div>
            </div>
            <!-- druga-oferta -->
            <div class="lista-ofert" class="lista-ofert-inf" id="druga-oferta">
                <div class="zdj-w-liscie-ofert">
                    <img class="loz" src="iso.svg" alt="Instalowanie Systemu Operacyjnego">
                </div><hr> <div class="nazwa-w-liscie-ofert">
                    
                    <h3 class="nazwa-oferty">  Instalacja Systemu Operacyjnego</h3>
                </div>
                    <blockquote>
                        
                    Cena: <br>
                         128 PLN
                         <br><br>
                    Rabat: <br>
                         7 PLN
                    </blockquote>
                    <div class="stopka-w-ofertach">
                        <a class="strzałka" href="index.php">></a>
                </div>
            </div>
            <!--trzecia-oferta -->
            <div class="lista-ofert" class="lista-ofert-inf" id="trzecia-oferta">
                <div class="zdj-w-liscie-ofert">
                    <img class="loz" src="ksoir.svg" alt="Konfiguracja Sieci oraz Instalacja Routera">
                </div><hr><div class="nazwa-w-liscie-ofert">
                    <h3 class="nazwa-oferty">Konfiguracja Sieci oraz Instalacja Routera</h3>
                </div>
                    <blockquote>
                        
                    Cena: <br>
                        80 PLN
                        <br><br>
                    Rabat: <br>
                        0 PLN
                    </blockquote>
                    <div class="stopka-w-ofertach">
                        <a class="strzałka" href="index.php">></a>
                </div>
            </div>
            <!-- czwarta-oferta -->
            <div class="lista-ofert" class="lista-ofert-inf" id="czwarta-oferta">
                <div class="zdj-w-liscie-ofert">
                <img class="loz" src="odus.svg" alt="Odzyskiwanie Danych Uszkodzonych Systemowo">
            </div><hr><div class="nazwa-w-liscie-ofert">
                    <h3 class="nazwa-oferty"> Odzyskiwanie Danych Uszkodzonych Systemowo</h3>
                </div>
                    <blockquote>
                        
                        Cena: <br>
                         190 PLN
                         <br><br>
                         Rabat: <br>
                         10 PLN
                    </blockquote>
                    <div class="stopka-w-ofertach">
                        <a class="strzałka" href="index.php">></a>
                </div>
            </div>
            <!-- piąta-oferta -->
            <div class="lista-ofert" class="lista-ofert-inf" id="piąta-oferta">
                <div class="zdj-w-liscie-ofert">
                <img class="loz" src="ok.svg" alt="Optymalizacja Komputera">
            </div><hr><div class="nazwa-w-liscie-ofert">
                    <h3 class="nazwa-oferty">  Optymalizacja Komputera</h3>
                </div>
                    <blockquote>
                        
                         Cena: <br>
                        100 PLN
                         <br><br>
                         Rabat: <br>
                        10 PLN
                     </blockquote>
                     <div class="stopka-w-ofertach">
                        <a class="strzałka" href="index.php">></a>
                </div>
            </div>
            <!-- szósta-oferta -->
            <div class="lista-ofert" class="lista-ofert-inf" id="szósta-oferta">
                <div class="zdj-w-liscie-ofert">
                <img class="loz" src="uno.svg" alt="Usuwanie Niechcianego Oprogramowania">
            </div><hr><div class="nazwa-w-liscie-ofert">
                     <h3 class="nazwa-oferty">  Usuwanie Niechcianego Oprogramowania</h3>
                </div>
                     <blockquote>
                        
                        Cena: <br>
                         51 PLN
                         <br><br>
                         Rabat: <br>
                         0 PLN
                     </blockquote>
                     <div class="stopka-w-ofertach">
                        <a class="strzałka" href="index.php">></a>
                </div>
            </div>
        </div>
        <h2 id="StronyWWW"class="dostepne-oferty">Strony <span>WWW</span></h2>
       <div class="niebieskie-tło">
             <!--siódma-oferta-->
        <div class="lista-ofert" class="lista-ofert-www" id="siódma-oferta">
            <div class="zdj-w-liscie-ofert">
            <img class="loz" src="asw.svg" alt="Administrowanie Stroną WWW">
        </div><hr><div class="nazwa-w-liscie-ofert">
                 <h3 class="nazwa-oferty">  Administrowanie Stroną WWW</h3>
            </div>
                 <blockquote>
                    
                    Cena: <br>
                     252 PLN
                     <br><br>
                     Rabat: <br>
                     0 PLN
                 </blockquote>
                 <div class="stopka-w-ofertach">
                    <a class="strzałka" href="index.php">></a>
            </div>
        </div>
        <!--ósma-oferta-->
        <div class="lista-ofert" class="lista-ofert-www" id="ósma-oferta">
            <div class="zdj-w-liscie-ofert">
            <img class="loz" src="wsww.svg" alt="Wykonywanie Strony WWW Wizytówki">
        </div><hr><div class="nazwa-w-liscie-ofert">
                 <h3 class="nazwa-oferty">Wykonywanie Strony WWW Wizytówki</h3>
            </div>
                 <blockquote>
                    
                    Cena: <br>
                     500 PLN
                     <br><br>
                     Rabat: <br>
                     0 PLN
                 </blockquote>
                 <div class="stopka-w-ofertach">
                    <a class="strzałka" href="index.php">></a>
            </div>
        </div>
        <!--dziewiąta-oferta-->
        <div class="lista-ofert" class="lista-ofert-www" id="dziewiąta-oferta">
            <div class="zdj-w-liscie-ofert">
            <img class="loz" src="wswzc.svg" alt="Wykonywanie Strony WWW z CMS">
        </div><hr><div class="nazwa-w-liscie-ofert">
                 <h3 class="nazwa-oferty">Wykonywanie Strony WWW z CMS</h3>
            </div>
                 <blockquote>
                    
                    Cena: <br>
                     2150 PLN
                     <br><br>
                     Rabat: <br>
                     150 PLN
                 </blockquote>
                 <div class="stopka-w-ofertach">
                    <a class="strzałka" href="index.php">></a>
            </div>
        </div>
        </div>
        <h2 id="NaprawaLaptopów" class="dostepne-oferty">Naprawa <span>Laptopów</span></h2>
       <div class="niebieskie-tło">
             <!--dziesiąta-oferta-->
        <div class="lista-ofert" class="lista-ofert-www" id="dziesiąta-oferta">
            <div class="zdj-w-liscie-ofert">
            <img class="loz" src="cl.svg" alt="Czyszczenie Laptopów">
        </div><hr><div class="nazwa-w-liscie-ofert">
                 <h3 class="nazwa-oferty">Czyszczenie Laptopów</h3>
            </div>
                 <blockquote>
                    
                    Cena: <br>
                     135 PLN
                     <br><br>
                     Rabat: <br>
                     15 PLN
                 </blockquote>
                 <div class="stopka-w-ofertach">
                    <a class="strzałka" href="index.php">></a>
            </div>
        </div>
        <!--jedenasta-oferta-->
        <div class="lista-ofert" class="lista-ofert-www" id="jedenasta-oferta">
            <div class="zdj-w-liscie-ofert">
            <img class="loz" src="nlpz.svg" alt="Naprawa Laptopa po Zalaniu">
        </div><hr><div class="nazwa-w-liscie-ofert">
                 <h3 class="nazwa-oferty">Naprawa Laptopa po Zalaniu</h3>
            </div>
                 <blockquote>
                    
                    Cena: <br>
                     250 PLN
                     <br><br>
                     Rabat: <br>
                     0 PLN
                 </blockquote>
                 <div class="stopka-w-ofertach">
                    <a class="strzałka" href="index.php">></a>
            </div>
        </div>
        <!--dwónasta-oferta-->
        <div class="lista-ofert" class="lista-ofert-www" id="dwónasta-oferta">
            <div class="zdj-w-liscie-ofert">
            <img class="loz" src="npg.svg" alt="Naprawa Płyty Głównej">
        </div><hr><div class="nazwa-w-liscie-ofert">
                 <h3 class="nazwa-oferty">Naprawa Płyty Głównej</h3>
            </div>
                 <blockquote>
                    
                    Cena: <br>
                     198 PLN
                     <br><br>
                     Rabat: <br>
                     0 PLN
                 </blockquote>
                 <div class="stopka-w-ofertach">
                    <a class="strzałka" href="index.php">></a>
            </div>
        </div>
        <!--trzynasta-oferta-->
        <div class="lista-ofert" class="lista-ofert-www" id="trzynasta-oferta">
            <div class="zdj-w-liscie-ofert">
            <img class="loz" src="nzdp.svg" alt="Naprawa Zasilacza do Laptopa">
        </div><hr><div class="nazwa-w-liscie-ofert">
                 <h3 class="nazwa-oferty">Naprawa Zasilacza do Laptopa</h3>
            </div>
                 <blockquote>
                    
                    Cena: <br>
                     60 PLN
                     <br><br>
                     Rabat: <br>
                     0 PLN
                 </blockquote>
                 <div class="stopka-w-ofertach">
                    <a class="strzałka" href="index.php">></a>
            </div>
        </div>
        <!--czternasta-oferta-->
        <div class="lista-ofert" class="lista-ofert-www" id="czternasta-oferta">
            <div class="zdj-w-liscie-ofert">
            <img class="loz" src="wgz.svg" alt="Wymiana Gniazda Zasilania">
        </div><hr><div class="nazwa-w-liscie-ofert">
                 <h3 class="nazwa-oferty">Wymiana Gniazda Zasilania</h3>
            </div>
                 <blockquote>
                    
                    Cena: <br>
                     120 PLN
                     <br><br>
                     Rabat: <br>
                     0 PLN
                 </blockquote>
                 <div class="stopka-w-ofertach">
                    <a class="strzałka" href="index.php">></a>
            </div>
        </div>
        <!--piętnasta-oferta-->
        <div class="lista-ofert" class="lista-ofert-www" id="piętnasta-oferta">
            <div class="zdj-w-liscie-ofert">
            <img class="loz" src="wm.svg" alt="Wymiana Matrycy">
        </div><hr><div class="nazwa-w-liscie-ofert">
                 <h3 class="nazwa-oferty">Wymiana Matrycy</h3>
            </div>
                 <blockquote>
                    
                    Cena: <br>
                     100 PLN
                     <br><br>
                     Rabat: <br>
                     0 PLN
                 </blockquote>
                 <div class="stopka-w-ofertach">
                    <a class="strzałka" href="index.php">></a>
            </div>
        </div>
        </div>
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