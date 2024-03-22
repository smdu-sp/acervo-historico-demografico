 function getTarget(e) {
  // IE5
   if (e.srcElement) {
   	return e.srcElement;
   }
    if (e.target) {
   	return e.target;
   }
 }

  function getKeyCode(e) {
 //IE5
 if (e.srcElement) {
 	return e.keyCode
 }
  // NC5
  if (e.target) {
   return e.which
  }
 }
 
 /* exmeplo de uso: onkeypress="return verificaNumero(event);" */
 function verificaNumero(event){
    var sMask = "0123456789";
    var KeyTyped = String.fromCharCode(getKeyCode(event));
    // IE only version var KeyTyped = String.fromCharCode(window.event.keyCode);
    // ** IE only var srcObject = window.event.srcElement;
    var targ = getTarget(event);
    //alert(window.event.keyCode);
    keyCount = targ.value.length;
    keyCode = getKeyCode(event);
    if (keyCode < 15) /* del, backspace and other movement characters are okay */ {
       return true;
    } else if (sMask.indexOf(KeyTyped.toString()) == -1) {
       return false;
    }
 }

  function dateMask(event) {
    var sMask = "0123456789";
    var KeyTyped = String.fromCharCode(getKeyCode(event));
    // IE only version var KeyTyped = String.fromCharCode(window.event.keyCode);
    // ** IE only var srcObject = window.event.srcElement;
    var targ = getTarget(event);
    //alert(window.event.keyCode);
    keyCount = targ.value.length;
    keyCode = getKeyCode(event);
    if (keyCode < 15) /* del, backspace and other movement characters are okay */ {
       return true;
    } else if (sMask.indexOf(KeyTyped.toString()) == -1) {
       return false;
    }

    keyEntered = KeyTyped;
    keyCount++;
    switch (keyCount) {
    case 2:
      targ.value += keyEntered + "/";
      break;
    case 5:
      targ.value += keyEntered + "/";
      break;
    default:
		  return true;
    }
    return false;
 }

function numberMask(event, maxSize) {

    var key = getKeyCode(event);
    var field = getTarget(event);
    vr = field.value;
    vr = vr.replace( "/", "" );
    vr = vr.replace( "/", "" );
    vr = vr.replace( ",", "" );
    vr = vr.replace( ".", "" );
    vr = vr.replace( ".", "" );
    vr = vr.replace( ".", "" );
    vr = vr.replace( ".", "" );
    size = vr.length;

    if (size < maxSize && key != 8){ size = vr.length + 1 ; }

    if (key == 8 ){ size = size - 1 ; }

    if ( key == 8 || key >= 48 && key <= 57 || key >= 96 && key <= 105 ){
        if ( size <= 2 ){
            field.value = vr ; }
        if ( (size > 2) && (size <= 5) ){
            field.value = vr.substr( 0, size - 2 ) + ',' + vr.substr( size - 2, size ) ; }
        if ( (size >= 6) && (size <= 8) ){
            field.value = vr.substr( 0, size - 5 ) + '.' + vr.substr( size - 5, 3 ) + ',' + vr.substr( size - 2, size ) ; }
        if ( (size >= 9) && (size <= 11) ){
            field.value = vr.substr( 0, size - 8 ) + '.' + vr.substr( size - 8, 3 ) + '.' + vr.substr( size - 5, 3 ) + ',' + vr.substr( size - 2, size ) ; }
        if ( (size >= 12) && (size <= 14) ){
            field.value = vr.substr( 0, size - 11 ) + '.' + vr.substr( size - 11, 3 ) + '.' + vr.substr( size - 8, 3 ) + '.' + vr.substr( size - 5, 3 ) + ',' + vr.substr( size - 2, size ) ; }
        if ( (size >= 15) && (size <= 17) ){
            field.value = vr.substr( 0, size - 14 ) + '.' + vr.substr( size - 14, 3 ) + '.' + vr.substr( size - 11, 3 ) + '.' + vr.substr( size - 8, 3 ) + '.' + vr.substr( size - 5, 3 ) + ',' + vr.substr( size - 2, size ) ;}
    }
}

