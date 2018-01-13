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
    
            <h2>Promocje</h2>
            
           <article style="height: 700px; ">
                 <h4>Promocja! Jeden rozmiar pizzy, w cenie małej!!</h4>
             
                  <?php
                        echo 
                        "
                        <table style=\"width:100%; text-align: center;\" >
                             <tr>
                                <td>  
                                    <h3>Sałatka grecka!</h3>
                                    <h4>12 zł!</h4>
                                    <a href =\"#\">
                                        <img id=\"polecanePic\" src=\"img/greek.jpg\">
                                    </a>
                                    <form action=\"add.php\" method=\"POST\">
                                        <input type=\"hidden\" name=\"product\" value= \"1\" >
                                        <input type=\"hidden\" name=\"quantity\" value=\"1\" >
                                        <input type=\"hidden\" name=\"backTo\" value=\"promocje.php\" >
                                        <input type=\"submit\" value=\"Zamów\" name=\"add\" class=\"btn\">
                                    </form>
                                </td>

                                <td>  
                                    <h3>Pizza hawajska!</h3>
                                    <h4>21 zł!</h4>
                                    <a href =\"#\">
                                        <img id=\"polecanePic\" src=\"img/hawai.jpg\">
                                    </a>
                                     <form action=\"add.php\" method=\"POST\">
                                        <input type=\"hidden\" name=\"product\" value= \"11\" >
                                        <input type=\"hidden\" name=\"quantity\" value=\"1\" >
                                        <input type=\"hidden\" name=\"backTo\" value=\"promocje.php\" >
                                        <input type=\"submit\" value=\"Zamów\" name=\"add\" class=\"btn\">
                                    </form>
                                </td>

                                <td>  
                                    <h3>Pizza peperoni!</h3>
                                    <h4>18 zł!</h4>
                                    <a href =\"#\">
                                        <img id=\"polecanePic\" src=\"img/peperoni.jpg\">
                                    </a>
                                     <form action=\"add.php\" method=\"POST\">
                                        <input type=\"hidden\" name=\"product\" value= \"10\" >
                                        <input type=\"hidden\" name=\"quantity\" value=\"1\" >
                                        <input type=\"hidden\" name=\"backTo\" value=\"promocje.php\" >
                                        <input type=\"submit\" value=\"Zamów\" name=\"add\" class=\"btn\">
                                    </form>
                                </td>
                            </tr>";
                    ?>                    
                   

            </article>

        </section>

    </body>
    
</html>