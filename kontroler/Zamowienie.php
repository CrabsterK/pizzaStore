<?php
require_once( 'Klient.php');
require_once( 'IloscZamowionych.php');

/**
 * 1.      Domyœlnym adresem dostawy do klienta jest jego adres w systemie.  
 * @access public
 * @author Arkadiusz
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


	 function addNewZamowienie() { 
    	 require 'DB/connection.php';
         $sql = "INSERT INTO Zamowienie (adresDostawy, stat, KlientIdKlient) VALUES ('1', 'nowe', '1')";
         mysqli_query($link, $sql);
    } 

    function getNewZamowienie() { 
    	 require 'DB/connection.php';
         $sql = "SELECT IdZamowienie FROM Zamowienie WHERE stat = 'nowe'";
         $result = mysqli_query($link, $sql);
	     $ro=mysqli_fetch_row($result);
	     $IdZamowienie = $ro[0];
         return $IdZamowienie;
    } 

    function setKwotaZamowienia($kwota) { //zakłada ze jest już NOWE
    	require 'DB/connection.php';
        $sql = "UPDATE Zamowienie SET Kwota='$kwota' WHERE stat ='nowe'" ;
        mysqli_query($link, $sql);
    } 
    function setDataZlozeniaZamowienia($data) { //zakłada ze jest już NOWE
    	require 'DB/connection.php';
        $sql = "UPDATE Zamowienie SET DataZlozenia='$data' WHERE stat ='nowe'" ;
        mysqli_query($link, $sql);
    } 

    function setDostawaZamowienia($dostawa) { //zakłada ze jest już NOWE
    	require 'DB/connection.php';
        $sql = "UPDATE Zamowienie SET dostawa='$dostawa' WHERE stat ='nowe'" ;
        mysqli_query($link, $sql);
    }

    function setPlatnoscZamowienia($platnosc) { //zakłada ze jest już NOWE
    	require 'DB/connection.php';
        $sql = "UPDATE Zamowienie SET platnosc='$platnosc' WHERE stat ='nowe'" ;
        mysqli_query($link, $sql);
    }

     function setStatZamowienia($stat) { //zakłada ze jest już NOWE
    	require 'DB/connection.php';
        $sql = "UPDATE Zamowienie SET stat='$stat' WHERE stat ='nowe'" ;
        mysqli_query($link, $sql);
    }

}
?>