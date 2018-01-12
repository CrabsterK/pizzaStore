 <?PHP
    require 'DB/connection.php';
    include 'kontroler/IloscZamowionych.php';



    $IloscZamowionych = new IloscZamowionych();
    $IloscZamowionych->deleteTowar($_POST['product']);

    $backTo = $_POST['backTo'];
    header("Location: $backTo");

?>
