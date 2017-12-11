<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>profil</title>
</head>
<body>
    <form  action="login.php" method="post">
        <h2>Bienvenue Veuillez vous identifiez</h2>
      <Label>Login:</Label>  <input type="text" name="login" required><br><br>
     <Label>Mot de passe:</Label>  <input type="password" name="password" placeholder="" required ><br><br>
      <label for=""> profil:</label> <select name="profil" placeholder="" required >
           <option value="admin">admin</option>
           <option value="user">user</option>

           
       </select><br><br>
       <input type="submit" value="valider" name="valider" >
           <input type="reset" value="supprimer" ><br><br>

    </form>
</body>
</html>