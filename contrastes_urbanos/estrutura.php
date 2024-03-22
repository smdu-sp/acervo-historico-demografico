<?php
	$estrutura_csv = <<< END
As dimens&otilde;es da metr&oacute;pole	7-8
Quadro Demogr&aacute;fico	9-16
Quadro Econ&ocirc;mico	17-21
Quadro Social	25-50
Territ&oacute;rio e Desigualdades Sociais	51-61
Fontes Consultadas	63-64
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