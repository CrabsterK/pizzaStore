<?php
session_start();
if (!(isset($_SESSION['login'])) OR !($_SESSION['login'])) {

    header("Location: startSession.php" );
}
   
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="keywords" content="tło, background, size, attachment, repeat, css">
    <meta name="description" content="Strona zawiera przykłady manipulacji tłem w CSS">
    <meta name="author" content="Arkadiusz Marcinowski, CrabsterK, Bartosz Przydatek, inspired95">
    <title>O PHP</title>
    <link href="css/general.css" rel="stylesheet" type="text/css">


    <script src="js/changeStyle.js">


    </script>

</head>

<body>
    <img id="logo" alt="logo" src="img/needanerdHead.png" />

    <header id="menu">
        <script src="js/menu.js"></script>
        <ul>
            <li><a href="logout.php">Wyloguj</a></li>
        </ul>
    </header>
    <section>
        <h2>O PHP</h2>
        <?php
            $userName = $_SESSION['userName'];
            echo "<h1>Witaj $userName!</h1>";
        ?>
        <article id="styleExample">
            <h2>Czym jest PHP?</h2>
            PHP to skryptowy język programowania służący głównie do tworzenia stron internetowych. PHP jest rozprowadzany na otwartej licencji i każdy może pobrać za darmo jego kopię, zainstalować i używać bez żadnych ograniczeń zarówno do celów prywatnych jak i komercyjnych. Język jest prosty w nauce i umożliwia tworzenie profesjonalnych dynamicznych stron internetowych. 
            <h2>Jak PHP współpracuje ze stroną WWW?</h2>
            PHP jest językiem server-side, tj. pracuje po stronie serwera WWW. Przeciwieństwem są języki client-side pracujące po stronie przeglądarki użytkownika (np. JavaScript). Aby wykorzystywać go na własnej stronie, musisz upewnić się, że twój serwer obsługuje PHP. Zanim przejdziemy dalej, należy zrozumieć zasadę, na jakiej PHP generuje dynamiczne strony WWW.

Kiedy wpisujemy adres w przeglądarce internetowej, żądanie wyświetlenia strony kierowane jest do serwera HTTP zwanego także serwerem WWW. Jeśli stwierdzi na podstawie rozszerzenia pliku, że dany dokument zawiera kod PHP, serwer kieruje do jego interpretera żądanie przetworzenia podanego pliku. Interpreter wyszukuje w jego treści tzw. wstawki PHP wplecione w statyczny kod HTML i zastępuje je wynikiem ich wykonywania. Utworzony kod HTML jest zwracany serwerowi, a ten wysyła go z powrotem do internauty. PHP używany jest do dynamicznego (zależnego od różnych warunków) generowania kodu HTML - zawartości strony. Do przeglądarki dociera kod HTML a nie PHP. Jeśli mamy plik PHP o następującej treści: 
       <br>
        &lt;html><br>
           &Tab;&lt;body><br>
            &Tab;&lt;?php<br>
            &Tab;&Tab;echo 'Podaj hasło';<br>
            &Tab;?><br>
            &Tab;&lt;/body><br>
        &lt;/html><br><br>
        To internauta zobaczy jedynie dokument o takiej treści: <br>
        &lt;html><br>
        &lt;body><br>
        Podaj hasło<br>
        &lt;/body><br>
        &lt;/html><br><br>
        Cały PHP zniknie, a na jego miejscu pojawi się utworzony przez niego kod HTML.

Dzięki pracy po stronie serwera, PHP idealnie nadaje się do tworzenia złożonych aplikacji zarządzających dużymi ilościami danych: forami dyskusyjnymi, systemami zarządzania treścią, sklepami internetowymi. Generują one odpowiedni kod HTML dla przeglądarek internautów, a w momencie, kiedy oni go przeglądają, PHP już zakończył nad nim swą pracę. Jest to bardzo istotne, ponieważ wszelkie dalsze reakcje na poczynania użytkownika należy albo pozostawić przeglądarce, albo obsłużyć je za pomocą języka JavaScript. 
        </article>
    </section>
    

</body>

</html>
