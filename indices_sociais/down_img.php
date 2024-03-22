<?php
		$nome = $_GET['nome_img'].'.'.$_GET['tipo_img'];
		$imagem = "mapas/".$_GET['nome_img'].'.'.$_GET['tipo_img'];
		Header("Content-type: image/jpg");
		header("Content-Disposition: attachment; filename=".$nome);
		readfile($imagem);
		exit;
?>