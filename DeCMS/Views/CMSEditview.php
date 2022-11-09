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
    <link rel="stylesheet" href="Css/CMS.css">
    <title>CMS make page</title>
</head>
<script src="https://cdn.tiny.cloud/1/y3bk9338trdnj3emhj5498ulyjqixe08r1pf9h93wpjov33w/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<body>

<script>
    tinymce.init({
      selector: '#mytextarea'
    });
  </script>

  <h2 class="Titeltxt2">Maak hier uw eigen pagina!</h2>  
  <form method="POST" class="formcss">
    <input type="text" name="Posttitle" class="Titeltxt" placeholder="Type de titel hier..." value="<?php echo $data['post_title']; ?> " required>
    <textarea class="Tinymc" id="mytextarea" name="MCopslaan" placeholder="Type hier de content van de page..." value="<?php echo $page['post_content'];?>" required>
    </textarea>  
    <input name='SLa-op' type="submit" value="Edit!" class="cmsbttn4"
    ></input>
  </form>

<?php

            if(array_key_exists('SLa-op', $_POST)){
                        Contentsave();
                    }    
                     
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
?>
</body>
</html>