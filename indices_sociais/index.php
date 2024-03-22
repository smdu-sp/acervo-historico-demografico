<html>
	<head>
<link href=" http://www.prefeitura.sp.gov.br/portal/css/ndefault.css" rel="stylesheet" type="text/css" />
<link href="http://www.prefeitura.sp.gov.br/portal/css/nbarra.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="http://www.capital.sp.gov.br/portalpmsp/infocge.js"></script>
<script type="text/javascript" src="http://www.prefeitura.sp.gov.br/portal/js/instante.js"></script>
<script type="text/javascript"src="http://www.prefeitura.sp.gov.br/portal/js/busca.js"></script>
		<title>Município em Mapas</title>
		<link href="spestilo.css" rel="stylesheet" type="text/css">
		<link href="atlas.css" rel="stylesheet" type="text/css">
		<script language="JavaScript" src="atlas.js" type="text/javascript"></script>
	</head>
	<body topmargin="0" leftmargin="0">
		<?php include '../../includes/header.inc'; ?>
		<div id='body'>
		<?php  if  (isset($_REQUEST["texto"])) $texto = strtolower($_REQUEST["texto"]);
			  else $texto="mapa";?>
<table cellpadding="0" cellspacing="0" border="0" width="760" style="border:none;">
			<!--Fim dos cantos do topo da tabela -->
					<?php include 'menusup.php'; ?>
				<!--Início do texto de apresentação-->
				<?php if ($texto=='apresentacao')   include 'apresentacao.php'; ?>
				<?php if ($texto=='equipetecnica')   include 'equipetecnica.php'; ?>
				<?php if ($texto=='corpo')   include 'corpo.php'; ?>
				<?php if ($texto=='mapa')  { ?>
				 	 <tr><td align="center" width="100%"><br><img src="mapas/capafim1.jpg" ><br>&nbsp;</td>
				 	 </tr>
				 <?php } ?>
				<!--Fim do texto de apresentação-->
</table>
</div>
		<!--Fim dos cantos do final da tabela -->
		<?php include '../../includes/footer.inc'; ?>
	</body>
</html>
