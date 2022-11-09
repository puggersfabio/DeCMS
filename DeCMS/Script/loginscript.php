<?php
/* kijkt als de informatie die is getyped in de input velden juist zijn en stuurt het door naar de home */
session_start();
if(isset($_POST["submit"]))
{
    $Gebruikersnaam = $_POST['Gebruikersnaam'];
    $Wachtwoord = $_POST['Wachtwoord'];

    $db = new PDO('mysql:host=localhost;dbname=portfoliocmsdb', 'CMSPortfolio', 'DeContent56!');

    $query = $db->prepare("SELECT * FROM gebruikers WHERE Gebruikersnaam=:Gebruikersnaam AND Wachtwoord=:Wachtwoord");

    $PasswordHash = hash('sha256', $Wachtwoord . "getcoconutmalled");
    $query->bindValue(":Gebruikersnaam", $Gebruikersnaam, PDO::PARAM_STR);
    $query->bindValue(":Wachtwoord", $PasswordHash, PDO::PARAM_STR);
     
    if($query->execute())
    {
        $row = $query->fetch();

        if($row != null)
        {
            $_SESSION['Login'] = $row['id'];
            header('Location: index.php');
        }
        else
        {
            $Error = "er gaat iets mis";
        }
    }
    else{
        $Error = "voer alles in";
    } 
}
?>



