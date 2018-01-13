<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="UTF-8">
        <meta name="keywords" content="pizza, salad, food, jedzenia, restauracja, nocna">    <!--TODO: keywords-->
        <meta name="description" content="Restauracja wysyłkowa z napojami, sałatkami, pizzą.">    <!--TODO: description-->
        <meta name="author" content="Arkadiusz Marcinowski, CrabsterK">
        <title>Napoje</title>    <!--TODO: title-->
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
            <h2>Menu Napoje</h2>
            <article style="height: 700px; ">
                <h4>Kliknij by złożyć szybkie zamówienie!!</h4>
                <br>


                   <?php
                        echo 
                        "<table style=\"width:100%; text-align: center;\" >
                             <tr>
                                <td>  
                                    <form action=\"add.php\" method=\"POST\">
                                        <input type=\"hidden\" name=\"product\" value= \"16\" >
                                        <input type=\"hidden\" name=\"quantity\" value=\"1\" >
                                        <input type=\"hidden\" name=\"backTo\" value=\"drinkmenu.php\" >
                                        <button type=\"submit\" style=\"color: transparent; background-color: transparent; border-color: transparent; cursor: default;\">
                                            <img height=160px width=160px src=\"img/cola.jpg\" />
                                        </button>
                                        <h5>Cola 0,5l - 3 zł</h5>
                                    </form>      
                                </td>

                                <td>  
                                    <form action=\"add.php\" method=\"POST\">
                                        <input type=\"hidden\" name=\"product\" value= \"17\" >
                                        <input type=\"hidden\" name=\"quantity\" value=\"1\" >
                                        <input type=\"hidden\" name=\"backTo\" value=\"drinkmenu.php\" >
                                        <button type=\"submit\" style=\"color: transparent; background-color: transparent; border-color: transparent; cursor: default;\">
                                            <img height=160px width=160px src=\"img/orange.jpg\" />
                                        </button>
                                        <h5>Sok pomarańczowy 0,5l - 5 zł</h5>
                                    </form>      
                                </td>

                                <td>  
                                    <form action=\"add.php\" method=\"POST\">
                                        <input type=\"hidden\" name=\"product\" value= \"20\" >
                                        <input type=\"hidden\" name=\"quantity\" value=\"1\" >
                                        <input type=\"hidden\" name=\"backTo\" value=\"drinkmenu.php\" >
                                        <button type=\"submit\" style=\"color: transparent; background-color: transparent; border-color: transparent; cursor: default;\">
                                            <img height=160px width=160px src=\"img/sprite.jpg\" />
                                        </button>
                                        <h5>Sprite 0,5l - 3 zł</h5>
                                    </form>      
                                </td>
                            </tr>



                             <tr>
                                <td>  
                                    <form action=\"add.php\" method=\"POST\">
                                        <input type=\"hidden\" name=\"product\" value= \"18\" >
                                        <input type=\"hidden\" name=\"quantity\" value=\"1\" >
                                        <input type=\"hidden\" name=\"backTo\" value=\"drinkmenu.php\" >
                                        <button type=\"submit\" style=\"color: transparent; background-color: transparent; border-color: transparent; cursor: default;\">
                                            <img height=160px width=160px src=\"img/piwo.jpg\" />
                                        </button>
                                        <h5>Piwo pszeniczne 0,5l - 5 zł</h5>
                                    </form>      
                                </td>
                               
                                <td>  
                                    <form action=\"add.php\" method=\"POST\">
                                        <input type=\"hidden\" name=\"product\" value= \"19\" >
                                        <input type=\"hidden\" name=\"quantity\" value=\"1\" >
                                        <input type=\"hidden\" name=\"backTo\" value=\"drinkmenu.php\" >
                                        <button type=\"submit\" style=\"color: transparent; background-color: transparent; border-color: transparent; cursor: default;\">
                                            <img height=160px width=160px src=\"img/woda.jpg\" />
                                        </button>
                                        <h5>Woda niegazowana 0,5l - 2 zł</h5>
                                    </form>      
                                </td>

                                <td>  
                                    <form action=\"add.php\" method=\"POST\">
                                        <input type=\"hidden\" name=\"product\" value= \"21\" >
                                        <input type=\"hidden\" name=\"quantity\" value=\"1\" >
                                        <input type=\"hidden\" name=\"backTo\" value=\"drinkmenu.php\" >
                                        <button type=\"submit\" style=\"color: transparent; background-color: transparent; border-color: transparent; cursor: default;\">
                                            <img height=160px width=160px src=\"img/herbata.png\" />
                                        </button>
                                        <h5>Herbata czarna 250ml - 4 zł</h5>
                                    </form>      
                                </td>
                            </tr>";

                    ?>  

            </article>

        </section>

    </body>
    
</html>