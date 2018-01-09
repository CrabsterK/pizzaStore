<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="UTF-8">
        <meta name="keywords" content="pizza, salad, food, jedzenia, restauracja, nocna">    <!--TODO: keywords-->
        <meta name="description" content="Restauracja wysyłkowa z napojami, sałatkami, pizzą.">    <!--TODO: description-->
        <meta name="author" content="Arkadiusz Marcinowski, CrabsterK">
        <title></title>    <!--TODO: title-->
        <link href="css/general.css" rel="stylesheet" type="text/css">
    </head>
    
    <body>

        <a href ="index.php">
            <img id="logo" alt="logo" src="img/pizza.png">
        </a>
        <a href ="track.php">
            <img id="track" alt="logo" src="img/track.png">
        </a>
        <a href ="user.html">
            <img id="user" alt="logo" src="img/user.png">
        </a>
        <a href ="search.html">
            <img id="search" alt="logo" src="img/search.png">
        </a>

            
        <header id="menu">
            <script src="js/menu.js"></script>
        </header>
        

        <section>
    
            <h2>Twój koszyk</h2>
            
            <article>
                <div>
                  <?php
                  $_SESSION['sum'] = 0;
                    $sql = "SELECT * FROM zamprod WHERE Zamowienie = " . $_SESSION['order'] ;
                    $result = mysqli_query($link, $sql);
                    if(mysqli_num_rows($result) > 0){
                      echo "<table style=\"width: 60%\">";
                      echo "<tr>";
                      echo "<td>Produkt</td>";
                      echo "<td>Cena</td>";
                      echo "<td>Ilość</td>";
                      echo "<td>Suma</td>";
                      echo "</tr>";
                      while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        $sql = "SELECT * FROM produkt WHERE idProduktu =" . $row['Produkt'];
                        if($info = mysqli_query($link, $sql)){
                          if (mysqli_num_rows($info) > 0) {
                            while($info_row = mysqli_fetch_assoc($info)){
                              echo "<td  >" . $info_row['Nazwa'] . "</td>";
                              echo "<td  style=\"border-bottom:1pt solid black;\">" . $info_row['Cena'] . "zł</td>";
                              echo "<td  style=\"border-bottom:1pt solid black;\">" . $row['Ilosc'] . "</td>";
                              echo "<td  style=\"border-bottom:1pt solid black;\">" . $info_row['Cena'] * $row['Ilosc'] . "zł</td>";
                              $_SESSION['sum'] = $_SESSION['sum'] + $info_row['Cena'] * $row['Ilosc'];
                              echo "<td  style=\"border-bottom:1pt solid black;\">
                                <form action=\"delete.php\" method=\"POST\">
                                  Ilość: <input type=\"number\" name=\"quantity\" min=\"1\" max=\"" . $row['Ilosc'] . "\" value=\"1\" style=\"width:3em\">
                                  <input type=\"hidden\" name=\"product\" value=\"" . $row['Produkt'] ."\" >
                                  <input type=\"hidden\" name=\"order\" value=\"" . $_SESSION['order'] ."\">
                                  <input type=\"submit\" value=\"Usuń z koszyka\" class=\"btn\">
                                </form>
                              </td>";
                              echo "</tr>";
                            }
                          }
                        }
                      }
                      echo "</table>";
                      echo "<h2 style=\"text-align: center\">Suma: " . $_SESSION['sum'] . "zł</h2>";
                      #TODO: USUWANIE PRODUKTU
                    }else{
                      echo "Koszyk jest pusty!";
                    }
                  ?>
                  <a href="order.php"><p style="text-align: left">Kontunuj zakupy</p><a>

                    <?php
                      if ($_SESSION['sum'] != 0) {
                        echo "<a href=\"finalize.php\"><p style=\"text-align: right\">Złóż zamówienie!</p><a>";
                      }
                    ?>
                </div>
            </article>

        </section>

    </body>
    
</html>