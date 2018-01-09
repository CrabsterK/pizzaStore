<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="UTF-8">
        <meta name="keywords" content="pizza, salad, food, jedzenia, restauracja, nocna">    <!--TODO: keywords-->
        <meta name="description" content="Restauracja wysyłkowa z napojami, sałatkami, pizzą.">    <!--TODO: description-->
        <meta name="author" content="Arkadiusz Marcinowski, CrabsterK">
        <title>Promocje</title>    <!--TODO: title-->
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
    
            <h2>Promocje</h2>
            
           <article style="height: 700px; ">
                 <br><br><br> <br>
                  <?php
                        echo 
                        "<table style=\"width:100%; text-align: center;\" >
                             <tr>
                                <td>  
                                    <h3>PIZZA</h3>
                                    <a href =\"product.html\">
                                        <img id=\"polecanePic\" src=\"img/greek.jpg\">
                                    </a>
                                </td>

                                <td>  
                                    <h3>NAPOJE</h3>
                                    <a href =\"product.html\">
                                        <img id=\"polecanePic\" src=\"img/hawai.jpg\">
                                    </a>
                                </td>

                                <td>  
                                    <h3>SAŁATKI</h3>
                                    <a href =\"product.html\">
                                        <img id=\"polecanePic\" src=\"img/peperoni.jpg\">
                                    </a>
                                </td>
                            </tr>";
                    ?>                    
                   

            </article>

        </section>

    </body>
    
</html>