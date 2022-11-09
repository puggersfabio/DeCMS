<?php 
    $page = $db->prepare("SELECT id, post_title, post_content FROM newpage WHERE id = :id");

    $page->execute(['id' => $_GET['id']]);

?>