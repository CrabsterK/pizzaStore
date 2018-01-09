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
                 <h4>Promocja! Wszystkie rozmiary pizzy w tej samej cenie!</h4>
                 <br>


                   <?php
                        echo 
                        "<table style=\"width:100%; text-align: center;\" >
                             <tr>
                                <td>  
                                    <a href =\"product.html\">
                                        <img id=\"polecanePic\" src=\"img/pizza1.jpg\">
                                    </a>
                                    <h5>PIZZA MIĘSNA</h5>
                                </td>

                                <td>  
                                    <a href =\"product.html\">
                                        <img id=\"polecanePic\" src=\"img/pizza2.jpg\">
                                    </a>
                                    <h5>PIZZA CAPRICIOSA</h5>
                                </td>

                                <td>  
                                    <a href =\"product.html\">
                                       <img id=\"polecanePic\" src=\"img/pizza3.jpg\">
                                    </a>
                                    <h5>PIZZA PEPERONI</h5>
                                </td>
                            </tr>



                             <tr>
                                <td>  
                                    <a href =\"product.html\">
                                        <img id=\"polecanePic\" src=\"img/pizza4.jpg\">
                                    </a>
                                    <h5>PIZZA RIMINI</h5>
                                </td>

                                <td>  
                                    <a href =\"product.html\">
                                        <img id=\"polecanePic\" src=\"img/pizza5.jpg\">
                                    </a>
                                    <h5>PIZZA BARBADOS</h5>
                                </td>

                                <td>  
                                    <a href =\"product.html\">
                                       <img id=\"polecanePic\" src=\"img/pizza6.jpg\">
                                    </a>
                                    <h5>PIZZA TEKSAŃSKI KURCZAK</h5>
                                </td>
                            </tr>";




                    ?>                





            </article>

        </section>

    </body>
    
</html>