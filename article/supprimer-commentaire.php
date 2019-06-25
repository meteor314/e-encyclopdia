<?php
session_start();
require '../php/connect.php';
if(!empty($_SESSION['id'])) {
		if(!empty($_GET['comment_id'])) {
			$comment_id = intval($_GET['comment_id']);

			$req = $db->prepare("DELETE FROM comment WHERE comment_id = ?");
			$req->execute(array($comment_id));
			echo 'commentaire supprimé!';
			if(!empty($_SESSION['article_id'])) {
				header("Location:article-contenu.php?article_id=" . $_SESSION['article_id'] );

			}
		}
		
}  else {
	exit();
}