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
        <title>Pizza</title>    <!--TODO: title-->
        <link href="css/general.css" rel="stylesheet" type="text/css">
    </head>
    
    <body>

        <a href ="index.php">
            <img id="logo" alt="logo" src="img/pizza.png">
        </a>
        <a href ="track.html">
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
    
            <h2>Menu Pizza</h2>
            
            <article style="height: 900px; ">
           	  <br><br><br>


           	   <?php

                    $sql = "SELECT Nazwa, skladTowaru, Cena FROM towara WHERE Kategoria = 'Pizza'";
                    $result = mysqli_query($link, $sql);
                    $licz =0;
                    if(mysqli_num_rows($result) > 0){
                        echo "<table style=\"width:100%; text-align: left;\" >
                           <tr>
							    <td style=\"border-bottom: 1px solid black\"></td>
							    <td style=\"border-bottom: 1px solid black\">Skład pizzy</td>
							    <td style=\"border-bottom: 1px solid black; width:120px\">20cm</td> 
							    <td style=\"border-bottom: 1px solid black; width:120px\">30cm</td>
							    <td style=\"border-bottom: 1px solid black; width:120px\">60cm (OSTROŻNIE!!)</td>
						  	</tr>";
                        while($row = mysqli_fetch_assoc($result)){
                        	if($licz == 2){
                        		echo"<h4>KLASYCZNE</h4>";  
                        	}
                        	$licz++;;
                            echo "<tr >
                            		<td style=\"border-bottom: 1px solid black\">
                            			<a href =\"product.html\">
                                       		".$row["Nazwa"]."
                                   		</a>
                            		</td>
								    <td style=\"border-bottom: 1px solid black;\"><i>" . $row["skladTowaru"] . "</i></td>
								    <td style=\"border-bottom: 1px solid black; width:120px\">" . $row["Cena"]  . "</td> 
								    <td style=\"border-bottom: 1px solid black; width:120px\">" . $row["Cena"]  . "</td>
								    <td style=\"border-bottom: 1px solid black; width:120px\">" . $row["Cena"]  . "</td>
								</tr>";
                        }
                    }
                    echo "</table>";
                ?> 


            </article>

        </section>

    </body>
    
</html>