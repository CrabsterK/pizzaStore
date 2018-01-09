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
                <br><br><br><br><br>


                   <?php
                        echo 
                        "<table style=\"width:100%; text-align: center;\" >
                             <tr>
                                <td>  
                                    <a href =\"product.html\">
                                        <img id=\"polecanePic\" src=\"img/cola.jpg\">
                                    </a>
                                    <h5>PIZZA MIĘSNA</h5>
                                </td>

                                <td>  
                                    <a href =\"product.html\">
                                        <img id=\"polecanePic\" src=\"img/orange.jpg\">
                                    </a>
                                    <h5>PIZZA CAPRICIOSA</h5>
                                </td>

                                <td>  
                                    <a href =\"product.html\">
                                       <img id=\"polecanePic\" src=\"img/sprite.jpg\">
                                    </a>
                                    <h5>PIZZA PEPERONI</h5>
                                </td>
                            </tr>



                             <tr>
                                <td>  
                                    <a href =\"product.html\">
                                        <img id=\"polecanePic\" src=\"img/piwo.jpg\">
                                    </a>
                                    <h5>PIZZA RIMINI</h5>
                                </td>

                                <td>  
                                    <a href =\"product.html\">
                                        <img id=\"polecanePic\" src=\"img/woda.jpg\">
                                    </a>
                                    <h5>PIZZA BARBADOS</h5>
                                </td>

                                <td>  
                                    <a href =\"product.html\">
                                       <img id=\"polecanePic\" src=\"img/herbata.png\">
                                    </a>
                                    <h5>PIZZA TEKSAŃSKI KURCZAK</h5>
                                </td>
                            </tr>";




                    ?>            
            </article>

        </section>

    </body>
    
</html>