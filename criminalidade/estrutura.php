<?php
	$estrutura_csv = <<< END
Introdu��o	7-8
Risco de Ocorr�ncias Criminais	9-18
Densidade de Ocorr�ncias de Mortes Violentas	19-38
Taxas de Mortalidade por Viol�ncia	39-42
Din�mica Espacial dos �bitos por Causas Violentas	43-52
Refer�ncias Bibliogr�ficas	53-54
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