<?php include("cabecalho.php"); ?>
</div>
<div id="animacao">
<script language="javascript">
if (AC_FL_RunContent == 0) {
alert("This page requires AC_RunActiveContent.js. In Flash, run \"Apply Active Content Update\" in the Commands menu to copy AC_RunActiveContent.js to the HTML output folder.");
} else {
AC_FL_RunContent(
'codebase', 'http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0',
'width', '100%',
'height', '300',
'src', 'img/animacao',
'quality', 'high',
'pluginspage', 'http://www.macromedia.com/go/getflashplayer',
'align', 'middle',
'play', 'true',
'loop', 'true',
'scale', 'showall',
'wmode', 'transparent',
'devicefont', 'false',
'id', 'animacao',
'bgcolor', '#ffffff',
'name', 'animacao',
'menu', 'false',
'allowScriptAccess','sameDomain',
'movie', 'img/animacao',
'salign', ''
); //end AC code
}
</script>
<noscript><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0" width="100%" height="300"> 
  <param name="movie" value="img/animacao.swf">
  <param name="quality" value="high">
  <embed src="img/animacao.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type=application/x-shockwave-flash" width="100%" height="300"></embed>
</object>
</noscript>
</div>
<div>
<?php include("rodape.php"); ?>