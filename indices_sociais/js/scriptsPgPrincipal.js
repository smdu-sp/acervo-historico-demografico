/* --- SCRIPT DATA --- */

function data () {
	var mydate=new Date();
	var theYear=mydate.getFullYear();
	var day=mydate.getDay();
	var month=mydate.getMonth();
	var daym=mydate.getDate();
	if (daym<10) {
		daym="0"+daym
	}
	var dayarray=new Array("Domingo","Segunda-feira","Terça-feira","Quarta-feira","Quinta-feira","Sexta-feira","Sábado");
	var montharray=new Array("janeiro","fevereiro","março","abril","maio","junho","julho","agosto","setembro","outubro","novembro","dezembro");
	//document.write( dayarray[day] + ", " + daym + " de " + montharray[month] + " de " + theYear + "&nbsp;&nbsp;");
	document.write( "São Paulo" + ", " + daym + " de " + montharray[month] + " de " + theYear + "&nbsp;&nbsp;");
}


/* --- SCRIPT FONTSIZE --- */

var expDays = 9999;
var standardStyle = '2';
var nameOfCookie = 'switchstyle';
var urlToCSSDirectory = 'css/'; 

var ScreenCSS_1 = 'PMSP_small.css';
var ScreenCSS_2 = 'PMSP_Medium.css';
var ScreenCSS_3 = 'PMSP_Large.css';


function imagemCSS1(){
	var fontSize = GetCookie(nameOfCookie);
	var link1 = "Imagens/portal/fonte1.gif";
	var link2 = "Imagens/portal/fonte2.gif";
	var link3 = "Imagens/portal/fonte3.gif";
	if (fontSize == 1) {
		var link1 = "Imagens/portal/fonte1_on.gif";
	}
	return document.write("<img src='" + link1 + "' border='0' alt='Fonte Pequena'>");
}

function imagemCSS2(){
	var fontSize = GetCookie(nameOfCookie);
	var link1 = "Imagens/portal/fonte1.gif";
	var link2 = "Imagens/portal/fonte2.gif";
	var link3 = "Imagens/portal/fonte3.gif";
	if (fontSize == 2) {
		var link2 = "Imagens/portal/fonte2_on.gif";
	}
	return document.write("<img src='" + link2 + "' border='0' alt='Fonte Média'>");
}

function imagemCSS3(){
	var fontSize = GetCookie(nameOfCookie);
	var link1 = "Imagens/portal/fonte1.gif";
	var link2 = "Imagens/portal/fonte2.gif";
	var link3 = "Imagens/portal/fonte3.gif";
	if (fontSize == 3) {
		var link3 = "Imagens/portal/fonte3_on.gif";
	}
	return document.write("<img src='" + link3 + "' border='0' alt='Fonte Grande'>");
}


function switchStyleOfUser(){
	var fontSize = GetCookie(nameOfCookie);
	if (fontSize == null) {
		fontSize = standardStyle;
	}

	if (fontSize == "1") { document.write('<link rel="stylesheet" type"text/css" href="' + urlToCSSDirectory + ScreenCSS_1 + '" media="screen">'); }
	if (fontSize == "2") { document.write('<link rel="stylesheet" type"text/css" href="' + urlToCSSDirectory + ScreenCSS_2 + '" media="screen">'); }
	if (fontSize == "3") { document.write('<link rel="stylesheet" type"text/css" href="' + urlToCSSDirectory + ScreenCSS_3 + '" media="screen">'); }

	var fontSize = "";
	return fontSize;
}

var exp = new Date();
exp.setTime(exp.getTime() + (expDays*24*60*60*1000));

function getCookieVal (offset) {
	var endstr = document.cookie.indexOf (";", offset);
	if (endstr == -1)
	endstr = document.cookie.length;
	return unescape(document.cookie.substring(offset, endstr));
}

function GetCookie (name) {
	var arg = name + "=";
	var alen = arg.length;
	var clen = document.cookie.length;
	var i = 0;
	while (i < clen) {
		var j = i + alen;
		if (document.cookie.substring(i, j) == arg)
		return getCookieVal (j);
		i = document.cookie.indexOf(" ", i) + 1;
		if (i == 0) break;
	}
	return null;
}

function SetCookie (name, value) {
	var argv = SetCookie.arguments;
	var argc = SetCookie.arguments.length;
	var expires = (argc > 2) ? argv[2] : null;
	var path = (argc > 3) ? argv[3] : null;
	var domain = (argc > 4) ? argv[4] : null;
	var secure = (argc > 5) ? argv[5] : false;
	document.cookie = name + "=" + escape (value) +
	((expires == null) ? "" : ("; expires=" + expires.toGMTString())) +
	((path == null) ? "" : ("; path=" + path)) +
	((domain == null) ? "" : ("; domain=" + domain)) +
	((secure == true) ? "; secure" : "");
}

function DeleteCookie (name) {
	var exp = new Date();
	exp.setTime (exp.getTime() - 1);
	var cval = GetCookie (name);
	document.cookie = name + "=" + cval + "; expires=" + exp.toGMTString();
}

function doRefresh(){
	location.reload();
}

document.write(switchStyleOfUser());

/* --- LIMPAR CAMPO BUSCA HOME ---*/
 function clear_box(id_box)
 {
 	document.getElementById(id_box).value='';
 }