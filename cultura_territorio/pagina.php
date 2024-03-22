<?php include('estrutura.php'); ?>
<?php if (!isset($_REQUEST['i'])) $_REQUEST['i'] = 0; ?>
    <h3><?php echo $estrutura[intval($_REQUEST['i'])]['titulo']; ?></h3>
    
    <div id="catalogo">

<?php foreach ($estrutura[intval($_REQUEST['i'])]['pgs'] as $pg) { ?>
    <div id="pagina">
	    <a href="img/paginas/grande/pag<?php printf("%02d", $pg); ?>.jpg" rel="lytebox[paginas]" title="&lt;a href=&quot;pdf/pag<?php printf("%02d", $pg); ?>.pdf&quot; target=&quot;_blank&quot; title=&quot;Baixar em PDF&quot;&gt;Baixar em PDF&lt;/a&gt; &ndash; P&aacute;gina <?php printf("%02d", $pg); ?>"><img title="Clique para ampliar" src="img/paginas/pag<?php printf("%02d", $pg); ?>.jpg" width="170" height="229" /></a><br />
    	<a href="pdf/pag<?php printf("%02d", $pg); ?>.pdf" target="_blank" title="Baixar em PDF">Baixar em PDF</a> &ndash; P&aacute;gina <?php printf("%02d", $pg); ?>
    </div>
<?php } ?>

    </div>