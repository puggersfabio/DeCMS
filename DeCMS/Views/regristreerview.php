<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Css/registreer.css">
    <title>Registeren</title>
</head>
<body>
<center>
    <!-- input veld voor het regristreren  --> 
<div class="registerplace">
    <form name="regristreer" method="POST">   
            <label for="Email" class="inputtxt">E-mail</label><br>
            <input type="text" class="Email" name="Email" placeholder="Type...." required ><br><br>

            <label for="Gebruikersnaam" class="inputtxt">Gebruikersnaam</label><br>
            <input type="text" class="Gebruikersnaam" name="gebruikersnaam" placeholder="Type...." required ><br><br>

            <label for="Wachtwoord" class="inputtxt">Wachtwoord</label><br>
            <input type="password" class="Wachtwoord" name="wachtwoord" placeholder="Type...." required ><br><br>

            <input type="submit" name="login" class="loginbttn" value="Regristreer"><br><br>
            toch geen account maken? Klik <a href="index.php">hier!</a>
    </form>
</center>
</body>
</html>