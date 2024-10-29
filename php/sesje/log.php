<!DOCTYPE html>
<?php
session_start();
if(isset($_SESSION['log']))
{
    header('location:log.php');
    exit();
}
elseif(isset($_POST['login'])=="janek"&& isset($_POST['passwd'])){
    if($_POST['login']=='janek' && $_POST['passwd']=='jan23'){
        $_SESSION['log']=$_POST['login'];
        header('location:log.php');
        exit();
    }
    else{
        echo "nieprawidłowe hasło lub login";
    }
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>log</title>
</head>
<body>
    <form action="log.php" method="post">
        <p id="log">logowanie</p>
        <p class="fo">login:</p>
        <input type="text" name="login"><br>
        <p class="fo">password: </p>
        <input type="password" name="passwd" id="passwd">
        <button type="submit">loguj</button>
    </form>
    
</body>
</html>