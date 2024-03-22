<?php require_once('conecta.php'); ?>
	<div id="submenucontainer">
	<?php 
		$query_tema = "SELECT * from tb_anu_temas ";
		$query_tema.= " order by  ordem_tema";
		$sql_tema = mysqli_query($conexao_atlas, $query_tema) or die('Erro na conexão com o banco de dados');
	?>			
		<?php while ($row_sql1 = mysqli_fetch_array($sql_tema)) { ?>		
			<div id="submenu">
			<?php
				$query_cap = " select distinct a.ordem_tema,  a.ordem_subtema,  nome_subtema  ";
				$query_cap.= " from tb_anu_tabelas as a, tb_anu_temas as b, tb_anu_subtemas as c ";
				$query_cap.= " where a.ordem_tema = b.ordem_tema and a.ordem_subtema = c.ordem_subtema ";
				$query_cap.= " and a.ordem_tema =".$row_sql1['ordem_tema']." order by  nome_subtema ";
				$sql_cap = mysqli_query($conexao_atlas, $query_cap) or die('Erro na conexão com o banco de dados');
			?>
				<div id="drop<?php echo $row_sql1['ordem_tema']; ?>" class="subitems<?php echo $row_sql1['ordem_tema']; ?>" onmouseover="clearTimer();" onmouseout="wait('drop<?php echo $row_sql1['ordem_tema']; ?>');" style="display:none;position:absolute;clear:left; ">
					<p class="sub-menu"><img src="img/top_subnav.gif"></p>
					<?php	while ($row_sql = mysqli_fetch_assoc($sql_cap)) { ?>
						<p class="sub-menu"><a href="index.php?texto=introducao&ordem_tema=<?php echo $row_sql1['ordem_tema']; ?>&ordem_subtema=<?php echo $row_sql['ordem_subtema']; ?>" class="sub-menu" onmouseover="window.status='<?php echo $row_sql['ordem_tema']; ?> '; return true;" onmouseout="window.status='<?php echo $row_sql['nome_subtema']; ?> '; return true;"><nobr><img src="img/seta01.gif" align="absmiddle"><?php echo $row_sql['nome_subtema']; ?></a></p>
					<?php } ?>
					<p class="sub-menu"><img src="img/bottom_subnav.gif"></p>
				</div>
			</div>
		<?php }	?>				
	</div>
