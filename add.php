 <?PHP
    require 'DB/connection.php';
    include 'kontroler/IloscZamowionych.php';



    $IloscZamowionych = new IloscZamowionych();
    $IloscZamowionych->addTowar($_POST['product'], $_POST['quantity']);

    $backTo = $_POST['backTo'];
	header("Location: $backTo");

?>
