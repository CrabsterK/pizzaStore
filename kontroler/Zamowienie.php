<?php
require_once( 'kontroler/Klient.php');
require_once( 'kontroler/IloscZamowionych.php');

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

}
?>