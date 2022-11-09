<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Css/CMS.css">
    <title>CMSHome-Page</title>
</head>
<body>
    <h2 class="cmstext">welkom bij de cms page! hier kunt een eigen pagina toevoegen aan mijn website!</h2>
    <?php                               
        if($_SESSION == false)
            {    
                echo '<h3 class="cmstext">U bent nog niet ingelogd! zonder account kunt u geen pagina maken! meld u nu aan!</h3>';
         }
            ?>
<?php                               
        if($_SESSION == true)
            {    
                /* brengt je naar de maak pagina page */
  echo  '<center>'; 
  echo  '<a href="CMSMakePage.php" class="Newpagebttn">Maak een nieuwe pagina hier!</a> ';
  echo  '</center>';
         }
            ?>
<?php
/* haalt alles uit newpage in de database */
$query = $db->prepare("SELECT * FROM newpage");
/* als items uit de database kunnen worden gehaald execute hij query */
if($query->execute())
{
    /* checked de row van new page in de database */
    if($query->rowCount()>0)
    {
        /* haalt alles uit new page in de database */
        while($row = $query->fetch())
        {
            ?>
            <div class="pagecontent">
                <div class="newpage-titel">
                    <!--  laat alle paginas die in de database zien met de titel van de pagina  --> 
                    <b><?php echo "<a href='PageCMS.php?id=" . $row["id"] . "'>" . $row["post_title"] . "</a>" . "<br>";?></b>
                </div>
            </div>
            <?php
        }
    }
    else
    {
        echo "Geen gegevens gevonden";
    }
}

?>
</body>
</html>