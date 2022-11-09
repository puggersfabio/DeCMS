<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Css/Login.css">
    <title>Login</title>
</head>
<body>
<center>
    <!-- input veld voor het inloggen  --> 
    <div class="loginplace">
        <form name="Login" method="POST">        
            <label for="Gebruikersnaam" class="inputtxt">Gebruikersnaam</label><br>
            <input type="text" class="gebruikersnaam" name="Gebruikersnaam" placeholder="Type...." required ><br><br>

            <label for="Wachtwoord" class="inputtxt">Wachtwoord</label><br>
            <input type="password" class="wachtwoord" name="Wachtwoord" placeholder="Type...." required ><br><br>

            <input type="submit" name="submit" class="loginbttn" value="Log-in"><br><br>
            Geen account? Klik <a href="index.php">hier!</a>
            <br>    
            Account maken? Klik <a href="registreer.php">hier!</a>
            <br>
        </form>
    </div>  
</center>  
</body>
</html>
