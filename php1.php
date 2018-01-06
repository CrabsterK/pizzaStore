<!DOCTYPE html>
<html lang="pl">



    <head>
        <meta charset="UTF-8">
        <meta name="keywords" content="">    <!--TODO: keywords-->
        <meta name="description" content="">    <!--TODO: description-->
        <meta name="author" content="Arkadiusz Marcinowski, CrabsterK, Bartosz Przydatek, inspired95">
        <title></title>    <!--TODO: title-->
        <link href="css/general.css" rel="stylesheet" type="text/css">
    </head>
    
    <body>
               

        <img id="logo" alt="logo" src="img/needanerdHead.png"/>
            
        <header id="menu">
            <script src="js/menu.js"></script>
        </header>
         

        <section>
    
            <h2></h2>
            
            <article>
               <a id="#"></a>
                <h2>Tutaj jakiś śmieszny tytuł</h2>
                
                  <form action="phpPOST.php" method="post">

                    Imię
                    <input name="name" style="width: 20%;" onfocus="focusFun(this)" onblur="blurFun(this)" id="fname" class="normalInput" type="text">
                    <p class="hint" id="fnameRequest"></p>
                    <br>
                   
                    Nazwisko
                    <input name="lastname" style="width: 20%;" onfocus="focusFun(this)" onblur="blurFun(this)" id="lname" class="normalInput"  type="text">
                    <p class="hint" id="lnameRequest"></p>
                    <br>
                    
                    E-mail
                    <input name="email" style="width: 20%;" onfocus="focusFun(this)" onblur="blurFun(this)" id="email" class="normalInput"  type="email">
                    <p class="hint" id="mailRequest"></p>
                    <br>
                    
                    Telefon 
                    <input name="phone" placeholder="XXX-XXX-XXX" style="width: 20%;" onfocus="focusFun(this)" onblur="blurFun(this)" id="phone" class="normalInput"  type="tel">
                    <p class="hint" id="phoneRequest"></p>
                    <br>
                   
                    Czy masz psa?  
                    <br>
                    <input name="doggo" type="radio" value="tak">Tak<br>
                    <input name="doggo" type="radio" value="nie">Nie<br>
                    <input name="doggo" type="radio" value="nie wiem">Nie wiem<br>
                    <br>

                    Zainterewowania
                    <br>
                    <input name="answerSport" type="checkbox">Lubię sport<br>
                    <input name="answerBooks" type="checkbox">Lubię książki<br>
                    <br>

                    Język
                    <br>
                    <input name="language" placeholder="Twój język" list="language">
                        <datalist id="language">
                            <option>Polski</option>
                            <option>Angielski</option>
                            <option>Niemiecki</option>
                            <option>Francuski</option>
                        </datalist>
                    <br> <br> <br>
                   
                    <input class="btn"  type="submit" value="Wyślij">
                    <input class="btn"  type="reset" value="Wyczyść">
                    

                   
                </form>
            </article>

        </section>

    </body>
    
</html>