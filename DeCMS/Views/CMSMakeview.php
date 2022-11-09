<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Css/CMS.css">
    <title>CMS make page</title>
</head>
<!-- script voor tinymc feature  --> 
<script src="https://cdn.tiny.cloud/1/y3bk9338trdnj3emhj5498ulyjqixe08r1pf9h93wpjov33w/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<body class="makebody">

<script>
    tinymce.init({
      selector: '#mytextarea'
    });
  </script>
<div class="cmscontainer" >
  <h2 class="Titeltxt2">Maak hier uw eigen pagina!</h2>  
  <form method="POST" class="formcss">
    <!--  input veld voor de titel van de pagina  --> 
    <input type="text" name="Posttitle" class="Titeltxt" placeholder="Type de titel hier...">
    <!-- input veld voor de content van de pagina  --> 
    <textarea class="Tinymc" id="mytextarea" name="MCopslaan" placeholder="Type hier de content van de page...">
    </textarea>  
    <input name='SLa-op' type="submit" value="Maak aan!" class="cmsbttn4"
    ></input>
    <input name='annuleer' type="submit" value="Annuleer" class="cmsbttn5"
    ></input>
  </form>
  </div>
<?php
            if(array_key_exists('SLa-op', $_POST)){
                        Contentsave();
                    }    

                    if(array_key_exists('annuleer', $_POST)){
                      Annuleren();
                  }    
                     /* stuurt alles dat in de input velden is getyped naar de database en slaat het op */
            function Contentsave(){ 
                  $titlepost = $_POST['Posttitle'];
                  $contentpost = $_POST['MCopslaan'];

                  $db = new PDO('mysql:host=localhost;dbname=portfoliocmsdb', 'CMSPortfolio', 'DeContent56!');

                  $query = $db->prepare("INSERT INTO newpage(post_title, post_content) VALUES (:Posttitle, :MCopslaan)");

                  $query->bindValue(":Posttitle", $titlepost, PDO::PARAM_STR);
                  $query->bindValue(":MCopslaan", $contentpost, PDO::PARAM_STR);

                  $query->execute();

                  header('Location: CMSPAge.php');
                  
          } 
          function Annuleren(){
            header('Location: CMSPAge.php');
          }
?>
</body>
</html>