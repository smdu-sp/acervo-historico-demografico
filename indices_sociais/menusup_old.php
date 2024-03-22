	<tr>
		<td height="23" align="center">
			<table cellpadding="0" cellspacing="0" border="0" width="760">
				<tr>
					<td align="center" width="100">
						<a href="index.php"><img src="img/logo_mapas.gif" width="100" height="63" ></a>
					</td>
					<td align="center" width="150">
						<a href="index.php?texto=apresentacao" class="ini_esq1" style="padding:11px 0 12px 15px">Apresentação</a>
					</td>

					<td   align="center" class="ini_esq1">
						<?php require_once('connect.php'); 
							if (!isset($_REQUEST['indices'])) $_REQUEST['indices']="-1";
						?>
                        <div class="ini_esq1"> Indices Sociais</div> 
						<form method="post" name="indicadores" action="index.php?texto=corpo">
							<div align="center" >
								 <select name="indices" id="indices" style="background-color:#F0F5FA;color:#0066CC;width:200px;font-family:Verdana, Arial, Helvetica, sans-serif;font-size:12px;border:none;font-weight:bold;" onChange="document.indicadores.submit()">
									<option  value="-1"> Selecione um Índice</option>
								<?php $query_tema = "SELECT tema_cod, tema_descricao FROM tb_tema order by tema_cod";
									$tema = mysql_query($query_tema) or die("erro na query=".$query_tema);	?>				
									<?php while ($res_tema = mysql_fetch_array($tema)){
												$rows = mysql_num_rows($tema);
												if($rows >= 0) { ?>
													<option value="<?php echo $res_tema['tema_cod']?>">
														<?php echo ' > '.$res_tema['tema_descricao']; ?>
													</option>
												<?php }
									  }	?>
								 </select>
			</div>
					</form>
				  </td>
					
				<td  align="center" width="150">
					<a href="tudo.zip" class="ini_esq1" style="padding:5px 0 6px 15px">Download Completo</a>
				</td>
					<td  align="center" width="150">
						<a href="index.php?texto=equipetecnica" class="ini_esq1" style="padding:11px 0 12px 15px">Equipe T&eacute;cnica </a>
					</td>
				</tr>
			</table>
		</td>
	</tr>
