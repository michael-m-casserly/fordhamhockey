function PrintThisPage() 
{ 
   var sOption="toolbar=yes,location=no,directories=yes,menubar=yes,"; 
       sOption+="scrollbars=yes,width=750,height=600,left=100,top=25"; 

   var sWinHTML = document.getElementById('Fordham HockeyNestContent').innerHTML; 
	   Volume = document.getElementById('Fordham HockeyNestVolume').innerHTML; 
	   Issue = document.getElementById('Fordham HockeyNestIssueNo').innerHTML; 
   	   Date = document.getElementById('Fordham HockeyNestDate').innerHTML; 
	   Title = document.getElementById('Fordham HockeyNestTitle').innerHTML; 
      
   var winprint=window.open("","fordhamhockey_nest_print",sOption); 
       winprint.document.open(); 
       winprint.document.write("<html><title>Fordham Hockey's Nest</title><link rel='stylesheet' type='text/CSS' href='http://fordhamhockey.mcasserly.com/fordhamhockey.css'><body><table border='0' width='100%'><tr><td align='left'><img src='Fordham HockeyNestHeader.jpg' width='114' height='93' border='0'></td><td align='center'><table border='0'><tr><td colspan='2'><img src='Fordham HockeyNestTitle.jpg' width='298' height='55' border='0'></td></tr><tr><td><div class='Fordham HockeyNestVolume'>");
		winprint.document.write(Volume);
		winprint.document.write("</div></td><td><div class='Fordham HockeyNestIssue'>");
		winprint.document.write(Issue);
		winprint.document.write("</div></td></tr></table></td><td align='right'><img src='Fordham HockeyNestHeader.jpg' width='114' height='93'></td></tr><tr><td colspan='3'><hr align='left'></td></tr><tr><td colspan='3'><div class='Fordham HockeyNestDate'>");
		winprint.document.write(Date);
		winprint.document.write("</div></td></tr><tr><td colspan='3'>&#160;</td></tr><tr><td colspan='3'><div class='Fordham HockeyNestTitle'>");
		winprint.document.write(Title);
		winprint.document.write("</div></td></tr><tr><td colspan='3'>&#160;</td></tr>");
		winprint.document.write("<tr><td colspan='3'>");
       	winprint.document.write(sWinHTML);          
		winprint.document.write("</td></tr><tr><td colspan='3'>&#160;</td></tr><tr><td colspan='3' align='center'><img src='Fordham HockeyNestFooter.jpg' width='51' height='56'><img src='Fordham HockeyNestFooter.jpg' width='51' height='56'><img src='Fordham HockeyNestFooter.jpg' width='51' height='56'><img src='Fordham HockeyNestFooter.jpg' width='51' height='56'><img src='Fordham HockeyNestFooter.jpg' width='51' height='56'><img src='Fordham HockeyNestFooter.jpg' width='51' height='56'><img src='Fordham HockeyNestFooter.jpg' width='51' height='56'><img src='Fordham HockeyNestFooter.jpg' width='51' height='56'></td></tr></table></body></html>");
       winprint.document.close(); 
       winprint.focus(); 
}
