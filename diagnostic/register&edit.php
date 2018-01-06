<?PHP
    session_start();
    require '../PHP3/connection.php';
    echo "<br><br><br><br><br><br><br><br><br>";

    echo '$_POST: ';
        echo "<pre>";
        var_dump($_POST);
        echo "</pre>";
        echo "<br>Current path: ";
        echo getcwd();
        echo "<br>";

    function availabilityOfLogin($login){
        require '../PHP3/connection.php';
        $sql = "SELECT userLogin FROM users WHERE userLogin = ?";
        if($av = mysqli_prepare($link, $sql)){
            mysqli_stmt_bind_param($av, "s", $login);
            if(mysqli_stmt_execute($av)){
                mysqli_stmt_store_result($av);
                if($av->num_rows > 0){
                    echo "<br>Login zajęty";
                    return false;
                }else{
                    echo "<br>Login wolny";
                    return true;
                }        
            }
        }
    }

    if(isset($_SESSION['logged'])){
		$regLogin = $_SESSION['userLogin'];
		$sql = "SELECT userPassword, userEmail, userPhone, userName, userLastname, userBirthday FROM users WHERE userLogin='$regLogin'";
		$result = mysqli_query($link, $sql);
		$row=mysqli_fetch_row($result);


		$_SESSION['pass'] = $row[0];
		$_SESSION['mail'] = $row[1];
		$_SESSION['phone'] = $row[2];
		$_SESSION['name'] = $row[3];
		$_SESSION['lastname'] = $row[4];
		$_SESSION['birth'] = $row[5];


		$regPassword = $_SESSION['pass'];
		$regEmail = $_SESSION['mail'];
		$regTel = $_SESSION['phone'];
		$regName = $_SESSION['name'];
		$regLastname = $_SESSION['lastname'];
		$regBirthday = $_SESSION['birth'];
		$_SESSION['login'] = $regLogin;


		//$_POST['regLogin'] = $regLogin;
		//$_POST['regPassword'] = $regPassword;
		//$_POST['regEmail'] = $regEmail;
		//$_POST['regTel'] = $regTel;
		//$_POST['regName'] = $regName;
		//$_POST['regLastname'] = $regLastname;
		//$_POST['regBirthday'] = $regBirthday;

        if($_SERVER['REQUEST_METHOD'] == "POST"){
            	


 			



            
            if(empty($_POST["regPassword"])){
                $regPassword_err = 'Pole jest puste2';
            }else{
                $newPassword = $_POST["regPassword"];
            }
            if((strlen($newPassword)< 24) AND (strlen($newPassword)>7)){
                $db_password = $newPassword;
            }else{
                $regPassword_err = "Hasło musi być dłuższe od 7 i krótsze niż 24 znaki";
            }


            if(!empty($_POST['regEmail']) AND filter_var($_POST['regEmail'], FILTER_VALIDATE_EMAIL)){
                $db_email = $_POST['regEmail'];
            }
           
            if(!empty($_POST['regEmail']) AND !filter_var($_POST['regEmail'], FILTER_VALIDATE_EMAIL)){
                $regEmail_err = "Nieprawidłowy email (xxxx@xx.xx)";
            }
            
            if(!empty($_POST['regTel']) AND preg_match("/^[0-9]{3}[0-9]{3}[0-9]{3}$/", $_POST['regTel'])){
                $db_tel = $_POST['regTel'];

            }
             
            if(!empty($_POST['regTel']) AND !preg_match("/^[0-9]{3}[0-9]{3}[0-9]{3}$/", $_POST['regTel'])){
                $regTel_err = "Nieprawidłowy numer telefonu (9 cyfr)";
            }
            




   

 			if(!empty($_POST['regName']) AND (preg_match("/^[a-zA-Z ]*$/",$_POST['regName']))){
                $db_name = $_POST['regName'];

            }
             
            if(!empty($_POST['regName']) AND !(preg_match("/^[a-zA-Z ]*$/",$_POST['regName']))){
                $regName_err = "Niepoprawne imię (same litery)";

            }




            if(!empty($_POST['regLastname']) AND (preg_match("/^[a-zA-Z ]*$/",$_POST['regLastname']))){
                $db_lastname = $_POST['regLastname'];

            }
             
            if(!empty($_POST['regLastname']) AND !(preg_match("/^[a-zA-Z ]*$/",$_POST['regLastname']))){
                $regLastname_err = "Niepoprawne nazwisko (same litery)";

            }




           
            
            if(!empty($_POST['regBirthday'])){
                $db_birthday = $_POST['regBirthday'];
            }
           



			if(empty($_POST['regEmail'])){
                $db_email = "";
            }
			if(empty($_POST['regTel'])){
                $db_tel = "";
            }
            if(empty($_POST['regName'])){
                $db_name = "";
            }
            if(empty($_POST['regLastname'])){
                $db_lastname = "";
            }
            if(empty($_POST['regBirthday'])){
                $db_birthday = "";
            }


               
            if(empty($regPassword_err) AND empty($regEmail_err) AND empty($regTel_err) AND empty($regName_err) AND empty($regLastname_err)){
                //Update jeśli wszystko ok

            	//echo "$db_password  $regPassword \n"; //nowy, stary
          		if($db_password != $regPassword){
          			$_SESSION['pass'] = $db_password;
					$regPassword = $_SESSION['pass'];
					$sql = "UPDATE users SET userPassword='$db_password' WHERE userLogin='$regLogin'";
					if(mysqli_query($link, $sql)){
					    echo "Password updated successfully. <br>";
					} 
					else {
					    echo "ERROR: Could not able to execute password update $sql. <br>" . mysqli_error($link);
					}
				}

				//echo "$db_email  $regEmail \n"; //nowy, stary
          		if($db_email != $regEmail){
          			$_SESSION['mail'] = $db_email;
					$regEmail = $_SESSION['mail'];
					if($db_email ==""){
						$sql = "UPDATE users SET userEmail= NULL WHERE userLogin='$regLogin'";
					}
					else{
						$sql = "UPDATE users SET userEmail='$db_email' WHERE userLogin='$regLogin'";
					}
					
					if(mysqli_query($link, $sql)){
					    echo "Email updated successfully.<br>";
					} 
					else {
					    echo "ERROR: Could not able to execute email update $sql. <br>" . mysqli_error($link);
					}
				}

				//echo "$db_tel  $regTel \n"; //nowy, stary
          		if($db_tel != $regTel){
          			$_SESSION['phone'] = $db_tel;
					$regTel = $_SESSION['phone'];
					if($db_tel ==""){
						$sql = "UPDATE users SET userPhone= NULL WHERE userLogin='$regLogin'";
					}
					else{
						$sql = "UPDATE users SET userPhone='$db_tel' WHERE userLogin='$regLogin'";
					}
					
					if(mysqli_query($link, $sql)){
					    echo "Phone updated successfully.<br>";
					} 
					else {
					    echo "ERROR: Could not able to execute phone update $sql. <br>" . mysqli_error($link);
					}
				}

				//echo "$db_name  $regName \n"; //nowy, stary
				if($db_name != $regName){
          			$_SESSION['name'] = $db_name;
					$regName = $_SESSION['name'];
					if($db_name ==""){
						$sql = "UPDATE users SET userName= NULL WHERE userLogin='$regLogin'";
					}
					else{
						$sql = "UPDATE users SET userName='$db_name' WHERE userLogin='$regLogin'";
					}
					
					if(mysqli_query($link, $sql)){
					    echo "Name updated successfully.<br>";
					} 
					else {
					    echo "ERROR: Could not able to execute name update $sql. <br>" . mysqli_error($link);
					}
				}


				//echo "$db_lastname  $regLastname \n"; //nowy, stary
          		if($db_lastname != $regLastname){
          			$_SESSION['lastname'] = $db_lastname;
					$regLastname = $_SESSION['lastname'];
					if($db_lastname ==""){
						$sql = "UPDATE users SET userLastname= NULL WHERE userLogin='$regLogin'";
					}
					else{
						$sql = "UPDATE users SET userLastname='$db_lastname' WHERE userLogin='$regLogin'";
					}
					
					if(mysqli_query($link, $sql)){
					    echo "Lastname updated successfully.<br>";
					} 
					else {
					    echo "ERROR: Could not able to execute lastname update $sql. <br>" . mysqli_error($link);
					}
				}


				//echo "$db_birthday  $regBirthday \n"; //nowy, stary
          		if($db_birthday != $regBirthday){
          			$_SESSION['birth'] = $db_birthday;
					$regBirthday = $_SESSION['birth'];
					if($db_birthday ==""){
						$sql = "UPDATE users SET userBirthday= NULL WHERE userLogin='$regLogin'";
					}
					else{
						$sql = "UPDATE users SET userBirthday='$db_birthday' WHERE userLogin='$regLogin'";
					}
					
					if(mysqli_query($link, $sql)){
					    echo "Birth date updated successfully.<br>";
					} 
					else {
					    echo "ERROR: Could not able to execute birth date update $sql. <br>" . mysqli_error($link);
					}
				}
        	}	
        }  


        //edycja
    }else{
        $regLogin=$regPassword=$regEmail=$regTel=$regName=$regLastname=$regBirthday = "";
        $regLogin_err=$regPassword_err=$regEmail_err=$regTel_err=$regName_err=$regLastname_err= "";
        

        if($_SERVER['REQUEST_METHOD'] == "POST"){
            if(empty($_POST["regLogin"])){
                $regLogin_err = 'Pole jest puste';
            }else{
                echo "Login set<br>";
                $regLogin = $_POST["regLogin"];
            }
            
            if(empty($_POST["regPassword"])){
                $regPassword_err = 'Pole jest puste';
            }else{
                echo "Password set<br>";
                $regPassword = $_POST["regPassword"];
            }
            if(!empty($_POST['regEmail']) AND filter_var($_POST['regEmail'], FILTER_VALIDATE_EMAIL)){
                echo "<br>Email set";
                $db_email = $_POST['regEmail'];

            }
            if(!empty($_POST['regEmail']) AND !filter_var($_POST['regEmail'], FILTER_VALIDATE_EMAIL)){
                
                $regEmail_err = "Nieprawidłowy email (xxxx@xx.xx)";
            }
            
            if(!empty($_POST['regTel']) AND preg_match("/^[0-9]{3}[0-9]{3}[0-9]{3}$/", $_POST['regTel'])){
                echo "<br>Phone set";
                $db_tel = $_POST['regTel'];

            }
            if(!empty($_POST['regTel']) AND !preg_match("/^[0-9]{3}[0-9]{3}[0-9]{3}$/", $_POST['regTel'])){
                $regTel_err = "Nieprawidłowy numer telefonu (9 cyfr)";
            }
            
            if(!empty($_POST['regName']) AND (preg_match("/^[a-zA-Z]*$/",$_POST['regName']))){
                echo "<br>Name set";
                $db_name = $_POST['regName'];

            }
            if(!empty($_POST['regName']) AND !(preg_match("/^[a-zA-Z]*$/",$_POST['regName']))){
                $regName_err = "Niepoprawne imię (same litery)";
            }
            
            if(!empty($_POST['regLastname']) AND (preg_match("/^[a-zA-Z]*$/",$_POST['regLastname']))){
                echo "<br>Lastname set";
                $db_lastname = $_POST['regLastname'];

            }
            if(!empty($_POST['regLastname']) AND !(preg_match("/^[a-zA-Z]*$/",$_POST['regLastname']))){
                $regLastname_err = "Niepoprawne nazwisko (same litery)";
            }
            
            if(!empty($_POST['regBirthday'])){
                echo "<br>Birday set";
                $db_birthday = $_POST['regBirthday'];
            }
            if((empty($regLogin_err)) AND (empty($regPassword_err))){
                if(availabilityOfLogin($regLogin)){
                    if((strlen($regLogin)< 15) AND (strlen($regLogin)>4)){
                        echo "<br>Login length OK";
                        $db_login = $regLogin;
                        if((strlen($regPassword)< 24) AND (strlen($regPassword)>7)){
                            echo "<br>Pass length OK";
                            $db_password = $regPassword;
                        }else{
                            $regPassword_err = "Hasło musi być dłuższe od 7 i krótsze niż 24 znaki";
                        }
                    }else{
                        $regLogin_err = "Login musi być dłuższy od 4 i krótszy niż 15 znaków";
                    }
                }else{
                    $regLogin_err = "Login zajęty";
                }
                
                if(empty($regLogin_err) AND empty($regPassword_err) AND empty($regEmail_err) AND empty($regTel_err) AND empty($regName_err) AND empty($regLastname_err)){
                    //Dodawanie jeśli wszystko ok
                    echo "<br>";
                    $sql = "INSERT INTO users (userLogin, userPassword, userEmail, userPhone, userName, userLastname, userBirthday) VALUES (?,?,?,?,?,?,?)";
                    echo "<br>$sql";
                    if($stmt = mysqli_prepare($link, $sql)){
                        mysqli_stmt_bind_param($stmt, "sssssss", $regLogin, $regPassword, $db_email, $db_tel, $db_name, $db_lastname, $db_birthday);
                        
                        if(mysqli_stmt_execute($stmt)){
                            echo "<br>Executed";
                            //header("Location: login.php");
                        }
                        
                    }
                }
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="UTF-8">
        <meta name="keywords" content="">    <!--TODO: keywords-->
        <meta name="description" content="">    <!--TODO: description-->
        <meta name="author" content="Arkadiusz Marcinowski, CrabsterK, Bartosz Przydatek, inspired95">
        <title>
            <?PHP
                if(isset($_SESSION['logged'])){
                   echo "Edytowanie danych";
                }else{
                    echo "Rejestracja konta";
                }
            ?>
        </title>
        <link href="../css/general.css" rel="stylesheet" type="text/css">
    </head>
    
    <body>

        <img id="logo" alt="logo" src="../img/needanerdHead.png"/>
            
        <header id="menu">
            <script src="/PHP3/js/menu.js"></script>
        </header>
        

        <section>
    
            <h2>
                <?PHP
                    if(isset($_SESSION['logged'])){
                        echo "Edytowanie danych";
                    }else{
                        echo "Rejestracja konta";
                    }
                ?>
            </h2>
            
            <article>
               <?php
                if(isset($_SESSION['logged'])){
                    echo "<form action=\""; echo htmlspecialchars($_SERVER["PHP_SELF"]); echo "\" method=\"post\">
                     <p>Login: <input type=\"text\" name=\"regLogin\" disabled=\"disabled\" value=$regLogin>*<br>
                     </p>
                     <p>Hasło: <input type=\"text\" name=\"regPassword\" required value=$regPassword>*<br>  
                     </p>
                     <p>Email: <input type=\"email\" name=\"regEmail\" value=$regEmail>
                     </p>
                     <p>Telefon: <input type=\"tel\" name=\"regTel\" value=$regTel>
                     </p>
                     <p>Imię: <input type=\"text\" name=\"regName\" value=$regName>
                     </p>
                     <p>Nazwisko: <input type=\"text\" name=\"regLastname\" value=$regLastname>
                     </p>
                     <p>Data urodzenia: <input type=\"date\" name=\"regBirthday\" value=$regBirthday></p>
                     <input type=\"submit\" value=\"Aktualizuj\">
                     <br><br>
                     <p class=\"hint\">* - pole wymagane</p>
                 </form>";
                }else{
                echo "<form action=\""; echo htmlspecialchars($_SERVER["PHP_SELF"]); echo "\" method=\"post\">
                     <p>Login: <input type=\"text\" name=\"regLogin\" required>*<br>
                     </p>
                     <p>Hasło: <input type=\"password\" name=\"regPassword\" required>*<br>  
                     </p>
                     <p>Email: <input type=\"email\" name=\"regEmail\">
                     </p>
                     <p>Telefon: <input type=\"tel\" name=\"regTel\">
                     </p>
                     <p>Imię: <input type=\"text\" name=\"regLName\">
                     </p>
                     <p>Nazwisko: <input type=\"text\" name=\"regLastname\">
                     </p>
                     <p>Data urodzenia: <input type=\"date\" name=\"regBirthday\"></p>
                     <input type=\"submit\" value=\"Wyślij\">
                     <input type=\"reset\" value=\"Wyczyść\">
                     <br><br>
                     <p class=\"hint\">* - pole wymagane</p>
                 </form>";
                 }
                    if(!empty($regLogin_err)){
                        echo "$regLogin_err";
                    }
                    if(!empty($regPassword_err)){
                        echo "$regPassword_err";
                    }
                    if(!empty($regEmail_err)){
                        echo "$regEmail_err";
                    }
                    if(!empty($regTel_err)){
                        echo "$regTel_err";
                    }
                    if(!empty($regName_err)){
                        echo "$regName_err";
                    }
                    if(!empty($regLastname_err)){
                        echo "$regLastname_err";
                    }
                ?>
                  
                      
            </article>

        </section>

    </body>
    
</html>