<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="UTF-8">
        <meta name="keywords" content="pizza, salad, food, jedzenia, restauracja, nocna">    <!--TODO: keywords-->
        <meta name="description" content="Restauracja wysyłkowa z napojami, sałatkami, pizzą.">    <!--TODO: description-->
        <meta name="author" content="Arkadiusz Marcinowski, CrabsterK">
        <title>Strona główna</title>    <!--TODO: title-->
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
    
            <h2>Polecane</h2>
            
            <article style="height: 700px; ">
                 <h4>Kliknij by złożyć szybkie zamówienie!!</h4>
                 <br>


                   <?php
                        echo
                        "<table style=\"width:100%; text-align: center;\" >
                            <tr>
                                <td>  
                                    <form action=\"add.php\" method=\"POST\">
                                        <input type=\"hidden\" name=\"product\" value= \"7\" >
                                        <input type=\"hidden\" name=\"quantity\" value=\"1\" >
                                        <input type=\"hidden\" name=\"backTo\" value=\"index.php\" >
                                        <button type=\"submit\" style=\"color: transparent; background-color: transparent; border-color: transparent; cursor: default;\">
                                            <img height=160px width=160px src=\"img/pizza1.jpg\" />
                                        </button>
                                        <h5>PIZZA MIĘSNA</h5>
                                    </form>      
                                </td>

                                 <td>  
                                    <form action=\"add.php\" method=\"POST\">
                                        <input type=\"hidden\" name=\"product\" value= \"8\" >
                                        <input type=\"hidden\" name=\"quantity\" value=\"1\" >
                                        <input type=\"hidden\" name=\"backTo\" value=\"index.php\" >
                                        <button type=\"submit\" style=\"color: transparent; background-color: transparent; border-color: transparent; cursor: default;\">
                                            <img height=160px width=160px src=\"img/pizza2.jpg\" />
                                        </button>
                                        <h5>PIZZA CAPRICIOSA</h5>
                                    </form>      
                                </td>

                                <td>  
                                    <form action=\"add.php\" method=\"POST\">
                                        <input type=\"hidden\" name=\"product\" value= \"10\" >
                                        <input type=\"hidden\" name=\"quantity\" value=\"1\" >
                                        <input type=\"hidden\" name=\"backTo\" value=\"index.php\" >
                                        <button type=\"submit\" style=\"color: transparent; background-color: transparent; border-color: transparent; cursor: default;\">
                                            <img height=160px width=160px src=\"img/pizza3.jpg\" />
                                        </button>
                                        <h5>PIZZA PEPERONI</h5>
                                    </form>      
                                </td> 
                            </tr>



                            <tr>
                                <td>  
                                    <form action=\"add.php\" method=\"POST\">
                                        <input type=\"hidden\" name=\"product\" value= \"12\" >
                                        <input type=\"hidden\" name=\"quantity\" value=\"1\" >
                                        <input type=\"hidden\" name=\"backTo\" value=\"index.php\" >
                                        <button type=\"submit\" style=\"color: transparent; background-color: transparent; border-color: transparent; cursor: default;\">
                                            <img height=160px width=160px src=\"img/pizza4.jpg\" />
                                        </button>
                                        <h5>PIZZA RIMINI</h5>
                                    </form>      
                                </td> 

                                <td>  
                                    <form action=\"add.php\" method=\"POST\">
                                        <input type=\"hidden\" name=\"product\" value= \"13\" >
                                        <input type=\"hidden\" name=\"quantity\" value=\"1\" >
                                        <input type=\"hidden\" name=\"backTo\" value=\"index.php\" >
                                        <button type=\"submit\" style=\"color: transparent; background-color: transparent; border-color: transparent; cursor: default;\">
                                            <img height=160px width=160px src=\"img/pizza5.jpg\" />
                                        </button>
                                        <h5>PIZZA BARBADOS</h5>
                                    </form>      
                                </td> 

                                <td>  
                                    <form action=\"add.php\" method=\"POST\">
                                        <input type=\"hidden\" name=\"product\" value= \"14\" >
                                        <input type=\"hidden\" name=\"quantity\" value=\"1\" >
                                        <input type=\"hidden\" name=\"backTo\" value=\"index.php\" >
                                        <button type=\"submit\" style=\"color: transparent; background-color: transparent; border-color: transparent; cursor: default;\">
                                            <img height=160px width=160px src=\"img/pizza6.jpg\" />
                                        </button>
                                        <h5>PPIZZA TEKSAŃSKI KURCZAK</h5>
                                    </form>      
                                </td> 
                            </tr>";
                    ?>                

            </article>

        </section>

    </body>
    
</html>