<?php
//good login admin et good login user good password user et good password admin profil admin et user
$goodla="admin";
$goodlu="user";
$goodpa="admin";
$goodpu="user";
$profila="admin";
$profilu="user";


if (isset ($_POST['valider']) && isset($_POST['login']) && isset($_POST['password']) && isset($_POST['profil']) ){
extract($_POST);
if ($goodla==$login && $goodpa==$password && $profila==$profil )   {
   session_start();
   $_SESSION['login']=$login;
   $_SESSION['password']=$password;
   $_SESSION['profil']=$profil;
   header ('location:membres.php'); 
   
}elseif ($goodlu==$login && $goodpu==$password && $profilu==$profil) {
   
    session_start();
    $_SESSION['login']=$login;
    $_SESSION['password']=$password;
    $_SESSION['profil']=$profil;
    header ('location:membres.php'); 
   
}

else{
    //alert java script
    echo '<body onLoad="alert(\'Vous ete pas inscrit(e)...\')">';
    //redirection vers page inscription
    echo '<meta http-equiv="refresh" content="0;URL=formulaire.php">';
}







}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1 style="color:red">Veuillez entrez le bons parametres de connexions</h1>
</body>
</html>






