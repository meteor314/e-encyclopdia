<?php
    session_start();
    require('../php/connect.php');

    if(isset($_GET['q'])){
        $query = (String) htmlspecialchars(trim(($_GET['q']))); 

        $sql = $db->prepare("SELECT * FROM articles  WHERE title LIKE ? ORDER BY article_id DESC LIMIT 0, 7 ");
        $sql->execute(array("$query%"));

        $req = $sql->fetchALL();

        foreach($req as $r){
            ?>
            <div style="font-size: 29px;">

                <a href="http://localhost/projet/article/article-contenu.php?article_id=<?= $r['article_id']?>" >  <?= $r['title'];?> <br /> 
                <img src="../img/articles/<?= $r['img']  ?>" style="width: 100px; height: 100px;">  </a> 
            </div>
        <?php    
       }
    } 
?>
