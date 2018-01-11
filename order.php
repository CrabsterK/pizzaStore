<?php

  require 'DB/connection.php';

    
?>


<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="UTF-8">
        <meta name="keywords" content="Strona do pizzerii DelPiz">
        <meta name="description" content="">
        <meta name="author" content="Bartosz Przydatek">
        <title>DelPiz</title>
        <link href="css/general.css" rel="stylesheet" type="text/css">
    </head>

    <body>

        <img id="logo" alt="logo" src="img/logo.png"/>

        <header id="menu">
            <script src="js/menu.js"></script>
        </header>


        <section>

            <article>

                <h2>Wybierz produkty</h2>

                <div>
                  <?php
                    $sql = "SELECT idTowar, Nazwa, Cena, opisTowaru, Kategoria, skladTowaru FROM Towara";
                    $result = mysqli_query($link, $sql);
                    if(mysqli_num_rows($result) > 0){
                      echo "<table style=\"width: 100%;border:1px solid\">";
                      echo "<tr>";
                      echo "<td style=\"text-align:center; border-bottom:1pt solid black;\">Kategoria</td>";
                      echo "<td style=\"text-align:center; border-bottom:1pt solid black;\">Nazwa</td>";
                      echo "<td style=\"text-align:center; border-bottom:1pt solid black;\">Opis</td>";
                      echo "<td style=\"text-align:center; border-bottom:1pt solid black;\">Cena</td>";
                      echo "<td style=\"text-align:center; border-bottom:1pt solid black;\"></td>";
                      echo "</tr>";
                      while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td><img src=\"";
                        switch ($row['Kategoria']){
                          case 1:
                            echo "img/pizza.png";
                            break;
                          case 2:
                            echo "img/dodatek.png";
                            break;
                          case 3:
                            echo "img/napoj.png";
                            break;
                        }
                        echo "\"></td>";
                        echo "<td style=\"text-align:center; border-bottom:1pt solid black;\">" . $row['Nazwa'] . "</td>";
                        echo "<td style=\"text-align:center; border-bottom:1pt solid black;\">" . $row['Opis'] . "</td>";
                        echo "<td style=\"text-align:center; border-bottom:1pt solid black;\">" . $row['Cena'] . " zł </td>";
                        echo "<td style=\"text-align:center; border-bottom:1pt solid black;\">
                          <form action=\"add.php\" method=\"POST\">
                            Ilość: <input type=\"number\" name=\"quantity\" min=\"1\" max=\"" . $row['Dostenosc'] . "\" value=\"1\" style=\"width:3em\">
                            <input type=\"hidden\" name=\"product\" value=\"" . $row['idProduktu'] ."\" >
                            <input type=\"hidden\" name=\"order\" value=\"" . $_SESSION['order'] ."\">
                            <input type=\"submit\" value=\"Dodaj do koszyka\" class=\"btn\">
                          </form>
                        </td>";
                        //style=\"background: url(img/addCart.png)\"
                        echo "</tr>";
                      }
                    }else{
                      echo "<p>Brak produktów";
                    }
                  ?>
                </div>

            </article>

        </section>

    </body>

</html>