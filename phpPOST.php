<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="UTF-8">
        <meta name="keywords" content="">    <!--TODO: keywords-->
        <meta name="description" content="">    <!--TODO: description-->
        <meta name="author" content="Arkadiusz Marcinowski, CrabsterK, Bartosz Przydatek, inspired95">
        <title></title>    <!--TODO: title-->
        <link href="css/general.css" rel="stylesheet" type="text/css">
    </head>
    
    <body>

        <img id="logo" alt="logo" src="img/needanerdHead.png"/>
            
        <header id="menu">
            <script src="js/menu.js"></script>
        </header>
        

        <section>
    
            <h2></h2>
            
            <article>
                <?php

                    //Tablica asocjacyjna
                    $arrDog["Posiadasz psa"] = "tak";
                    $arrDog["Nie posiadasz psa"] = "nie";
                    $arrDog["Nie wie czy posiadasz psa"] = "nie wiem";
                    //echo $tablica["imie"]." ".$tablica["nazwisko"].", ul. ".$tablica["adres"]."n";

                    //Tablica indeksowana numerycznie
                    $arrLanguage[0] = 'Polski';
                    $arrLanguage[1] = 'Niemiecki';
                    $arrLanguage[2] = 'Angielski';
                    $arrLanguage[3] = 'Francuski'; 


                    assignIfExist('name', $name);//
                    assignIfExist('lastname', $lastname);//
                    assignIfExist('email', $email);//auto
                    assignIfExist('phone', $phone);//
                    assignIfExist('doggo', $doggo);//
                    assignIfExist('answerSport', $answerSport);
                    assignIfExist('answerBooks', $answerBooks);
                    assignIfExist('language', $language);


                    define("MIN_NAME_LENGTH", (integer)"3", true);
                    define("MAX_NAME_LENGTH", "15", false);
                    define("MAX_LASTNAME_LENGTH", "15", false);
                    



                    //WALIDACJA

                    if (validName($name)) {
                        echo 'Imię: ' . $name . "<br>"; 
                    } 
                    else {
                        echo "<p>Niepoprawe imię!</p>";
                        die();
                    }

                    if (validLastname($lastname)) {
                        echo 'Nazwisko: ' . $lastname . "<br>"; 
                    } 
                    else {
                        echo "<p>Niepoprawe nazwisko!</p>";
                        die();
                    }

                
                    if(strstr($email, "@gmail")==True) {
                     echo "Posiagasz email GOOGLE.<br>";
                    }
                    if(strstr($email, "@wp")==True) {
                     echo "Posiagasz email WP.<br>";
                    }


                    if (validPhone($phone)) {
                         $normalizedNumber = normalizePhoneNumber($phone);
                        echo 'Telefon: ' . $normalizedNumber . "<br>"; 
                    } 
                    else {
                        echo "<p>Niepoprawy numer telefonu!</p>";
                        die();
                    }

                    if (validDoggo($doggo, $arrDog)) {
                        $haveDog = getSelected($doggo, $arrDog);
                        echo "$haveDog<br>";
                    } 
                    else {
                        echo "<p>Nieprawidłowa odpowiedź dotycząsa posiadania psa!</p>";
                        die();
                    }



                    if ($answerSport == "on") {
                        echo "Lubisz sport<br>";
                    }

                    if ($answerBooks == "on") {
                        echo "Lubisz książki<br>";
                    }


                    if ($language == "") {
                        echo "Nie wybrano języka. Lista dostępnych:<br>";
                        for($i = 0; $i < count($arrLanguage); $i++) {
                            echo "*$arrLanguage[$i] <br>";
                        }
                    }
                    else {
                        echo "Twój język: $language<br>";
                    }


                    $m = 2+2*2;
                    echo "<br><br>Pierszeństwo operatorów: \"2+2*2= $m\"<br>";

                  

                    //echo $_SERVER['REMOTE_ADDR'];
                    echo "<br>Tablica globalna \$_POST: <br>";
                    print_r($_POST);    //nasza tablica globalna całości
                    //print_r($_SERVER);
                ?>









                    <?php
                        function existInGlobalArray($identifier){
                            return array_key_exists($identifier, $_POST);
                        }

                        function assignIfExist($identifier, &$variable){
                            if (existInGlobalArray($identifier)) {
                                $variable = $_POST[$identifier];
                            }
                        }


                        function validName($name){
                        if (strlen($name) < constant("MIN_NAME_LENGTH")) {
                            return false;
                        }
                        $MAX_NAME_LENGTH = constant("MAX_NAME_LENGTH");
                        settype($MAX_NAME_LENGTH, "integer");
                        if (strlen($name) > $MAX_NAME_LENGTH) {
                            return false;
                        }
                        return true;
                        }


                        function validLastName($name){
                        if (strlen($name) < constant("MIN_NAME_LENGTH")) {
                            return false;
                        }
                        $MAX_NAME_LENGTH = constant("MAX_LASTNAME_LENGTH");
                        settype($MAX_NAME_LENGTH, "integer");
                        if (strlen($name) > $MAX_NAME_LENGTH) {
                            return false;
                        }
                        return true;
                        }



                        function validPhone($phone){
                            return preg_match("/^[0-9]{3}-[0-9]{3}-[0-9]{3}$/", $phone);
                        }

                        function normalizePhoneNumber($phone){
                            return preg_replace('*-*', '', $phone);
                        }


                        //zwraca true jeśli w tablicy asocjacyjnej jest wybrana odpowiedź na posiadanie psa
                        function validDoggo($doggo, $arrDog){
                            $valid = false;
                            foreach ($arrDog as &$value) {
                                if ($doggo == $value) {
                                    $valid = true;
                                }
                            }
                            return $valid;
                        }

                        function getSelected($doggo, $arrDog){
                            reset($arrDog); //Set the internal pointer of an array to its first element
                            if ($doggo == current($arrDog)) {
                                return key($arrDog);
                            }
                            next($arrDog);
                            if ($doggo == current($arrDog)) {
                                return key($arrDog);
                            }
                            next($arrDog);
                            if ($doggo == current($arrDog)) {
                                return key($arrDog);
                            }
                        }     
                    ?>
            </article>
        </section>
    </body>
</html>