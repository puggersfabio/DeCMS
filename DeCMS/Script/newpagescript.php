<?php
 class PageView{
    public function fetch_all() { 
        global $db;

       $query = $db->prepare("SELECT * FROM newpage");
       $query->execute();

       return  $query->fetchALL();
}
public function fetch_data($id){
    global $db;

    $query = $db->prepare("SELECT * FROM newpage WHERE id = ?");
    $query->bindValue(1, $id);
    $query->execute();

    return $query->fetch();

    }   
}
?>