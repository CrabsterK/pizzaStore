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
}
?>