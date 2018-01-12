<?php

/**
 * @access public
 * @author Arkadiusz
 */
class Adres {
	/**
	 * @AttributeType String
	 */
	private $_miasto;
	/**
	 * @AttributeType String
	 */
	private $_ulica;
	/**
	 * @AttributeType String
	 */
	private $_nrMieszkania;
	/**
	 * @AssociationType U¿ytkownik
	 * @AssociationMultiplicity 1..*
	 */
	public $_unnamed_Uzytkownik_ = array();






	  function updateMiastoAdres($miasto) {
        require 'DB/connection.php';
        $sql = "UPDATE Adres SET Miasto='$miasto' WHERE IdAdres ='1'" ;
        mysqli_query($link, $sql);
    }

    function updateUlicaAdres($ulica) {
        require 'DB/connection.php';
        $sql = "UPDATE Adres SET Ulica='$ulica' WHERE IdAdres ='1'" ;
        mysqli_query($link, $sql);
    }

    function updateNrAdres($NrMieszkania) {
        require 'DB/connection.php';
        $sql = "UPDATE Adres SET NrMieszkania='$NrMieszkania' WHERE IdAdres ='1'" ;
        mysqli_query($link, $sql);
    }

    function updateAdres($miasto, $ulica, $NrMieszkania) {
        require 'DB/connection.php';
        $sql = "UPDATE Adres SET Miasto = '$miasto', Ulica = '$ulica',  NrMieszkania='$NrMieszkania' WHERE IdAdres ='1'" ;
        mysqli_query($link, $sql);
    }
}
?>