


<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="UTF-8">
        <meta name="keywords" content="">    <!--TODO: keywords-->
        <meta name="description" content="">    <!--TODO: description-->
        <meta name="author" content="Arkadiusz Marcinowski, CrabsterK, Bartosz Przydatek, inspired95">
        <title></title>    <!--TODO: title-->
        <link href="../css/general.css" rel="stylesheet" type="text/css">
    </head>
    
    <body>

        <img id="logo" alt="logo" src="../img/needanerdHead.png"/>
            
        <header id="menu">
            <script src="/PHP3/js/menu.js"></script>
        </header>
        

        <section>
    
            <h2></h2>
            
            <article>
               <a id="#"></a>
                <h2>Połączenie z bazą danych </h2>
                
                <p>
                    <?php
                        $host = '127.0.0.1';
                        $user = 'root';
                        $password = 'root';
                        $database = 'psw';
                        $link = mysqli_connect($host, $user, $password, $database);
                        echo "<h3>Próba połączenia</h3><br>";
                        echo "Host:  $host<br>";
                        echo "Użytkownik: $user<br>Hasło: $password<br>";
                        echo "Baza danych: $database<br><br>";
                        if (!$link) {
                            echo "Error: Nie można połączyć się z bazą MySQL" . PHP_EOL;
                            echo "<br>errno: " . mysqli_connect_errno() . PHP_EOL;
                            echo "<br>error: " . mysqli_connect_error() . PHP_EOL;
                            mysqli_close($link); 
                            exit;
                        }else{
                        	$a = "Połączenie";
                        	$$a = " z serwerem bazy danych zostało utworzone pomyślnie. Baza danych PSW jest gotowa do pracy.";
                            echo "$a $Połączenie <br><br><br><br><br>" . PHP_EOL;


	                            
							$str = "Hello hello.? TUtaj jest [dużo] ?znaków [i] każy? został .poprzedzony backslashem.<br>";
	                        echo "Jak działa quotemeta?<br>";
	                        echo "echo \$str : <br>";
	                        echo "$str<br><br>";
	                        echo "echo quotemeta(\$str) : <br>";
							echo quotemeta($str);
	 						die();
                           
                        }


						
                   
                    ?>
                </p>
                
            </article>

        </section>

    </body>
    
</html>