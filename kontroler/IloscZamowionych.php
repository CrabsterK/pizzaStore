<?php
require_once( 'Zamowienie.php');
require_once( 'Towar.php');

/**
 * @access public
 * @author Arkadiusz
 */
class IloscZamowionych {
	/**
	 * @AttributeType Integer
	 */
	private $_idIloscZamowionych;
	/**
	 * @AttributeType Integer
	 */
	private $_iloscZamowionych;
	/**
	 * @AssociationType Zamówienie
	 */
	public $_unnamed_Zamówienie_;
	/**
	 * @AssociationType Towar
	 * @AssociationKind Aggregation
	 */
	public $_unnamed_Towar_;





	function addTowar($idTowar, $ilosc) {//Sprawdza czy produkt jest już w koszyku i jeśli tak to dodaje ilość
	        //echo 'exxxxxx';
	    	require 'DB/connection.php';
	        $sql = "SELECT IdZamowienie FROM Zamowienie WHERE stat = \"nowe\"" ;
	        $result = mysqli_query($link, $sql);
	        if(mysqli_num_rows($result) > 0){//jeśli jest NOWE zamówienie
	           // echo '<br>JEST NOWE ZAMÓWIENIE';
	            $ro=mysqli_fetch_row($result);
	            $IdZamowienie = $ro[0];

	            $sqlBYLO = "SELECT IloscZamowionych, ZamowienieIdZamowienie, TowaraIdTowar FROM IloscZamowionych WHERE (ZamowienieIdZamowienie = $IdZamowienie AND TowaraIdTowar = $idTowar)";
	            $resultBYLO = mysqli_query($link, $sqlBYLO);
	            $roBYLO=mysqli_fetch_row($resultBYLO);
	            if(mysqli_num_rows($resultBYLO) > 0){//jeśli już jest taki towar w zamówieniu
	                //echo '<br>JEST JUŻ TAKI TOWAR';
	                $this->updateTowar($idTowar, $ilosc + $roBYLO[0]);
	            }
	            else{
	                //echo '<br>NIE BYŁO JESZCZE TAKIEGO TOWARU';
	            $sql = "INSERT INTO IloscZamowionych (IloscZamowionych, ZamowienieIdZamowienie, TowaraIdTowar) VALUES ($ilosc, $IdZamowienie, $idTowar)";
	            mysqli_query($link, $sql);
	            //echo '<br>dodałam, bo znalazło NOWE';
	            }
	        }
	        else{
	        	$Zamowienie = new Zamowienie();
	            $Zamowienie->addNewZamowienie();
	            //echo "<br>UTWORZYŁAM";
	            $this->addTowar($idTowar, $ilosc);
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
        

        function updateTowar($idTowar, $ilosc) { //Zmienia wszystkie wystąpienia. Ustawia ilość na podaną. Jeśli ilość =0, to usuwa towar.
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



	/**
	 * @access public
	 * @param Zamówienie aUnnamed_Zamówienie_
	 * @return void
	 * @ParamType aUnnamed_Zamówienie_ Zamówienie
	 * @ReturnType void
	 */
	public function setUnnamed_Zamówienie_(Zamówienie $aUnnamed_Zamówienie_) {
		$this->_unnamed_Zamówienie_ = $aUnnamed_Zamówienie_;
	}

	/**
	 * @access public
	 * @return Zamówienie
	 * @ReturnType Zamówienie
	 */
	public function getUnnamed_Zamówienie_() {
		return $this->_unnamed_Zamówienie_;
	}

	/**
	 * @access public
	 * @param Towar aUnnamed_Towar_
	 * @return void
	 * @ParamType aUnnamed_Towar_ Towar
	 * @ReturnType void
	 */
	public function setUnnamed_Towar_(Towar $aUnnamed_Towar_) {
		$this->_unnamed_Towar_ = $aUnnamed_Towar_;
	}

	/**
	 * @access public
	 * @return Towar
	 * @ReturnType Towar
	 */
	public function getUnnamed_Towar_() {
		return $this->_unnamed_Towar_;
	}
}
?>