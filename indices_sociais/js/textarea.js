// JavaScript Document
<!--

 	/**
	 * Valida o tamanho do campo "textarea" durante a digita��o, para 
	 * ele remover os caracteres que est�o sobrano, copie o m�todo para o
	 * event "onblur"
	 * Ex.: <input type="textarea" onkeypress="return textAreaMaxLength(event, <tamanho m�ximo do campo>);" 
	 *             onblur="return textAreaMaxLength(event, <tamanho m�ximo do campo>);"> 
	 */
	function textAreaMaxLength(event, maxlength) {
	
		var type = event.type;	
		var targ = getTarget(event);
		var l = targ.value.length;
		
		if (type != 'blur')
			l++;
			
		if (l > maxlength) {
			targ.value = targ.value.substring(0, maxlength);
			alerta('Limite de ' + maxlength + ' caracteres foi excedido, o excesso ser� removido!');
			return true;
		} else {
			return true;
		}
	}
-->