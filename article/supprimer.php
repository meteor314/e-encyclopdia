<?php
session_start();
require '../php/connect.php';
if(!empty($_SESSION['id'])) {
	if($_SESSION['id'] == 2) {
		if(!empty($_GET['article_id'])) {
			$article_id = intval($_GET['article_id']);

			$req = $db->prepare("DELETE FROM articles WHERE article_id = ?");
			$req->execute(array($article_id));
			echo 'articles supprimé!';
		}
	} else {
		exit();
	} 
} else {
	exit();
}