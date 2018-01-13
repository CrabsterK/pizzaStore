<?php
require_once('Adres.php');
require_once( 'Zamowienie.php');

/**
 * 1.      Do wystawienia faktury niezbêdny jest NIP klienta.   
 * 2.        Jeœli klient nie poda NIP, traktowany jest jak osoba fizyczna.    
 * 1.      Ka¿dy klient musi podaæ adres.  
 * 2.      Ka¿dy klient musi posiadaæ numer telefonu.  
 * @access public
 * @author Arkadiusz
 */
class Klient {
	/**
	 * @AttributeType String
	 */
	private $_imie;
	/**
	 * @AttributeType String
	 */
	private $_nazwisko;
	/**
	 * @AttributeType String
	 */
	private $_telefon;
	/**
	 * @AssociationType Adres
	 * @AssociationMultiplicity 1
	 */
	private $_adresDostawy;



	/**
	 * @access public
	 */
//	public function showMenu() {
		// Not yet implemented
//	}

	/**
	 * @access public
	 * @param idTowar aInt
	 * @param IdZamowienie aIdZamowienie
	 * @param amount aAmount
	 * @ParamType aInt idTowar
	 * @ParamType aIdZamowienie IdZamowienie
	 * @ParamType aAmount amount
	 */
//	public function addProduct(&idTowar $aInt, &IdZamowienie $aIdZamowienie, &amount $aAmount) {
		// Not yet implemented
//	}

	/**
	 * @access public
	 * @param aInt idTowar
	 * @param IdZamowienie aInt
	 * @param amount aInt
	 * 
	 * @ParamType aInt IdZamowienie
	 * @ParamType aInt amount
	 */
//	public function modifyProduct($idTowar, $aInt, $aInt) {
		// Not yet implemented
//	}

	/**
	 * @access public
	 * @param idTowar aInt
	 * @param IdZamowienie aIdZamowienie
	 * @ParamType aInt idTowar
	 * @ParamType aIdZamowienie IdZamowienie
	 */
//	public function deleteProduct($aInt, $aIdZamowienie) {
		// Not yet implemented
//	}

	/**
	 * @access public
	 * @param adres aAdres
	 * @param idZamowienie aInt
	 * @ParamType aAdres adres
	 * @ParamType aInt idZamowienie
	 */
//	public function changeAdress($aAdres, $aInt) {
		// Not yet implemented
//	}

	/**
	 * @access public
	 * @param dostawa aSposobDostawy
	 * @param idZamowienie aInt
	 * @ParamType aSposobDostawy dostawa
	 * @ParamType aInt idZamowienie
	 */
//	public function changeWay($aSposobDostawy, $aInt) {
		// Not yet implemented
//	}

	/**
	 * @access public
	 * @param sposob aSposobPlatnosci
	 * @param idZamowienie aInt
	 * @ParamType aSposobPlatnosci sposob
	 * @ParamType aInt idZamowienie
	 */
//	public function changePayment($aSposobPlatnosci, $aInt) {
		// Not yet implemented
//	}

	/**
	 * @access public
	 * @param id aInt
	 * @ParamType aInt id
	 */
//	public function makeOrder($aInt) {
		// Not yet implemented
//	}
}
?>