function FormataTelefone(tammax,teclapres) {
	var tecla = teclapres.keyCode;
	vr = document.form[campo].value;
	vr = vr.replace( "/", "" );
	vr = vr.replace( "/", "" );
	vr = vr.replace( ",", "" );
	vr = vr.replace( ".", "" );
	vr = vr.replace( ".", "" );
	vr = vr.replace( ".", "" );
	vr = vr.replace( ".", "" );
	vr = vr.replace( "-", "" );
	vr = vr.replace( "-", "" );
	vr = vr.replace( "-", "" );
	vr = vr.replace( "-", "" );
	vr = vr.replace( "-", "" );
	tam = vr.length;

	if (tam < tammax && tecla != 8){ tam = vr.length + 1 ; }

	if (tecla == 8 ){	tam = tam - 1 ; }
		
	if ( tecla == 8 || tecla >= 48 && tecla <= 57 || tecla >= 96 && tecla <= 105 ){
		if ( tam <= 2 ){ 
	 		document.form[campo].value = vr ; }
	 	if ( (tam > 4) ){
	 		document.form[campo].value = vr.substr( 0, tam - 4 ) + '-' + vr.substr( tam - 4, tam ) ; }
	}		
}

function FormataCpf(maxSize,event) {
	var tecla = getKeyCode(event);
    var targ = getTarget(event);
	vr = targ.value;
	
	vr = vr.replace( "/", "" );
	vr = vr.replace( "/", "" );
	vr = vr.replace( ",", "" );
	vr = vr.replace( ".", "" );
	vr = vr.replace( ".", "" );
	vr = vr.replace( ".", "" );
	vr = vr.replace( ".", "" );
	vr = vr.replace( "-", "" );
	vr = vr.replace( "-", "" );
	vr = vr.replace( "-", "" );
	vr = vr.replace( "-", "" );
	vr = vr.replace( "-", "" );
	tam = vr.length;
	
	if (tam < maxSize && tecla != 8){ 
		tam = vr.length + 1 ; 
	}

	if (tecla == 8 ){	
		tam = tam - 1 ; 
	}
		
	if ( tecla == 8 || tecla >= 48 && tecla <= 57 || tecla >= 96 && tecla <= 105 ){
		if ( tam <= 2 ){ 
			 targ.value = vr ; }
	 	if ( (tam > 2) && (tam <= 5) ){
			 targ.value = vr.substr( 0, tam - 2 ) + '-' + vr.substr( tam - 2, tam ) ; }
	 	if ( (tam >= 6) && (tam <= 8) ){
	 		 targ.value = vr.substr( 0, tam - 5 ) + '.' + vr.substr( tam - 5, 3 ) + '-' + vr.substr( tam - 2, tam ) ; }
	 	if ( (tam >= 9) && (tam <= 11) ){
	  		 targ.value = vr.substr( 0, tam - 8 ) + '.' + vr.substr( tam - 8, 3 ) + '.' + vr.substr( tam - 5, 3 ) + '-' + vr.substr( tam - 2, tam ) ; }
	 	if ( (tam >= 12) && (tam <= 14) ){
	 		targ.value = vr.substr( 0, tam - 11 ) + '.' + vr.substr( tam - 11, 3 ) + '.' + vr.substr( tam - 8, 3 ) + '.' + vr.substr( tam - 5, 3 ) + '-' + vr.substr( tam - 2, tam ) ; }
	 	if ( (tam >= 15) && (tam <= 17) ){
	 		targ.value = vr.substr( 0, tam - 14 ) + '.' + vr.substr( tam - 14, 3 ) + '.' + vr.substr( tam - 11, 3 ) + '.' + vr.substr( tam - 8, 3 ) + '.' + vr.substr( tam - 5, 3 ) + '-' + vr.substr( tam - 2, tam ) ;}
	}		
}


