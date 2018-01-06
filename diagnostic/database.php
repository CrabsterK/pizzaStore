<!DOCTYPE html>
<?php
    require '../PHP3/connection.php';
    echo "<br><br><br><br><br><br>";
    $sql = "SELECT * FROM users";
    $stmt = mysqli_query($link, $sql);
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        
        if(isset($_POST['searchName']) AND isset($_POST['seachLastname'])){
            $name = (string)$_POST["searchName"];
            $lastname = $_POST["searchLastname"];
            $sql = "SELECT * FROM users WHERE userName = '$name' AND userLastname = '$lastname'";
        }
        else if(isset($_POST['searchName'])){
            $name = (string)$_POST["searchName"];
            $sql = "SELECT * FROM users WHERE userName ='$name'";
        }
        else if(isset($_POST['seachLastname'])){
            $lastname = (string)$_POST["searchLastname"];
            $sql = "SELECT * FROM users WHERE userLastname = '$lastname'";
        }
        $stmt = mysqli_query($link, $sql);
        
    }
?>
<html lang="pl">
    <head>
        <meta charset="UTF-8">
        <meta name="keywords" content="">    <!--TODO: keywords-->
        <meta name="description" content="">    <!--TODO: description-->
        <meta name="author" content="Arkadiusz Marcinowski, CrabsterK, Bartosz Przydatek, inspired95">
        <title></title>    <!--TODO: title-->
        <link href="/PHP3/css/general.css" rel="stylesheet" type="text/css">
    </head>
    
    <body>

        <img id="logo" alt="logo" src="/PHP3/img/needanerdHead.png"/>
            
        <header id="menu">
            <script src="/PHP3/js/menu.js"></script>
        </header>
        

        <section>
    
            <h2></h2>
            
            <article>
                <h2>Użytkownicy</h2>
                
                <div>
                    
                        <?php

                            $sql = "SELECT * FROM users";
                            $result = mysqli_query($link, $sql);
                            if(mysqli_num_rows($result) > 0){
                                echo "<table style=\"border:1px solid\">
                                       <tr>
                                           <td>ID</td>
                                           <td>Login</td>
                                           <td>Phone</td>
                                           <td>Name</td>
                                           <td>Lastname</td>
                                           <td>Birthday</td>
                                       </tr>";
                                while($row = mysqli_fetch_assoc($stmt)){
                                    
                                    echo "<tr ><td style=\"border:1px solid;min-width:100px\">" . $row["userID"] . "</td><td style=\"border:1px solid;min-width:100px\">" . $row["userLogin"]. "</td><td style=\"border:1px solid;min-width:100px\">" . $row["userPhone"]. "</td><td style=\"border:1px solid;min-width:100px\">" . $row["userName"]. "</td><td style=\"border:1px solid;min-width:100px\">" . $row["userLastname"]. "</td><td style=\"border:1px solid;min-width:100px\">" . $row["userBirthday"] . "</td></tr>";
                                }
                            }
                    echo "</table>";
                        ?> 
                    
                    <br><br>
                    <?php
                        echo "<form action=\""; echo htmlspecialchars($_SERVER["PHP_SELF"]); echo "\" method=\"post\">
                         <p>Imię: <input type=\"text\" name=\"searchName\"<br>
                         </p>
                         <p>Nazwisko: <input type=\"password\" name=\"searchLastname\"<br>  
                        <br>
                         <input type=\"submit\" value=\"Filtruj\">
                         <input type=\"reset\" value=\"Wyczyść\">
                         <br><br>
                        </form>";
                    ?>
                </div>
            </article>

        </section>

    </body>
    
</html>