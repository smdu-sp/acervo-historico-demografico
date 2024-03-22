function alerta(msg) {
   document.getElementById('alertas').style.visibility="visible";
 document.getElementById('alertas').innerHTML="<br><table border='0' cellpadding='0' cellspacing='0' style='BORDER-COLLAPSE:collapse' bordercolor='#111111'>"+
   "<tr><TD WIDTH='21' VALIGN='top' align='right'><IMG SRC='Imagens/contents_poll_bg.gif' WIDTH='21' HEIGHT='40' BORDER='0'></TD>"+
   "<TD WIDTH='165' VALIGN='top'><TABLE WIDTH='520' CELLPADDING='0' CELLSPACING='1' BORDER='0' BGCOLOR='#949DA6' id='table1'><TR><TD BGCOLOR='#FFFFFF'>"+
   "<table border='0' cellpadding='0' cellspacing='5' style='border-collapse: collapse' width='100%' id='table2'><tr><td width='123'><p align='center'>"+
   "<img border='0' src='Imagens/mensagem_alerta.gif' width='50'></td><td>"+msg+"</td></tr></table></TD></TR></TABLE></TD></TR></TABLE>";
  scroll(0,0);
}
 
function erros(msg) {
   document.getElementById('erros').style.visibility="visible";
 document.getElementById('erros').innerHTML="<br><table border='0' cellpadding='0' cellspacing='0' style='BORDER-COLLAPSE:collapse' bordercolor='#111111'>"+
   "<tr><TD WIDTH='21' VALIGN='top' align='right'><IMG SRC='Imagens/contents_poll_bg.gif' WIDTH='21' HEIGHT='40' BORDER='0'></TD>"+
   "<TD WIDTH='165' VALIGN='top'><TABLE WIDTH='520' CELLPADDING='0' CELLSPACING='1' BORDER='0' BGCOLOR='#949DA6' id='table1'><TR><TD BGCOLOR='#FFFFFF'>"+
   "<table border='0' cellpadding='0' cellspacing='5' style='border-collapse: collapse' width='100%' id='table2'><tr><td width='123'><p align='center'>"+
   "<img border='0' src='Imagens/mensagem_erro.gif' width='50'></td><td>"+msg+"</td></tr></table></TD></TR></TABLE></TD></TR></TABLE>";
	scroll(0,0);
}
 
function info(msg) {
   document.getElementById('info').style.visibility="visible";
 document.getElementById('info').innerHTML="<br><table border='0' cellpadding='0' cellspacing='0' style='BORDER-COLLAPSE:collapse' bordercolor='#111111' align='center'>"+
   "<tr><TD WIDTH='21' VALIGN='top' align='right'><IMG SRC='Imagens/contents_poll_bg.gif' WIDTH='21' HEIGHT='40' BORDER='0'></TD>"+
   "<TD WIDTH='165' VALIGN='top'><TABLE WIDTH='520' CELLPADDING='0' CELLSPACING='1' BORDER='0' BGCOLOR='#949DA6' id='table1' align='center'><TR><TD BGCOLOR='#FFFFFF'>"+
   "<table border='0' cellpadding='0' cellspacing='5' style='border-collapse: collapse' width='100%' id='table2'><tr><td width='100'><p align='center'>"+
   "<img border='0' src='Imagens/mensagem_info.gif' width='50'></td><td>"+msg+"</td></tr></table></TD></TR></TABLE></TD></TR></TABLE>";
	scroll(0,0);
}
