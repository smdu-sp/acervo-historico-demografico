<?php
	$estrutura_csv = <<< END
Introdução	7-8
Risco de Ocorrências Criminais	9-18
Densidade de Ocorrências de Mortes Violentas	19-38
Taxas de Mortalidade por Violência	39-42
Dinâmica Espacial dos Óbitos por Causas Violentas	43-52
Referências Bibliográficas	53-54
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