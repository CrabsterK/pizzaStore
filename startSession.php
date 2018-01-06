<?php
session_start();
if ((isset($_SESSION['login'])) AND ($_SESSION['login'])) {
    
    //PRZEKIEROWANIE
    header( "Location=aboutPHP.php" );
}
?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="keywords" content="tło, background, size, attachment, repeat, css">
    <meta name="description" content="Strona zawiera przykłady manipulacji tłem w CSS">
    <meta name="author" content="Arkadiusz Marcinowski, CrabsterK, Bartosz Przydatek, inspired95">
    <title>Logowanie</title>
    <link href="css/general.css" rel="stylesheet" type="text/css">


    <script src="js/changeStyle.js">


    </script>

</head>

<body>
    <img id="logo" alt="logo" src="img/needanerdHead.png" />

    <header id="menu">
        <script src="js/menu.js"></script>
    </header>
    <section>
        <h2>Zaloguj się, aby mieć dostęp tych treści</h2>

        <article id="styleExample">
            <h2>Logowanie</h2>
            <form action="login.php" method="POST">
                Login<input type="text" name="login" pattern=".{2,10}" required title="Min - 2 znaki, max 10 znaków">
                Hasło<input type="password" name="pass" pattern=".{3,}" required title="Min - 3 znaki">
                <br><br>
                <input type="submit" value="Zaloguj">
            </form>
            
        </article>
    </section>
    
</body>

</html>
