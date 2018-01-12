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
        <title>Sałatki</title>    <!--TODO: title-->
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
    
            <h2>Menu Sałatki</h2>
            
            <article style="height: 900px; ">
              <br><br><br>


                <?php

                    $sql = "SELECT Nazwa, skladTowaru, Cena, idTowar FROM towara WHERE Kategoria = 'Salatka'";
                    $result = mysqli_query($link, $sql);
                    $licz =0;
                    if(mysqli_num_rows($result) > 0){
                        echo "<table style=\"width:100%; text-align: left;\" >
                           <tr>
							    <td style=\"border-bottom: 1px solid black; width:200px\"></td>
							    <td style=\"border-bottom: 1px solid black\">Skład sałatki</td>
							    <td style=\"border-bottom: 1px solid black; width:120px\">Cena</td> 
                                <td style=\"border-bottom: 1px solid black; width:300px\">Zamów</td>
						  	</tr>";
                        while($row = mysqli_fetch_assoc($result)){
                        	if($licz == 2){
                        		echo"<h4>Z MIĘSEM</h4>";  
                        	}
                        	$licz++;;
                            echo "<tr >
                            		<td style=\"border-bottom: 1px solid black; width:200px\">
                            			<a href =\"product.html\">
                                       		".$row["Nazwa"]."
                                   		</a>
                            		</td>
								    <td style=\"border-bottom: 1px solid black;\"><i>" . $row["skladTowaru"] . "</i></td>
								    <td style=\"border-bottom: 1px solid black; width:120px\">" . $row["Cena"]  . " zł</td> 
                                    <td style=\"border-bottom:1pt solid black;\">
                                      <form action=\"add.php\" method=\"POST\">
                                        Ilość: <input type=\"number\" name=\"quantity\" min=\"1\" max=\"'10'\" value=\"1\" style=\"width:3em\">
                                        <input type=\"hidden\" name=\"product\" value=\"" . $row['idTowar'] ."\" >
                                         <input type=\"hidden\" name=\"backTo\" value=\"saladmenu.php\" >
                                        <input type=\"submit\" value=\"Dodaj\" class=\"btn\">
                                      </form>
                                    </td>
								</tr>";
                        }
                    }
                    echo "</table>";
                ?> 



            </article>

    </body>
    
</html>