<?php

 require 'DB/connection.php';



  $quantity = $_POST['quantity'];
  $product = $_POST['product'];
  $order = $_POST['order'];
  print_r($_POST);
  $sql = "SELECT * FROM IloscZamowionych WHERE Zamowienie = " . $order . " AND Produkt = " . $product;
  if ($isOrderd = mysqli_query($link, $sql)) {
      if (mysqli_num_rows($isOrderd) == 1) {
          $row = mysqli_fetch_assoc($isOrderd);
          if($quantity == $row['Ilosc']){
              #USUN CAŁY WIERSZ
              $delete= "DELETE FROM zamprod WHERE idZamProd =" . $row['idZamProd'];
              mysqli_query($link, $delete);
              $update = "UPDATE produkt SET Dostenosc = Dostenosc +" . $quantity . " WHERE idProduktu =" . $product;
              echo $update;
              mysqli_query($link, $update);
          }else{
              $update = "UPDATE zamprod SET Ilosc = Ilosc - " . $quantity . " WHERE Produkt =" . $product . " AND Zamowienie = " . $order;
              mysqli_query($link, $update);
              $update = "UPDATE produkt SET Dostenosc = Dostenosc +" . $quantity . " WHERE idProduktu =" . $product;
              mysqli_query($link, $update);
            }
      }
      header('Location: cart.php');
  }
?>