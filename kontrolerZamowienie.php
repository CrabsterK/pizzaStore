<?php 

    function addNewZamowienie() { 
    	 require 'DB/connection.php';
         $sql = "INSERT INTO Zamowienie (stat, KlientIdKlient) VALUES ('nowe', '1')";
         mysqli_query($link, $sql);
    } 
?>