<?PHP
    require 'DB/connection.php';
    include 'kontroler/IloscZamowionych.php';


    $sql = "SELECT Miasto, Ulica, NrMieszkania FROM Adres" ;
    $result = mysqli_query($link, $sql);
    $row=mysqli_fetch_row($result);


    $city = $row[0];
    $street = $row[1];
    $number = $row[2];


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
                  $_SESSION['fullSum'] = 0;
                   $sql = "SELECT IdZamowienie FROM Zamowienie WHERE stat = \"nowe\"" ;
                    $result = mysqli_query($link, $sql);
                    if(mysqli_num_rows($result) > 0){
                      $ro=mysqli_fetch_row($result);
                      

                      $sql = "SELECT * FROM IloscZamowionych WHERE ZamowienieIdZamowienie = $ro[0]" ;
                      $result = mysqli_query($link, $sql);
                      if(mysqli_num_rows($result) > 0){
                        echo "<table style=\"width: 90%;  text-align: left\">";
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
                                $_SESSION['fullSum'] = $_SESSION['sum'] + 8;
                                echo 
                                "<td  style=\"border-bottom:1pt solid black;\">
                                  <form action=\"update.php\" method=\"POST\" style=\"float: left\">
                                      <input type=\"number\" name=\"quantity\" min=\"1\" max=\"100\"" . $row['IloscZamowionych'] . "\" value=" .$row['IloscZamowionych']." style=\"width:3em\">
                                       <input type=\"hidden\" name=\"product\" value=\"" . $info_row['IdTowar'] ."\" >
                                       <input type=\"hidden\" name=\"backTo\" value=\"track.php\" >
                                      <input type=\"submit\" value=\"Zapisz\" class=\"btn\">
                                    </form>

                                  <form action=\"delete.php\" method=\"POST\">
                                    <input type=\"hidden\" name=\"quantity\" min=\"1\" max=\"100\"" . $row['IloscZamowionych'] . "\" value=" .$row['IloscZamowionych']." style=\"width:3em\">
                                     <input type=\"hidden\" name=\"product\" value=\"" . $info_row['IdTowar'] ."\" >
                                     <input type=\"hidden\" name=\"backTo\" value=\"track.php\" >
                                    <input type=\"submit\" value=\"Usuń\" class=\"btn\">
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
                       






                        echo "<br><br><br>";
                 
              echo "<form action=\"finishOrder.php\" method=\"POST\">
                        <table style=\"width:100%; text-align: left;\" >

                            <tr>
                              <td>Wybierz sposób dostawy/odbioru</td>
                              <td>Wybierz sposób płatności</td>
                            </tr>

                            <tr>
                              <td>
                                  <input name=\"dostawa\" type=\"radio\" value=\"dostawca\">Dostawca 8 zł<br>
                               </td>
                              <td>
                                  <input name=\"platnosc\" type=\"radio\" value=\"karta\">Karta płatnicza<br>
                                </td>
                                <td></td>
                            </tr>

                            <tr>
                              <td>
                                  <input name=\"dostawa\" type=\"radio\" value=\"osobisty\" checked=\"checked\">Odbiór osobisty<br>
                                </td>
                              <td>
                                  <input name=\"platnosc\" type=\"radio\" value=\"przelew\" checked=\"checked\">Przelew<br>
                                </td>
                            </tr>


                              <tr>
                              <td></td>
                              <td>
                                  <input name=\"platnosc\" type=\"radio\" value=\"przyodbiorze\" checked=\"checked\">Płatność przy odbiorze<br>
                                </td>
                            </tr>
                          </table>








                        

                           <table style=\"width:80%; text-align: left;\" >
                           <br>
                                   <tr>
                                    <td>Adres:</td>
                                    <td></td>
                                    <td>Podsumowanie:</td>
                                    <br>
                                   </tr>
                           
                                   <tr>
                                    <td style=\"width:120px\">Miasto</td>
                                    <td>
                                      <input name=\"miasto\" style=\"width: 45%;\"type=\"text\" value=$city>
                                      <p class=\"hint\" id=\"cityRequest\"></p>
                                    </td>
                                    <td style=\"width: 28%\">Wartość produktów w koszyku:</td>
                                    <td style=\"width: 8%; text-align: right\">" . $_SESSION['sum'] . " zł</td>
                                  </tr>

                                   <tr>
                                    <td style=\"width:12px\">Ulica</td>
                                    <td>
                                      <input name=\"ulica\" style=\"width: 45%;\"type=\"text\" value=$street>
                                      <p class=\"hint\" id=\"streetRequest\"></p>
                                    </td>
                                    <td style=\"border-bottom:1pt solid black;\">Transport:</td>
                                    <td style=\"border-bottom:1pt solid black; text-align: right\">8 zł</td>
                                  </tr>

                                  <tr>
                                    <td style=\"width:120px\">Nr mieszkania</td>
                                    <td>
                                      <input name=\"numer\" style=\"width: 45%;\"type=\"text\" value=$number>
                                      <p class=\"hint\" id=\"numberRequest\"></p>
                                    </td>
                                    <td style=\"border-bottom:1pt solid black;\">Całkowita kwota do zapłaty:</td>
                                    <td style=\"border-bottom:1pt solid black;; text-align: right\">".  $_SESSION['fullSum'] . " zł</td>
                                  </tr

                                  <tr>

                                    <td> 
                                    <input type=\"hidden\" name=\"backTo\" value=\"trackfinalize.php\" >
                                   
                                    <td></td>
                                  </tr>
                          
                          </table>
                                <input type=\"hidden\" name=\"fullSum\" value=\"" . $_SESSION['fullSum'] ."\" >
                              <input  style=\"float: right\" type=\"submit\" value=\"Złóż zamówienie!\" class=\"finishButton\"></td>
                        
                </form>";
                       
            
                        }else{
                      echo "Koszyk jest pusty!";
                    }
                    }else{
                      echo "Koszyk jest pusty!";
                    }

                  ?>



                  











                  <a href="menu.php"><p style="text-align: left">Kontunuj zakupy</p><a>

                    <?php
                      if ($_SESSION['sum'] != 0) {

                     //   echo "<a href=\"trackfinalize.php\"><p style=\"text-align: right\">Złóż zamówienie!</p><a>";
                      }
                    ?>
                </div>
            </article>

        </section>

    </body>
    
</html>