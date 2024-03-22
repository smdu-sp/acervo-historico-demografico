<?php
	$estrutura_csv = <<< END
Pol&iacute;tico Administrativo	1
Maciços de Solo e Rocha	2
Expansão Urbana	3
Sistemas de Transportes	4
Equipamentos Sociais	5
Uso do Solo Predominante	6
Valor do Solo Urbano	7
Economia Urbana	8
END;

	function ParseRange($rng) {
		$out = array();
	
		$p = explode('/', $rng);
		foreach ($p as $r) {
			if (strpos($r, '-') !== FALSE) {
				$p2 = explode('-', $r);
				for ($i=$p2[0]; $i <= $p2[1]; $i++) $out[] = intval($i);
			} else {
				$out[] = intval($r);
			}
		}
		
		return $out;
	}

	$est = explode((strpos($estrutura_csv, "\r\n"))?"\r\n":"\n", $estrutura_csv);
	$estrutura = array();
	$i = 0;
	foreach ($est as $itm) {
		$p = explode("\t", $itm);
		$estrutura[$i]['titulo'] = $p[0];
		$estrutura[$i]['pgs'] = ParseRange($p[1]);
		$i++;
	}
?>