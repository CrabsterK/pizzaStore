<?php 

    function addNewZamowienie() { 
    	 require 'DB/connection.php';
         $sql = "INSERT INTO Zamowienie (stat, KlientIdKlient) VALUES ('nowe', '1')";
         mysqli_query($link, $sql);
    } 

    function setKwotaZamowienia($kwota) { //zakłada ze jest już NOWE
    	require 'DB/connection.php';
        $sql = "UPDATE Zamowienie SET Kwota=$kwota WHERE stat ='nowe'" ;
        mysqli_query($link, $sql);
    } 
    function setDataZlozeniaZamowienia($data) { //zakłada ze jest już NOWE
    	require 'DB/connection.php';
        $sql = "UPDATE Zamowienie SET DataZlozenia=$data WHERE stat ='nowe'" ;
        mysqli_query($link, $sql);
    } 

    function setDostawaZamowienia($dostawa) { //zakłada ze jest już NOWE
    	require 'DB/connection.php';
        $sql = "UPDATE Zamowienie SET dostawa=$dostawa WHERE stat ='nowe'" ;
        mysqli_query($link, $sql);
    }

    function setPlatnoscZamowienia($platnosc) { //zakłada ze jest już NOWE
    	require 'DB/connection.php';
        $sql = "UPDATE Zamowienie SET platnosc=$platnosc WHERE stat ='nowe'" ;
        mysqli_query($link, $sql);
    }

     function setStatZamowienia($platnosc) { //zakłada ze jest już NOWE
    	require 'DB/connection.php';
        $sql = "UPDATE Zamowienie SET stat=$stat WHERE stat ='nowe'" ;
        mysqli_query($link, $sql);
    }


?>