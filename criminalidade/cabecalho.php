<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Olhar S&atilde;o Paulo &ndash; Viol&ecirc;ncia e Criminalidade</title>
<link rel="stylesheet" type="text/css" href="estilo_padrao.css" media="screen">

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<meta name="resource-type" content="document" />
<meta name="classification" content="Internet" />
<meta name="description" content="Um enfoque nas desigualdades de g&ecirc;nero, cor e gera&ccedil;&atilde;o &eacute; o tema que inaugura o segundo ano da publica&ccedil;&atilde;o Munic&iacute;pio em Mapas" />
<meta name="keywords" content="mapas, tabelas, são paulo, município, georreferenciamento, geo, infolocal, educação, cultura, saúde, habitação, esportes, transportes, abastecimento, economia, meio ambiente, planejamento, inundação, mananciais, enchentes, alagamento, endereços, indicadores, estatística, informação, geografia, dados, subprefeitura, prefeitura, hidrografia, censo, ibge, orçamento, plano diretor, pde, revisão, licitações, urbanismo, mulheres, mulher, negro, negros, crianças, criança, idoso, idosos" />
<meta name="robots" content="ALL" />
<meta name="distribution" content="Global" />
<meta name="rating" content="General" />
<meta name="author" content="Gabriel de Vasconcelos Pessoa, Guilherme Passotti, Thiago Ramon" />
<meta name="language" content="pt-br" />
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

<script type="text/javascript" language="javascript" src="lytebox.js"></script>
<script type="text/javascript" language="javascript" src="prototype.lite.js"></script>
<script type="text/javascript" language="javascript" src="moo.ajax.js"></script>

<script type="text/javascript">
	var menu_ant = 'a';
	
	function carrega(pag, m) {
		$('conteudo').innerHTML = '<div id="carregando"><img src="img/lytebox/loading.gif" /></div>';
		$('menu_'+menu_ant).className = '';
		$('menu_'+m).className = 'menu_atual';
		menu_ant = m;
		new ajax(pag, {onComplete: carregado});
	}
	function carregado(req) {
		$('conteudo').innerHTML = req.responseText;
		initLytebox();
	}
</script>

<?php  include("googleanalytics.php"); ?>

</head>

<body>

<div id="geral">
<table align="center" border="0" cellpadding="0" cellspacing="0" width="780" height="90">
    <tr><td height="90"><?php  include("headerprefeitura.php"); ?></td></tr>
</table>

<div id="topo">

<h1>Olhar S&atilde;o Paulo</h1>
<h3>Constrastes Urbanos</h3>

</div>

<?php include("menu.php"); ?>