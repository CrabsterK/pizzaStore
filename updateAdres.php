 <?PHP
    require 'DB/connection.php';
    include 'kontroler/Adres.php';


 
    $Adres = new Adres();
    $Adres->updateAdres($_POST['miasto'], $_POST['ulica'], $_POST['numer']);


    $backTo = $_POST['backTo'];
 	header("Location: $backTo");

?>
