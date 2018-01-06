<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="keywords" content="tło, background, size, attachment, repeat, css">
    <meta name="description" content="Strona zawiera przykłady manipulacji tłem w CSS">
    <meta name="author" content="Arkadiusz Marcinowski, CrabsterK, Bartosz Przydatek, inspired95">
    <title>Cookies</title>
    <link href="css/general.css" rel="stylesheet" type="text/css">


    <script src="js/changeStyle.js">


    </script>

</head>

<body>
    <img id="logo" alt="logo" src="img/needanerdHead.png" />

    <header id="menu">
        <ul>
            <script src="js/menu.js"></script>
            
        </ul>
    </header>
    <section>
        <h2>Ustaw swoje preferencje dotyczące wyglądu strony</h2>

        <article id="styleExample">
            <form action="cookiesSave.php" method="post">
                <p>Wybierz kolor czcionki</p>
                <select name="fontColor" id="fontColor" onchange="fontColorFun()">
                    <option value="red">Czerwony</option>
                    <option value="yellow">Żółty</option>
                    <option value="blue">Niebieski</option>
                    <option value="green">Zielony</option>
                    <option value="#4169E1">Błękitny</option>
                    <option value="brown">Brązowy</option>
                    <option value="black">Czarny</option>
                    <option value="white">Biały</option>
                </select>

                <p>Wybierz kolor tła</p>
                <select name="backgroundColor" id="backgroundColor" onchange="backgroundColorFun()">
                    <option value="red">Czerwony</option>
                    <option value="yellow">Żółty</option>
                    <option value="blue">Niebieski</option>
                    <option value="green">Zielony</option>
                    <option value="#4169E1">Błękitny</option>
                    <option value="brown">Brązowy</option>
                    <option value="black">Czarny</option>
                    <option value="white">Biały</option>
                </select>

                <p>Wybierz krój czcionki</p>
                <select name="fontFamily" id="fontFamily" onchange="fontFamilyFun()">
                    <option value="Times, Times New Roman, Georgia, serif">Times New</option>
                    <option value="Verdana, Arial, Helvetica, sans-serif">Arial</option>
                    <option value="Lucida Console, Courier, monospace">Courier</option>
                </select>


                <p>Wybierz wielkość czcionki</p>
                <select name="fontSize" id="fontSize" onchange="fontSizeFun()">
                    <option>40px</option>
                    <option>30px</option>
                    <option>20px</option>
                    <option>16px</option>
                    <option>12px</option>
                    <option>10px</option>
                    <option>7px</option>
                    <option>4px</option>
                </select>

                <p>Wybierz wariant czcionki</p>
                <select name="fontVariant" id="fontVariant" onchange="fontVariantFun()">
                    <option value="normal">normal</option>
                    <option value="small-caps">small-caps</option>
                </select>
                <br><br>
                <input type="submit" value="Zapisz">
            </form>
        </article>
    </section>
    <?php
    
        if(isset($_COOKIE['fontColor'])){
            $fontColor = $_COOKIE["fontColor"];
            echo "<script>";
                echo "fontColorChange(\"$fontColor\");";
            echo "</script>";
        }
    
        if(isset($_COOKIE['backgroundColor'])){
            $backgroundColor = $_COOKIE['backgroundColor'];
            echo "<script>";
                echo "backgroundColorChange(\"$backgroundColor\");";
            echo "</script>";
        }
    
        if(isset($_COOKIE['fontFamily'])){
            $familyFont = $_COOKIE['fontFamily'];
            echo "<script>";
                echo "fontFamilyChange(\"$familyFont\");";
            echo "</script>";
        }
    
        if(isset($_COOKIE['fontSize'])){
            $fontSize = $_COOKIE['fontSize'];
            echo "<script>";
                echo "fontSizeChange(\"$fontSize\");";
            echo "</script>";
        }
    
        if(isset($_COOKIE['fontVariant'])){
            $fontVariant = $_COOKIE['fontVariant'];
            echo "<script>";
                echo "fontVariantChange(\"$fontVariant\");";
            echo "</script>";
        }
    ?>

</body>

</html>
