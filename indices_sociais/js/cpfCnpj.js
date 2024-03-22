function validaCpfCnpj(documento){
	if(documento.length == 14)
		return checkCNPJ(documento);
	else if(documento.length == 11)
		return checkCPF(documento);
	else if(documento.length == 0)
		return true;
	else
		return false;
}

function checkCPF (CPF) {
	if (CPF.length != 11 || CPF == "00000000000" || CPF == "11111111111" ||
		CPF == "22222222222" ||	CPF == "33333333333" || CPF == "44444444444" ||
		CPF == "55555555555" || CPF == "66666666666" || CPF == "77777777777" ||
		CPF == "88888888888" || CPF == "99999999999")
		return false;
	soma = 0;
	for (i=0; i < 9; i ++)
		soma += parseInt(CPF.charAt(i)) * (10 - i);
	resto = 11 - (soma % 11);
	if (resto == 10 || resto == 11)
		resto = 0;
	if (resto != parseInt(CPF.charAt(9)))
		return false;
	soma = 0;
	for (i = 0; i < 10; i ++)
		soma += parseInt(CPF.charAt(i)) * (11 - i);
	resto = 11 - (soma % 11);
	if (resto == 10 || resto == 11)
		resto = 0;
	if (resto != parseInt(CPF.charAt(10)))
		return false;
	return true;
}

function checkCNPJ(CNPJ) {
	if (CNPJ.length != 14 || CNPJ == "00000000000000" ||
		CNPJ == "11111111111111" || CNPJ == "22222222222222" || CNPJ == "33333333333333" ||
		CNPJ == "44444444444444" || CNPJ == "55555555555555" || CNPJ == "66666666666666" ||
		CNPJ == "77777777777777" || CNPJ == "88888888888888" || CNPJ == "99999999999999" ) {
			return false;
	}

	soma = 0;
	for (i=0, j = 5; i < 12; i++) {
		soma += j-- * (parseInt(CNPJ.charAt(i)));
		if (j < 2) j = 9;
	}

	soma = 11 - (soma % 11);

	if (soma > 9) soma = 0;

	if (soma == parseInt(CNPJ.charAt(12))) {
		soma = 0;

		for (i=0, j = 6; i < 13; i++) {
			soma += j-- * parseInt(CNPJ.charAt(i));
			if (j < 2) j = 9;
		}

		soma = 11 - (soma % 11);

		if (soma > 9) soma = 0;

		if (soma == parseInt(CNPJ.charAt(13))) {
			return true;
		}
	}
	return false;
}

