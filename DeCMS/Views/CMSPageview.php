<?php require_once "Script/newpagescript.php"; 
/* zorgt de class naar een variable word gezet */
$page = new PageView;
/* haalt de id van de specefieke pagina */
if (isset($_GET['id'])){
    $id = $_GET['id'];
    $data = $page->fetch_data($id);} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CMS-Page</title>
    <link rel="stylesheet" href="Css/CMS.css">
</head>
<body>
    <!-- laat de title van de pagina zien  --> 
    <div class="container">
<h3 class="Posttitle"><?php echo $data['post_title']; ?>-
</h3>
    <!-- laat de tekst van de pagina zien   --> 
<h4 class="postcontent"><?php echo $data['post_content']; ?></h4>
    </div>
    <div class="bttns">
    <form method="POST">
        <!-- terug naar de cms page   --> 
    <input name='Goback' type="submit" value="<-- Ga terug" class="cmsbttn"></input>
    <?php
    if($_SESSION == true)
    { 
    echo '<input name="Verwijder" type="submit" value="Verwijder" class="cmsbttn2"></input>';
    echo '<input name="Edit" type="submit" value="Edit" class="cmsbttn3"></input>';
    } ?>
    </form>
    </div>
    <?php
    if(array_key_exists('Goback', $_POST)){
        terug();
    }  

    if(array_key_exists('Verwijder', $_POST)){
        removepage();
    }  
    
    if(array_key_exists('Edit', $_POST)){
        Pasaan();
    }  
    function terug(){
        header('Location: CMSPage.php');
        }
            /* verwijderd de pagina uit de database */ 
        function removepage(){
            if (isset($_GET['id'])){
                $id = $_GET['id'];}

                $db = new PDO('mysql:host=localhost;dbname=portfoliocmsdb', 'CMSPortfolio', 'DeContent56!');

                $query = $db->prepare('DELETE FROM newpage WHERE id = ?');
                $query->bindValue(1, $id);
                $query->execute();

                 header('Location: CMSPage.php');
        }

        function Pasaan(){
            header('Location: CMS.php');
        }
    ?>
</body>
</html>