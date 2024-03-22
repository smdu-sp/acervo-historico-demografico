<?php require_once('connect.php'); 
	$currentPage = $_SERVER["PHP_SELF"];
?>

    <?php
	$num_rows=0;
	if  (isset ($_REQUEST['tema_cod'])) {
		$query_mapa = "SELECT * FROM tb_mapa where mapa_nome <> '' and tema_cod = ".$_REQUEST['tema_cod']." order by mapa_par";
		$res_mapa = mysql_query($query_mapa) or die("erro na query=".$query_mapa);
	    $num_rows = mysql_num_rows($res_mapa);
	    if  ($num_rows == 0 ){
		   echo "Este índice ainda não possui mapa";
		} 
		
		$query_tema = "SELECT * from tb_tema ";
		$query_tema.= " WHERE  tema_cod = ".$_REQUEST['tema_cod'];
		$query_tema.= " Order by tema_cod ";
		$sql_tema = mysql_query($query_tema) or die('Query falhou:'.$query_tema);
		$sql_tema1 = mysql_fetch_array($sql_tema);
	
		$conta=1;
		$init=TRUE;
		?>
			<tr>
				<td align="center">
					<table width="630" cellpadding="0" cellspacing="0" border="0">
						<tr>
						  <td><p class="int"><font color="003399"><b>&nbsp;<br>
								<?php echo $sql_tema1['tema_descricao']; ?>
							  </b></font></p>
							<!-- <?php //include 'nota/'.$sql_tema1['texto'].'.htm'; ?>  -->
							<br>
						  </td>			
						</tr>

		<?php while ($vemapa = mysql_fetch_array($res_mapa) )  {
			if  (($conta % 3) == 1) {
				if ($init) {
					$init = FALSE;
				} else { ?>
						
					</table>
			  </td>
			</tr>
		   <?php } ?>
			<tr>
				<td valign="top">
			
					<table cellpadding="0" cellspacing="0" border="0">
						<tr>
		<?php } ?>
							<td width="210">
								<table cellpadding="0" cellspacing="0" border="0" width="176">
									<tr>
										<td width="176"><img src="img/top_map<?php echo ($conta % 2) + 1; ?>.gif"></td>
									</tr>
									<tr height="106">
										<td width="176" align="center" background="img/back_map<?php echo ($conta % 2) + 1; ?>.gif"><img src="<? echo "gif/".$vemapa['mapa_nome'].".gif";?>" width="150" height="106" style="border-color: 777777"></td>
									</tr>
									<tr valign="top">
										<td width="176"  height="50" style="padding:2px 3px 5px 11px;font-size:10px;font-family:verdana;color:#000066" background="img/back_map<?php echo ($conta % 2) + 1; ?>.gif"><?php echo $vemapa['mapa_titulo'];?></td>
									</tr>
									<tr height="23">
										<td width="176" align="right" background="img/bottom_map<?php echo ($conta % 2) + 1; ?>.gif"><a href="<?php echo "mapas/".$vemapa['mapa_nome']?>.<?php echo $vemapa['mapa_tipo'];?>" target='_blank'><img src="img/bt_info.gif" onMouseOver="showtrail('<?php echo "mapas/".$vemapa['mapa_nome'].".jpg";?>','',1)" onMouseOut="hidetrail()" alt="Visualizar" border="0"></a><a href="down_img.php?nome_img=<?php echo $vemapa['mapa_nome']?>&tipo_img=<?php echo $vemapa['mapa_tipo'];?>"><img src="img/bt_down.gif" hspace="10" border="0" alt="Download"></a></td>
									</tr>
								</table>
								<br><br>
							</td>
						<?php  $conta++;  
						 }  ?>
						</tr>
					</table>
			  </td>
			</tr>
		</table>
<?php } ?>
			<div style="display: none; position: absolute;z-index:110; " id="preview_div"></div>
<br>