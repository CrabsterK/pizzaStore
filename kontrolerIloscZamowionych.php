<?php 

    //dodaje towar do NOWEGO zamówienia. Jeśli takiego nie znajdzie, to tworzy nowe zamówienie i dopiero dodaje do niego towar
    function addTowar($idTowar, $ilosc) {//nie sprawdza czy produkt jest już w koszyku //JAK COŚ SIĘ NIE BĘDZIE ZGADZAŁO< TO TAK TEZ DZIAŁAJĄ KASY W SKLEPACH.
        echo 'exxxxxx';
    	require 'DB/connection.php';
        $sql = "SELECT IdZamowienie FROM Zamowienie WHERE stat = \"nowe\"" ;
        $result = mysqli_query($link, $sql);
        if(mysqli_num_rows($result) > 0){//jeśli jest NOWE zamówienie
            echo '<br>JEST NOWE ZAMÓWIENIE';
            $ro=mysqli_fetch_row($result);
            $IdZamowienie = $ro[0];

            $sqlBYLO = "SELECT (IloscZamowionych, ZamowienieIdZamowienie, TowaraIdTowar) FROM IloscZamowionych WHERE (ZamowienieIdZamowienie = $IdZamowienie AND TowaraIdTowar = $idTowar)";
            $resultBYLO = mysqli_query($link, $sqlBYLO);
            $roBYLO=mysqli_fetch_row($resultBYLO);
            if(mysqli_num_rows($resultBYLO) > 0){//jeśli już jest taki towar w zamówieniu
                echo '<br>JEST JUŻ TAKI TOWAR';
                updateTowar($idTowar, $ilosc + $roBYLO[0]);
            }
            else{
                echo '<br>NIE BYŁO JESZCZE TAKIEGO TOWARU';
            $sql = "INSERT INTO IloscZamowionych (IloscZamowionych, ZamowienieIdZamowienie, TowaraIdTowar) VALUES ($ilosc, $IdZamowienie, $idTowar)";
            mysqli_query($link, $sql);
            echo '<br>dodałam, bo znalazło NOWE';
            }
        }
        else{
            addNewZamowienie();
            echo "<br>UTWORZYŁAM";
            addTowar($idTowar, $ilosc);
            echo '1';
        }
    } 


        //usuwa wszystkie wystąpienia danego towaru w aktywnym zamówieniu / koszyku
      function deleteTowar($idTowar) { //Zakładam że na pewno istnieje NOWE zamówienie
        require 'DB/connection.php';
        $sql = "SELECT IdZamowienie FROM Zamowienie WHERE stat = \"nowe\"" ;
        $result = mysqli_query($link, $sql);
        $ro=mysqli_fetch_row($result);
        $IdZamowienie = $ro[0];
        $sql = "DELETE FROM IloscZamowionych WHERE (TowaraIdTowar = $idTowar AND ZamowienieIdZamowienie = $IdZamowienie)";
        mysqli_query($link, $sql);
        }
        

        function updateTowar($idTowar, $ilosc) { //Zmienia wszystkie wystąpienia
            if($ilosc < 1){
                deleteTowar($idTowar);
            }
            else{
                require 'DB/connection.php';
                $sql = "SELECT IdZamowienie FROM Zamowienie WHERE stat = \"nowe\"" ;
                $result = mysqli_query($link, $sql);
                $ro=mysqli_fetch_row($result);
                $IdZamowienie = $ro[0];
                $sql = "UPDATE IloscZamowionych SET IloscZamowionych=$ilosc WHERE TowaraIdTowar = $idTowar AND ZamowienieIdZamowienie = $IdZamowienie" ;
                mysqli_query($link, $sql);
            }
        }
   


?>
