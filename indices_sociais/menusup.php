	<tr>
		<td height="23" align="center">
			<table cellpadding="0" cellspacing="0" border="0" width="780">
				<tr>
<?php if ($texto=='mapa') { ?>
					<td width="60">
						&nbsp;
					</td>
<?php } else { ?>
					<td width="120">
						<a href="index.php"><img src="img/logo_mapas.gif" width="100" height="63" ></a>
					</td>
<?php } ?>
					<td width="148">
						<a href="index.php?texto=apresentacao" onMouseOver="document.menu01.src=menu_01_on.src; window.status='Apresentação'; return true;" onMouseOut="document.menu01.src=menu_01_off.src;window.status=' '; return true;"><img src="img/menu_01_off.gif" name="menu01" border="0"></a></td>

					<td width="158"><a onMouseOver="document.menu02.src=menu_02_on.src;show('drop1'); window.status='Índices Sociais'; return true;" onMouseOut="document.menu02.src=menu_02_off.src;wait('drop1'); window.status=' '; return true;"><img src="img/menu_02_off.gif" name="menu02" border="0"></a>
						<?php require_once('connect.php'); ?>
						<div id="submenucontainer">
						<?php 
							$query_tema = "SELECT tema_cod, tema_descricao FROM tb_tema order by tema_cod ";
							$sql_tema = mysqli_query($conexao_atlas, $query_tema) or die('Erro na conexão com o banco de dados');
						?>			
							<div id="submenu">
								<div id="drop1" class="subitems1" onMouseOver="clearTimer();" onMouseOut="wait('drop1');" style="position:absolute;clear:left; ">
									<?php	while ($row_sql1 = mysqli_fetch_assoc($sql_tema)) { ?>
										<p class="sub-menu"><a href="index.php?texto=corpo&tema_cod=<?php echo $row_sql1['tema_cod']; ?>" class="sub-menu" onMouseOver="window.status='<?php echo $row_sql1['tema_cod']; ?> '; return true;" onMouseOut="window.status='<?php echo $row_sql1['tema_descricao']; ?> '; return true;"><nobr><img src="img/seta01.gif" align="absmiddle"><font color="#000000"><?php echo $row_sql1['tema_descricao']; ?></font></a></p>
									<?php } ?>
								</div>
							</div>
						</div>
				  </td>
					
				<td width="189">
					<a href="tudo_pdf.zip" onMouseOver="document.menu03.src=menu_03_on.src;show('drop3'); window.status='Download Completo'; return true;" onMouseOut="document.menu03.src=menu_03_off.src;wait('drop3');window.status=' '; return true;"><img src="img/menu_03_off.gif" name="menu03" border="0"></a></a>
						<div id="submenucontainer">
							<div id="submenu">
								<div id="drop3" class="subitems1" onMouseOver="clearTimer();" onMouseOut="wait('drop3');" style="position:absolute;clear:left; ">
										<p class="sub-menu"><a href="tudo_pdf.zip" class="sub-menu" onMouseOver="window.status='Download Completo em PDF'; return true;"><nobr><img src="img/seta01.gif" align="absmiddle"><font color="#000000">Download Completo em PDF</font></a></p>
										<p class="sub-menu"><a href="tudo_jpeg.zip" class="sub-menu" onMouseOver="window.status='Download Completo em JPEG'; return true;"><nobr><img src="img/seta01.gif" align="absmiddle"><font color="#000000">Download Completo em JPEG</font></a></p>
								</div>
							</div>
						</div>
				</td>
					<td width="225"><a href="index.php?texto=equipetecnica" onMouseOver="document.menu04.src=menu_04_on.src; window.status='Equipe Técnica'; return true;" onMouseOut="document.menu04.src=menu_04_off.src;window.status=' '; return true;"><img src="img/menu_04_off.gif" name="menu04" border="0"></a></td>
				</tr>
			</table>
		</td>
	</tr>
