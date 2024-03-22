<?php include('estrutura.php'); ?>
<script type="text/javascript">
<!--
function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
//-->
</script>
<div id="menu">
  <ul>
    <li><a id="menu_a" href="javascript:carrega('apresentacao.php', 'a');" class="menu_atual">Apresenta&ccedil;&atilde;o</a></li>
    <li><a id="menu_e" href="javascript:carrega('equipe.php', 'e');">Equipe t&eacute;cnica</a></li>
<?php foreach ($estrutura as $i => $c) { ?>
    <li><a id="menu_<?php echo $i; ?>" href="javascript:carrega('pagina.php?i=<?php echo $i; ?>', '<?php echo $i; ?>');"><?php echo $c['titulo']; ?></a></li>
<?php } ?>
    <li><a id="menu_d" href="javascript:carrega('download.php', 'd');">Download</a></li>
  </ul>
  <p>
    <select name="select" onchange="MM_jumpMenu('parent',this,0)" class="select-secretarias" style="width: 146px;">
<option value="">Selecione</option>
	          		<option value='http://www.prefeitura.sp.gov.br/cidade/secretarias/assistencia_social/'>Assist&ecirc;ncia Social</option>
                    <option value='http://www.prefeitura.sp.gov.br/cidade/secretarias/comunicacao'>Comunica&ccedil;&atilde;o</option>
                    <option value='http://www.prefeitura.sp.gov.br/cidade/secretarias/controle_urbano/'>Controle Urbano</option>
                    <option value='http://cultura.prefeitura.sp.gov.br/'>Cultura</option>
                    <option value='http://educacao.prefeitura.sp.gov.br/'>Educa&ccedil;&atilde;o</option>
                    <option value='http://www.prefeitura.sp.gov.br/cidade/secretarias/esportes/'>Esportes</option>
                    <option value='http://www.prefeitura.sp.gov.br/cidade/secretarias/desenvolvimento_urbano/'>Desenvolvimento Urbano</option>
                    <option value='http://financas.prefeitura.sp.gov.br/'>Finan&ccedil;as</option>
                    <option value='http://www.prefeitura.sp.gov.br/cidade/secretarias/gestao/'>Gest&atilde;o e Desburocratiza&ccedil;&atilde;o</option>
                    <option value='http://www.prefeitura.sp.gov.br/cidade/secretarias/governo/'>Governo</option>
                    <option value='http://www.prefeitura.sp.gov.br/cidade/secretarias/habitacao/'>Habita&ccedil;&atilde;o</option>
                    <option value='http://www.prefeitura.sp.gov.br/cidade/secretarias/infraestrutura/'>Infraestrutura Urbana</option>
                    <option value='http://www.prefeitura.sp.gov.br/cidade/secretarias/negocios_juridicos/'>Neg&oacute;cios Jur&iacute;dicos</option>
                    <option value='http://www.prefeitura.sp.gov.br/cidade/secretarias/participacao_parceria/'>Participa&ccedil;&atilde;o e Parceria</option>
                    <option value='http://www.prefeitura.sp.gov.br/cidade/secretarias/pessoa_com_deficiencia/'>Pessoa com Defici&ecirc;ncia</option>
                    <option value='http://sempla.prefeitura.sp.gov.br/'>Planejamento, Or&ccedil;amento e Gest&atilde;o</option>
                    <option value='http://www.prefeitura.sp.gov.br/cidade/secretarias/relacoes_internacionais/'>Rela&ccedil;&otilde;es Internacionais</option>
                    <option value='http://www.prefeitura.sp.gov.br/cidade/secretarias/relacoes_governamentais/'>Rela&ccedil;&otilde;es Governamentais</option><option value='http://www.prefeitura.sp.gov.br/cidade/secretarias/saude'>Sa&uacute;de</option>
                    <option value='http://www.prefeitura.sp.gov.br/cidade/secretarias/seguranca_urbana/'>Seguran&ccedil;a Urbana</option>
                    <option value='http://www.prefeitura.sp.gov.br/cidade/secretarias/servicos/'>Servi&ccedil;os</option>
                    <option value='http://www.prefeitura.sp.gov.br/cidade/secretarias/subprefeituras/'>Subprefeituras</option>
                    <option value='http://www.prefeitura.sp.gov.br/cidade/secretarias/trabalho/'>Trabalho</option>
                    <option value='http://www.prefeitura.sp.gov.br/cidade/secretarias/transportes'>Transportes</option>
                    <option value='http://www.prefeitura.sp.gov.br/cidade/secretarias/meio_ambiente/'>Verde e Meio Ambiente</option>
    </select>
  </p>
  
  <p style="margin-left:16px;"><img src="img/logo_prefeitura.jpg" width="120" height="71" /></p>
</div>