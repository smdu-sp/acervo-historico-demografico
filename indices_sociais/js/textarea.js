// JavaScript Document
<!--

 	/**
	 * Valida o tamanho do campo "textarea" durante a digitação, para 
	 * ele remover os caracteres que estão sobrano, copie o método para o
	 * event "onblur"
	 * Ex.: <input type="textarea" onkeypress="return textAreaMaxLength(event, <tamanho máximo do campo>);" 
	 *             onblur="return textAreaMaxLength(event, <tamanho máximo do campo>);"> 
	 */
	function textAreaMaxLength(event, maxlength) {
	
		var type = event.type;	
		var targ = getTarget(event);
		var l = targ.value.length;
		
		if (type != 'blur')
			l++;
			
		if (l > maxlength) {
			targ.value = targ.value.substring(0, maxlength);
			alerta('Limite de ' + maxlength + ' caracteres foi excedido, o excesso será removido!');
			return true;
		} else {
			return true;
		}
	}
-->