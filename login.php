<?php
session_start();
$_SESSION['login'] = false;

$connection['login'] = 'bar';
$connection['pass'] = 'bar';

if ((!$_SESSION['login'])) {
    
    if(($_POST['login'] == $connection['login']) AND ($_POST['pass']==$connection['pass'])){
        $_SESSION['login']=true;
        $_SESSION['userName']=$_POST['login'];
        header( "Location: aboutPHP.php" );
    }
    else{
        $_SESSION['login'] = false;
        header( "Location: startSession.php" );
    }
}
else{
    header( "Location: aboutPHP.php" );
}
?>