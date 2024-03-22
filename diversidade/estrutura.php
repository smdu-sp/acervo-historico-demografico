<?php
	$estrutura_csv = <<< END
Introdu&ccedil;&atilde;o	13-17
Mulheres	21-37
Negros	41-49
Jovens	53-61
Idosos	65-76
Nota T&eacute;cnica	77-78
Refer&ecirc;ncias	79-80
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