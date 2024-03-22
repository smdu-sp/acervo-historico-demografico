<?php include("cabecalho.php"); ?>
<div id="conteudo">
<?php include("apresentacao.php"); ?>
</div>
<?php  if (strpos($_SERVER['HTTP_HOST'], 'gbc300') === FALSE) { include("rodape.php"); } ?>