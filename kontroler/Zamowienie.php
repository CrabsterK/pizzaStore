<?php
require_once( 'Klient.php');
require_once( 'IloscZamowionych.php');

/**
 * @author Arkadiusz Marcinowski CrabsterK
 * @license beerware
 * @access public
 */
class Zamowienie {
	/**
	 * @AttributeType Integer
	 */
	private $_idZamowienie;
	/**
	 * @AttributeType Real
	 */
	private $_kwota;
	/**
	 * @AttributeType Date
	 */
	private $_dataZlozenia;
	/**
	 * @AttributeType Integer
	 */
	private $_adresDostawy;
	/**
	 * @AttributeType Date
	 */
	private $_terminDostarczenia;
	/**
	 * @AttributeType String
	 */
	private $_dostawa;
	/**
	 * @AttributeType String
	 */
	private $_platnos;
	/**
	 * @AttributeType String
	 */
	private $_stat;
	/**
	 * @AssociationType Klient
	 * @AssociationMultiplicity 1
	 */
	public $_unnamed_Klient_;
	/**
	 * @AssociationType IloscZamowionych
	 * @AssociationKind Aggregation
	 */



	/*
	 * Dodaje nowe zamówienie.
	 *
	 *Metoda dodaje nowe zamówienie do bazy danych, o stanie 'nowe'.
	 *
	 */

	 function addNewZamowienie() { 
    	 require 'DB/connection.php';
         $sql = "INSERT INTO Zamowienie (adresDostawy, stat, KlientIdKlient) VALUES ('1', 'nowe', '1')";
         mysqli_query($link, $sql);
    } 


	/*
	 * Zwraca nowe zamówienie.
	 *
	 *Metoda zwraca z bazy danych zamówienie o stanie 'nowe'.
	 *
	 */
    function getNewZamowienie() { 
    	 require 'DB/connection.php';
         $sql = "SELECT IdZamowienie FROM Zamowienie WHERE stat = 'nowe'";
         $result = mysqli_query($link, $sql);
	     $ro=mysqli_fetch_row($result);
	     $IdZamowienie = $ro[0];
         return $IdZamowienie;
    } 

    /*
	 * Ustawia kwotę zamówienia.
	 *
	 *Metoda ustawia kwotę zamówienia do aktualnego zamówienia o stanie 'nowe'.
	 *
	 */
    function setKwotaZamowienia($kwota) { //zakłada ze jest już NOWE
    	require 'DB/connection.php';
        $sql = "UPDATE Zamowienie SET Kwota='$kwota' WHERE stat ='nowe'" ;
        mysqli_query($link, $sql);
    } 

     /*
	 * Ustawia datę zamówienia.
	 *
	 *Metoda ustawia datę zamówienia do aktualnego zamówienia o stanie 'nowe'.
	 *
	 */
    function setDataZlozeniaZamowienia($data) { //zakłada ze jest już NOWE
    	require 'DB/connection.php';
        $sql = "UPDATE Zamowienie SET DataZlozenia='$data' WHERE stat ='nowe'" ;
        mysqli_query($link, $sql);
    } 

   /*
	 * Ustawia sposób dostawy zamówienia.
	 *
	 *Metoda ustawia sposób dostawy zamówienia do aktualnego zamówienia o stanie 'nowe'.
	 *
	 */
    function setDostawaZamowienia($dostawa) { //zakłada ze jest już NOWE
    	require 'DB/connection.php';
        $sql = "UPDATE Zamowienie SET dostawa='$dostawa' WHERE stat ='nowe'" ;
        mysqli_query($link, $sql);
    }

       /*
	 * Ustawia sposób płatności zamówienia.
	 *
	 *Metoda ustawia sposób płatności zamówienia do aktualnego zamówienia o stanie 'nowe'.
	 *
	 */
    function setPlatnoscZamowienia($platnosc) { //zakłada ze jest już NOWE
    	require 'DB/connection.php';
        $sql = "UPDATE Zamowienie SET platnosc='$platnosc' WHERE stat ='nowe'" ;
        mysqli_query($link, $sql);
    }

   /*
	 * Ustawia status zamówienia.
	 *
	 *Metoda ustawia status zamówienia do aktualnego zamówienia o stanie 'nowe'.
	 *
	 */
     function setStatZamowienia($stat) { //zakłada ze jest już NOWE
    	require 'DB/connection.php';
        $sql = "UPDATE Zamowienie SET stat='$stat' WHERE stat ='nowe'" ;
        mysqli_query($link, $sql);
    }

}
?>