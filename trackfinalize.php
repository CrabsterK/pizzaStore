<?PHP
    require 'DB/connection.php';
    
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
    
            <h2>Realizacja zamówienia</h2>
            
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
                        echo "<td style=\"border-bottom:1pt solid black;\">Ilość</td>";
                        echo "<td style=\"border-bottom:1pt solid black;\">Cena</td>";
                        echo "</tr>";

                      while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        $sql = "SELECT * FROM towara WHERE IdTowar =" . $row['TowaraIdTowar'];
                        if($info = mysqli_query($link, $sql)){
                          if (mysqli_num_rows($info) > 0) {
                            while($info_row = mysqli_fetch_assoc($info)){
                              echo "<td  style=\"border-bottom:1pt solid black;\">" . $info_row['Nazwa'] . "</td>";
                              echo "<td  style=\"border-bottom:1pt solid black;\">" . $row['IloscZamowionych'] . "</td>";
                              echo "<td  style=\"border-bottom:1pt solid black;\">" . $info_row['Cena'] * $row['IloscZamowionych'] . " zł</td>";
                            


                              $_SESSION['sum'] = $_SESSION['sum'] + $info_row['Cena'] * $row['IloscZamowionych'];
                              $_SESSION['fullprice'] = $_SESSION['sum'] + $_SESSION['sum'];   //TO OGARNĄĆ. DODAĆ CENĘ DOSTAWY
                             
                            }
                          }
                        }
                      }
                      echo "</table>";

                      echo "<table style=\"width: 80%\">";
                        echo "<tr>";
                          echo "<td style=\"width: 70%;\"></td>";
                          echo "<td style=\"text-align: left\">Wartość koszyka: " . $_SESSION['sum'] . "zł</h3></td>";
                        echo "</tr>";
                        echo "<tr>";
                          echo "<td style=\"width: 70%;\"></td>";
                          echo "<td style=\"text-align: left\">Koszt przesyłki: " . $_SESSION['sum'] . "zł</h3></td>";
                        echo "</tr>";
                        echo "<tr>";
                          echo "<td style=\"width: 70%;\"></td>";
                          echo "<td style=\"text-align: left\">Całkowita kwota do zapłaty: " . $_SESSION['fullprice']. "zł</h3></td>";
                        echo "</tr>";
                        echo "</table><br><br>";


                      #TODO: USUWANIE PRODUKTU
                    }else{
                      echo "Koszyk jest pusty!";
                    }
                  ?>

                  <h1 style="text-align: center;"><br><br>Dziękujemy! <br><br> Realizacja zamówienia zakończona powodzeniem! <br><br><br></h1>
                 
                </div>
            </article>

        </section>

    </body>
    
</html>