<?php
/* haalt alles dat is getyped in de input velden en slaat het op in de database */
if(isset($_POST['gebruikersnaam']) && isset($_POST['wachtwoord']) && isset($_POST['Email']))
{
    $Gebruikersnaam = $_POST['gebruikersnaam'];
    $Wachtwoord = $_POST['wachtwoord'];
    $Email = $_POST['Email'];


    $PasswordHash = hash('sha256', $Wachtwoord . "getcoconutmalled");


    $db = new PDO('mysql:host=localhost;dbname=portfoliocmsdb', 'CMSPortfolio', 'DeContent56!');


    $query = $db->prepare("INSERT INTO gebruikers(Gebruikersnaam, Wachtwoord, Email) VALUES (:gebruikersnaam, :wachtwoord, :Email)");

    $query->bindValue(":gebruikersnaam", $Gebruikersnaam, PDO::PARAM_STR);
    $query->bindValue(":wachtwoord", $PasswordHash, PDO::PARAM_STR);
    $query->bindValue(":Email", $Email, PDO::PARAM_STR);

    if($query->execute() == true)
    {
        header('Location: Login.php');
    }
    else
    {
        echo "het is verkeerd gegaan";
    }
}
?>