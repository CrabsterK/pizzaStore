<?php 

    function updateMiastoAdres($miasto) { //zakłada ze jest już NOWE
        require 'DB/connection.php';
        $sql = "UPDATE Adres SET Miasto=$miasto WHERE IdAdres =1" ;
        mysqli_query($link, $sql);
    }

    function updateUlicaAdres($ulica) { //zakłada ze jest już NOWE
        require 'DB/connection.php';
        $sql = "UPDATE Adres SET Ulica=$ulica WHERE IdAdres =1" ;
        mysqli_query($link, $sql);
    }

    function updateNrAdres($NrMieszkania) { //zakłada ze jest już NOWE
        require 'DB/connection.php';
        $sql = "UPDATE Adres SET NrMieszkania=$NrMieszkania WHERE IdAdres =1" ;
        mysqli_query($link, $sql);
    }


?>