<?PHP
    require 'DB/connection.php';





?>

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
                    $sql = "SELECT * FROM IloscZamowionych" ;
                    $result = mysqli_query($link, $sql);
                    if(mysqli_num_rows($result) > 0){
                      echo "<table style=\"width: 80%;  text-align: left\">";
                        echo "<tr>";
                        echo "<td style=\"border-bottom:1pt solid black;\">Produkt</td>";
                        echo "<td style=\"border-bottom:1pt solid black;\">Sztuka</td>";
                        echo "<td style=\"border-bottom:1pt solid black;\">Cena</td>";
                        echo "<td style=\"border-bottom:1pt solid black;\">Ilość</td>";
                        echo "</tr>";

                      while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        $sql = "SELECT * FROM towara WHERE IdTowar =" . $row['TowaraIdTowar'];
                        if($info = mysqli_query($link, $sql)){
                          if (mysqli_num_rows($info) > 0) {
                            while($info_row = mysqli_fetch_assoc($info)){
                              echo "<td  style=\"border-bottom:1pt solid black;\">" . $info_row['Nazwa'] . "</td>";
                              echo "<td  style=\"border-bottom:1pt solid black;\">" . $info_row['Cena'] . " zł</td>";
                              echo "<td  style=\"border-bottom:1pt solid black;\">" . $info_row['Cena'] * $row['IloscZamowionych'] . " zł</td>";
                            


                              $_SESSION['sum'] = $_SESSION['sum'] + $info_row['Cena'] * $row['IloscZamowionych'];
                              echo 
                              "<td  style=\"border-bottom:1pt solid black;\">
                                <form action=\"delete.php\" method=\"POST\">
                                  <input type=\"number\" name=\"quantity\" min=\"1\" max=\"" . $row['IloscZamowionych'] . "\" value=" .$row['IloscZamowionych']." style=\"width:3em\">
                                  <input type=\"submit\" value=\"Usuń\" class=\"btn\">
                                  <input type=\"upd\" value=\"Aktualizuj\" class=\"btn\">
                                </form>
                              </td>";
                              echo "</tr>";
                            }
                          }
                        }
                      }
                      echo "</table>";
                      echo "<h3 style=\"text-align: center\">Wartość koszyka: " . $_SESSION['sum'] . "zł</h3>";
                      #TODO: USUWANIE PRODUKTU
                    }else{
                      echo "Koszyk jest pusty!";
                    }
                  ?>



                  <br><br><br>
                   <?php
                        echo "<table style=\"width:100%; text-align: left;\" >

                            <tr>
                              <td>Wybierz sposób dostawy/odbioru</td>
                              <td>Wybierz sposób płatności/odbioru</td>
                            </tr>

                            <tr>
                              <td>
                                  <input name=\"dostawa\" type=\"radio\" value=\"dostawca\">Dostawca<br>
                               </td>
                              <td>
                                  <input name=\"platnosc\" type=\"radio\" value=\"dostawca\">Karta płatnicza<br>
                                </td>
                                <td></td>
                            </tr>

                            <tr>
                              <td>
                                  <input name=\"dostawa\" type=\"radio\" value=\"osobisty\" checked=\"checked\">Odbiór osobisty<br>
                                </td>
                              <td>
                                  <input name=\"platnosc\" type=\"radio\" value=\"osobisty\" checked=\"checked\">Przelew<br>
                                </td>
                            </tr>


                              <tr>
                              <td></td>
                              <td>
                                  <input name=\"platnosc\" type=\"radio\" value=\"osobisty\" checked=\"checked\">Płatność przy odbiorze<br>
                                </td>
                            </tr>
                          </table>";








                          

                           echo "<table style=\"width:80%; text-align: left;\" >
                           <br>
                           <tr>
                            Adres:
                            <br>
                           </tr>

                           <tr>
                            <td style=\"width:120px\">Miasto</td>
                            <td>
                              <input name=\"miasto\" style=\"width: 20%;\"  id=\"miasto\" class=\"normalInput\" type=\"text\">
                              <p class=\"hint\" id=\"cityRequest\"></p>
                            </td>
                          </tr>

                           <tr>
                            <td style=\"width:12px\">Ulica</td>
                            <td>
                              <input name=\"ulica\" style=\"width: 20%;\"  id=\"ulica\" class=\"normalInput\" type=\"text\">
                              <p class=\"hint\" id=\"streetRequest\"></p>
                            </td>
                          </tr>

                          <tr>
                            <td style=\"width:120px\">Nr mieszkania</td>
                            <td>
                              <input name=\"numer\" style=\"width: 20%;\"  id=\"numer\" class=\"normalInput\" type=\"text\">
                              <p class=\"hint\" id=\"numberRequest\"></p>
                            </td>
                          </tr>";
                       
                ?> 













                  <a href="menu.php"><p style="text-align: left">Kontunuj zakupy</p><a>

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