function FormataCgc(maxSize,event) {
	var tecla = getKeyCode(event);
	var targ = getTarget(event);
	vr = targ.value;
	
	vr = vr.replace( "/", "" );
	vr = vr.replace( "/", "" );
	vr = vr.replace( "/", "" );
	vr = vr.replace( ",", "" );
	vr = vr.replace( ".", "" );
	vr = vr.replace( ".", "" );
	vr = vr.replace( ".", "" );
	vr = vr.replace( ".", "" );
	vr = vr.replace( ".", "" );
	vr = vr.replace( ".", "" );
	vr = vr.replace( ".", "" );
	vr = vr.replace( "-", "" );
	vr = vr.replace( "-", "" );
	vr = vr.replace( "-", "" );
	vr = vr.replace( "-", "" );
	vr = vr.replace( "-", "" );
	tam = vr.length;

	if (tam < maxSize && tecla != 8){ tam = vr.length + 1 ; }

	if (tecla == 8 ){	tam = tam - 1 ; }
		
	if ( tecla == 8 || tecla >= 48 && tecla <= 57 || tecla >= 96 && tecla <= 105 ){
		if ( tam <= 2 ){ 
	 		targ.value = vr ; }
	 	if ( (tam > 2) && (tam <= 6) ){
	 		targ.value = vr.substr( 0, tam - 2 ) + '-' + vr.substr( tam - 2, tam ) ; }
	 	if ( (tam >= 7) && (tam <= 9) ){
	 		targ.value = vr.substr( 0, tam - 6 ) + '/' + vr.substr( tam - 6, 4 ) + '-' + vr.substr( tam - 2, tam ) ; }
	 	if ( (tam >= 10) && (tam <= 12) ){
	 		targ.value = vr.substr( 0, tam - 9 ) + '.' + vr.substr( tam - 9, 3 ) + '/' + vr.substr( tam - 6, 4 ) + '-' + vr.substr( tam - 2, tam ) ; }
	 	if ( (tam >= 13) && (tam <= 14) ){
	 		targ.value = vr.substr( 0, tam - 12 ) + '.' + vr.substr( tam - 12, 3 ) + '.' + vr.substr( tam - 9, 3 ) + '/' + vr.substr( tam - 6, 4 ) + '-' + vr.substr( tam - 2, tam ) ; }
	 	if ( (tam >= 15) && (tam <= 17) ){
	 		targ.value = vr.substr( 0, tam - 14 ) + '.' + vr.substr( tam - 14, 3 ) + '.' + vr.substr( tam - 11, 3 ) + '.' + vr.substr( tam - 8, 3 ) + '.' + vr.substr( tam - 5, 3 ) + '-' + vr.substr( tam - 2, tam ) ;}
	}
	
}


function  FormataNCM(event) {
    var sMask = "0123456789";
    var KeyTyped = String.fromCharCode(getKeyCode(event));
    // IE only version var KeyTyped = String.fromCharCode(window.event.keyCode);
    // ** IE only var srcObject = window.event.srcElement;
    var targ = getTarget(event);
    //alert(window.event.keyCode);
    keyCount = targ.value.length;
    keyCode = getKeyCode(event);
    if (keyCode < 15) /* del, backspace and other movement characters are okay */ {
       return true;
    } else if (sMask.indexOf(KeyTyped.toString()) == -1) {
       return false;
    }

    keyEntered = KeyTyped;
    keyCount++;
    switch (keyCount) {
    case 5:
      targ.value = targ.value + ".";
      break;
    case 8:
      targ.value = targ.value + ".";
      break;
    default:
		  return true;
    }
    return false;
 }

<!-- exemplo de uso: <input type=text name=test length=15 onKeyPress="return(currencyFormat(this,'.',',',event))"> -->
function currencyFormat(fld, milSep, decSep, e) {
	var sep = 0;
	var key = '';
	var i = j = 0;
	var len = len2 = 0;
	var strCheck = '0123456789';
	var aux = aux2 = '';
	var whichCode = (window.Event) ? e.which : e.keyCode;
	
	if (whichCode == 13) return true;  // Enter
	
	key = String.fromCharCode(whichCode);  // Get key value from key code
	
	if (strCheck.indexOf(key) == -1) return false;  // Not a valid key
	
	len = fld.value.length;
	
	for(i = 0; i < len; i++)
		if ((fld.value.charAt(i) != '0') && (fld.value.charAt(i) != decSep)) break;
		
	aux = '';
	
	for(; i < len; i++)
		if (strCheck.indexOf(fld.value.charAt(i))!=-1) aux += fld.value.charAt(i);
		
	aux += key;
	len = aux.length;
	
	if (len == 0) fld.value = '';
	if (len == 1) fld.value = '0'+ decSep + '0' + aux;
	if (len == 2) fld.value = '0'+ decSep + aux;
	
	if (len > 2) {
		aux2 = '';
		for (j = 0, i = len - 3; i >= 0; i--) {
			if (j == 3) {
				aux2 += milSep;
				j = 0;
			}
			aux2 += aux.charAt(i);
			j++;
		}
		
		fld.value = '';
		len2 = aux2.length;
		
		for (i = len2 - 1; i >= 0; i--)
			fld.value += aux2.charAt(i);
			
		fld.value += decSep + aux.substr(len - 2, len);
	}
	return false;
}

function filterNum(str) {
re = /[.]/;
while (str.indexOf(".")>0){
  str = str.replace(re, "");
}
re = /[,]/;
str = str.replace(re, ".");
return str;
}

     function isFutureDate(str1)
     {
     	  if(str1.length < 10) {
     	  	return false;
     	  }
          // Parse the string in DD/MM/YYYY format
          re = /(\d{1,2})\/(\d{1,2})\/(\d{4})/
          var arr = re.exec( str1 );
          var dt1 = new Date( parseInt(arr[3]), parseInt(arr[2], 10) - 1, parseInt(arr[1], 10) );
     
          return dt1 > new Date();
     }
