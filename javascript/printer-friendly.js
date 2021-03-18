function PrintThisPage() 



{ 

   var sOption="toolbar=no,location=no,directories=no,menubar=yes,"; 

       sOption+="scrollbars=yes,resizable=yes,width=760,height=600,left=100,top=25"; 



   var sWinHTML = document.getElementById('contentstart').innerHTML; 



   var winprint=window.open("","",sOption); 

       winprint.document.open(); 

       winprint.document.write('<html><head><title>Fordham Hockey</title><link rel=stylesheet type=text/CSS href="http://www.fordhamramshockey.com/fordhamhockey.css" /></head>');

       winprint.document.write('<body><table width="100%"><tr><td align="left">&nbsp;</td><td align="center"></td><td align="right"><a class="textlink" href="javascript:print();">Print</a>&nbsp;&nbsp;-&nbsp;&nbsp;<a class="textlink" href="javascript:close();">Close Window</a></td></tr><tr><td colspan="3"><hr align="right"></td></tr><tr><td align="left" width="33%"><img src="http://www.fordhamramshockey.com/images/logo_fordhamhockey.jpg"></td><td align="center" width="33%"><img src="http://www.fordhamramshockey.com/images/FordhamHockeyBanner.gif"></td><td align="right" width="33%"><img src="http://www.fordhamramshockey.com/images/logo_fordhamhockey.jpg"></td></tr></table><br>');

       winprint.document.write(sWinHTML);          

       winprint.document.write('<table width="100%"><tr><td colspan="3"><hr align="right"></td></tr><tr><td align="left">&nbsp;</td><td align="center"></td><td align="right"><a class="textlink" href="javascript:print();">Print</a>&nbsp;&nbsp;-&nbsp;&nbsp;<a class="textlink" href="javascript:close();">Close Window</a></td></tr></table>');

       winprint.document.write('</body></html>'); 

       winprint.document.close(); 

       winprint.focus(); 

}



