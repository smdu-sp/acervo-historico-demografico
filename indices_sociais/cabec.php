<link rel="shortcut icon" href="Imagens/portal/favicon.ico" type="image/x-icon">

<SCRIPT type="text/javascript" src="js/scriptsPgPrincipal.js"></SCRIPT>
<SCRIPT type="text/javascript" src="js/alertas.js"></SCRIPT>
<SCRIPT type="text/javascript" src="js/mask.js"></SCRIPT>
<SCRIPT type="text/javascript" src="js/textarea.js"></SCRIPT>
<SCRIPT type="text/javascript" src="js/textarea.js"></SCRIPT>

<script type="text/javascript">

	function busca() {
	    //document.form.action = '/portalpmsp/do/busca;jsessionid=62BD91FA2D3DCEF9AF760670F41D746F';
	    document.form.op.value = 'buscaForm';
	    document.form.buscaAvancada.value = 'false';
	    document.form.buscaSimples.value = 'false';
	    document.form.isHead.value = 'true';
	    document.form.submit();
	}

	function enterBusca(e) {
	    if(e.keyCode == 13){
	       //document.form.action = '/portalpmsp/do/busca;jsessionid=62BD91FA2D3DCEF9AF760670F41D746F';
	       document.form.op.value = 'buscaForm';
	       document.form.buscaAvancada.value = 'false';
	       document.form.buscaSimples.value = 'false';
	       document.form.submit();
	    }
	}

function write(value) {
  return (!value) ? false : document.write(value);
}

</script>




<center>
<table width="780" border="0" cellspacing="0" cellpadding="0">
	<tr>
		<td bgcolor="#666666">
<table border="0" width="100%" cellspacing="0" cellpadding="0">
	<tr>
		<td width="635">
			<table class="normal_home">
				<tr>
					<td width="15"><div id="cge1">CGE</div></td>
					<td width="15"><div id="cge2"><img src="" alt="alerta CGE" title="alerta CGE" width="15" height="15" name="imgCGE" /></div></td>
					<td></td>
				</tr>

			</table>
		</td>
		<td align="right" width="145"><div id="sp_agora"></div></td>
				</tr>
			</table>
		</td>
	</tr>
</table>
<table border="0" width="780" cellspacing="0" cellpadding="0">
	<tr>
		<td width="620" bgcolor="#000000">

			<table border="0" width="100%" cellspacing="0" cellpadding="0">
				<tr>
					<td><a href="/portalpmsp/inicio.jsp;jsessionid=62BD91FA2D3DCEF9AF760670F41D746F"><img border="0" src="Imagens/portal/prefeituraspgovbr.gif" width="315" height="70" alt="Portal Prefeitura de S&atilde;o Paulo"></a></td>
					<td height="72">
					<table border="0" width="90%" cellspacing="0" cellpadding="0">
						<tr>
							<td>
							<table border="0" width="100%" cellspacing="0" cellpadding="0">
								<tr>

									<td>&nbsp;</td>
									<td width="20" align="right">
									<a href="/portalpmsp/inicio.jsp;jsessionid=62BD91FA2D3DCEF9AF760670F41D746F"><img border="0" src="Imagens/portal/btn_home.gif" width="20" height="25" alt="P�gina Inicial"></a></td>
									<td width="20" align="right">
									<a href="do/mapa?op=insertForm"><img border="0" src="Imagens/portal/btn_mapadosite.gif" width="20" height="25" alt="Mapa do Site"></a></td>
									<td width="20" align="right">
									<a href="/portalpmsp/do/faleconosco;jsessionid=62BD91FA2D3DCEF9AF760670F41D746F?op=filtroForm"><img border="0" src="Imagens/portal/btn_faleconosco.gif" width="20" height="25" alt="Fale Conosco"></a></td>
									<td width="20" align="right">
									<a href="do/ajuda"><img border="0" src="Imagens/portal/btn_ajuda.gif" width="20" height="25" alt="Ajuda"></a></td>

								</tr>
							</table>
							</td>
						</tr>
						<tr>
							<td align="right" valign="bottom">
								<form name="form" action="javaScript: busca();">
									<input type="hidden" name="op"/>
									<input type="hidden" name="buscaAvancada"/>

									<input type="hidden" name="buscaSimples"/>
									<input type="hidden" name="contadorServico"/>
									<input type="hidden" name="contadorInstituicao"/>
									<input type="hidden" name="contadorUnidade"/>
									<input type="hidden" name="contadorNoticia"/>
									<input type="hidden" name="orderBy"/>
									<input type="hidden" name="filter"/>
									<input type="hidden" name="unidadeForm"/>
									<input type="hidden" name="servicoForm"/>

									<input type="hidden" name="coInstituicao"/>
									<input type="hidden" name="isHead"/>
										<table  cellspacing="2" cellpadding="0" border="0" width="100%">
											<tr>
												<td width="90%" class="buscaLabel" align="right"><LABEL for="bca">Busca:</LABEL>&nbsp;<input id="bca" type="text" name="param" value="Busca no Portal" onFocus="clear_box('bca')" onkeypress="enterBusca(event);" style="font-family: Arial; font-size: 11px; height: 18;"></td>
												<td width="10%" align="left"><a href="javaScript: busca();"><img border="0" src="Imagens/portal/btn_busca.gif" alt="Busca no Portal"></a></td>	
											</tr>
										</table>
								</form>

							</td>
						</tr>
					</table>
				</td>
			</tr>
		</table>
		</td>
		<td width="160" bgcolor="#000000">
			<a href="/portalpmsp/inicio.jsp;jsessionid=62BD91FA2D3DCEF9AF760670F41D746F"><img border="0" src="Imagens/portal/logo_governo.gif" width="160" height="70" alt="Prefeitura de S&atilde;o Paulo"></a>

		</td>
	</tr>
</table></td>
	</tr>
	<tr>
		<td height="1"></td>
	</tr>
	<tr>
		<td height="1"></td>

	</tr>
</table>
</center>
