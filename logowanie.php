<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logowanie</title>
    <link rel="stylesheet" href="styll.css">
</head>
<body>
    <div class="glowny">
        <div class="kontener">
            <div class="przyciski">
                <div id="logowanie"></div>
                <button type="button" class="logowanie" onclick="login()">Zaloguj Się</button>
                <button type="button" class="logowanie" onclick="rejestrowanie()">Zarejestruj Się</button>
            </div>

            <form id="login" class="formularz" action="logowanie.php" method="POST">
                <h3 class="podaj-login">Login:</h3>
                <input name="login-logowanie" type="text" class="wypelnij-formularz" placeholder="Nazwa użytkownika" required>
                <h3 class="podaj-haslo">Hasło:</h3>
                <input name="pw-logowanie" type="password" class="wypelnij-formularz" placeholder="Podaj hasło" required>
                <br>
                           
                <?php
                    session_start();
                    mysqli_report(MYSQLI_REPORT_STRICT);

                    try{
                        $link = mysqli_connect('localhost', 'root', '','pixel_core');
                        if($link == false){
                            throw new Exception(mysqli_connect_errno());
                        }else{
                            if(!isset($_SESSION['udanarejestracja'])){
                               
                                unset($_SESSION['udanarejestracja']);
                            }else{
                                echo "<p>Witaj!</p>";
                            }
                            if(!isset($_SESSION['blednarejestracja'])){
                                unset($_SESSION['blednarejestracja']);
                            }else{
                                echo "nieudało się stworzyć konta... proszę spróbować ponownie!";
                            }
                            $login_logowanie = @$_POST['login-logowanie'];
                            $pw_logowanie = @$_POST['pw-logowanie'];
                            $login = htmlentities($login_logowanie, ENT_QUOTES, "UTF-8" );
                            
                            if(!empty($login_logowanie) || !empty($pw_logowanie)){
                            if($result = @mysqli_query($link, sprintf("SELECT * FROM `konto` WHERE login = '%s'", 
                            mysqli_real_escape_string($link, $login))))
                            {
                                $ilu_userow = mysqli_num_rows($result);
                                if($ilu_userow > 0){
                                    $row = mysqli_fetch_assoc($result);
                                    
                                    if(password_verify($pw_logowanie, $row['haslo'])){
                                    $_SESSION['zalogowany'] = true;
                                    $_SESSION['id'] = $row['id'];
                                    $_SESSION['user'] = $row['login'];
                                    
    
                                    mysqli_free_result($result);
                                    header('Location: index.php');
                                    unset($_SESSION['udanarejestracja']);
                                    unset($_SESSION['blednarejestracja']);
                                    }else{
                                        echo "<span style='color:red'> Nieprawidłowe login lub hasło!</span>";
                                    }
                                }else{
                                    echo "<span style='color:red'> Nieprawidłowe login lub hasło!</span>";
                                }
                            }
                            }else{
                                
                            }
                            
                            mysqli_close($link);
                        }
                    }
                    catch(Exception $e){
                        echo '<p style="color:red;"> Błąd serwera! Przepraszamy za niedogodności i prosimy o rejestrację w innym terminie</p>';
                        echo '<br>Informacja developerska: '.$e;
                    }
                ?>
                <button type="submit" class="submit">Zaloguj się</button>
            </form>
                <!-- INSERT INTO `konto`(`login`, `haslo`) VALUES ('Szymon','dupa123') -->
            <form id="rejestrowanie" class="formularz" action="logowanie.php" method="POST">
                <h3 class="podaj-login">Login:</h3>
                <input name="login-rejestracja"type="text" class="wypelnij-formularz" placeholder="Nazwa użytkownika" required> 
                <?php
                        if(isset($_SESSION['e_login'])){
                            echo "<p style='color:red'>".$_SESSION['e_login']."</p>";
                            unset($_SESSION['e_login']);
                        }
                ?>
                <br>
                <h3 class="podaj-haslo">Hasło:</h3>
                <input name="haslo1" type="password" class="wypelnij-formularz" placeholder="Podaj hasło" required>
                <?php
                        if(isset($_SESSION['e_pw'])){
                            echo "<p style='color:red'>".$_SESSION['e_pw']."</p>";
                            unset($_SESSION['e_pw']);
                        }
                ?>
                <br>
                <h3 class="podaj-haslo">Powtórz Hasło:</h3>
                <input name="haslo2" type="password" class="wypelnij-formularz" placeholder="Powtórz hasło" required>
                <br>
                <label>
                <input type="checkbox" name="regulamin" class="checkbox"><span>Akceptuję Regulamin</span>
                </label>
                <?php
                        if(isset($_SESSION['e_rel'])){
                            echo "<p style='color:red'>".$_SESSION['e_rel']."</p>";
                            unset($_SESSION['e_rel']);
                        }
                ?>
                <br>
                <?php
                    if(isset($_POST['login-rejestracja'])){
                        //udana walicja? załóżmy,że tak
                        $wszystko_Ok = true;
                        //sprawdź poprawność loginu
                        $login_rejestracja = $_POST['login-rejestracja'];
                        //sprawdzenie dla loginu
                        

                        if(ctype_alnum($login_rejestracja) == false){
                            $wszystko_Ok = false;
                            $_SESSION['e_login'] = "Login może składać się tylko z liter i cyfr(bez polskich znaków)";
                        }
                        if(strlen($login_rejestracja) < 3 || (strlen($login_rejestracja) > 15)){
                            $wszystko_Ok = false;
                            $_SESSION['e_login'] = "Login musi posiadać od 3 do 15 znakow!";
                        }
                        //sprawdzenie dla hasla
                        $haslo1 = $_POST['haslo1'];
                        $haslo2 = $_POST['haslo2'];

                        if((strlen($haslo1)<8 || (strlen($haslo1))>20)){
                            $wszystko_Ok = false;
                            $_SESSION['e_pw'] = "hasło musi podać od 8 do 20 znaków!";
                        }
                        $haslo_hash = password_hash($haslo1, PASSWORD_DEFAULT);
                        //czy zakceptowano regulamin?
                        if(!isset($_POST['regulamin'])){
                            $wszystko_Ok = false;
                            $_SESSION['e_rel'] = "Potwierdź regulamin";
                        }
                          
                        if($haslo1 != $haslo2){
                            $wszystko_Ok = false;
                            $_SESSION['e_pw'] = "Podane hasła niesą identyczne!";
                        }

                        

                        try{
                            $link = mysqli_connect('localhost', 'root', '','pixel_core');
                            if($link == false){
                                throw new Exception(mysqli_connect_errno());
                            }else{
                                //czy login już istnieje?
                                $result = mysqli_query($link, "SELECT id FROM konto WHERE login = '$login_rejestracja'");
                                if(!$result) throw new Exception(mysqli_error($link));
                                $ile_takich_loginow = mysqli_num_rows($result);
                                if($ile_takich_loginow > 0){
                                    $wszystko_Ok = false;
                                    $_SESSION['e_login'] = "istnieje już taki login. Proszę podać inny!";
                                } 
                                if($wszystko_Ok == true){
                                    //noii gittt. Dodajemy konto do bazy! 
                                    if( $link->query("INSERT INTO `konto`(`login`, `haslo`) VALUES ('$login_rejestracja','$haslo_hash')"))
                                    {
                                        $_SESSION['udanarejestracja'] = true;
                                        header('Location: logowanie.php');
                                    }else{
                                        throw new Exception(mysqli_error($link));
                                    }
                                    
                                }else{
                                    $_SESSION['blednarejestracja'] = true;
                                    header("Location: logowanie.php");
                                }
                                mysqli_close($link);
                            }
                        }
                        catch(Exception $e){
                            echo '<p style="color:red;"> Błąd serwera! Przepraszamy za niedogodności i prosimy o rejestrację w innym terminie</p>';
                            echo '<br>Informacja developerska: '.$e;
                        }
                    }
                ?>
                <button type="submit" class="submit">Zarejestruj się</button>
            </form>
        </div>
    </div>
    <script>
        var x = document.getElementById("login");
        var y = document.getElementById("rejestrowanie");
        var z = document.getElementById("logowanie");

        if(innerWidth>0 && innerWidth<730){
            function rejestrowanie(){
            x.style.left = "-550px";
            y.style.left = "2em";
            z.style.left = "110px";
        }

        function login(){
            x.style.left = "2em";
            y.style.left = "550px";
            z.style.left = "0";
        }
        }else if(innerWidth>730 && innerHeight<1080){
            function rejestrowanie(){
            x.style.left = "-1000px";
            y.style.left = "2em";
            z.style.left = "300px";
        }

        function login(){
            x.style.left = "2em";
            y.style.left = "750px";
            z.style.left = "0";
        }
        }else if(innerWidth>1080 && innerHeight<2250){
            function rejestrowanie(){
            x.style.left = "-5000px";
            y.style.left = "2em";
            z.style.left = "200px";
        }

        function login(){
            x.style.left = "2em";
            y.style.left = "1000px";
            z.style.left = "0";
        }
        }
    </script>
</body>
</html>