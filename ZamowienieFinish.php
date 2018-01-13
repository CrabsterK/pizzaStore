 <?PHP
    require 'DB/connection.php';
    include 'kontroler/Adres.php';
    include 'kontroler/Zamowienie.php';


 
    $Adres = new Adres();
    $Adres->updateAdres($_POST['miasto'], $_POST['ulica'], $_POST['numer']);


    $Zamowienie = new Zamowienie();
    $Zamowienie->setKwotaZamowienia($_POST['fullSum']);
    
    //$date = date('Y-m-d');
    $date=new DateTime(); //this returns the current date time
    $resultDate = $date->format('Y-m-d');
    $Zamowienie->setDataZlozeniaZamowienia($resultDate);





  $dostawa = "";
  switch($_POST['dostawa']) {
        case "dostawca":
            $dostawa = "Dostawca";
            break;
        case "osobisty":
            $dostawa = "Odbior osobisty";
            break;
        default:
            $dostawa = "";
    }
    $Zamowienie->setDostawaZamowienia($dostawa);



  $platnosc = "";
  switch($_POST['platnosc']) {
        case "karta":
            $platnosc = "Karta platnicza";
            break;
        case "przelew":
            $platnosc = "Przelew";
            break;
        case "przyodbiorze":
            $platnosc = "Przy odbiorze";
            break;
        default:
            $platnosc = "";
    }
    $Zamowienie->setPlatnoscZamowienia($platnosc);






//to na samym końcu
    $stat = 'zlozone';
    $Zamowienie->setStatZamowienia($stat);







    $backTo = $_POST['backTo'];
 	header("Location: $backTo");

?>
