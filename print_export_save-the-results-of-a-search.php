<?php include ("head.html"); ?>

<h1>Print/export/save the results of a search</h1>

Is there a way to do this, be it through the GUI or command line? <br>
<br>
1 - Open Windows Explorer and search for what you want<br>
2 - When the search results populate, select all (Ctrl + A)<br>
3 - Hold the Shift key and Right Click on the search results<br>
4 - Select "Copy as Path" (this option only shows up when you hold
shift before the right click)<br>
5 - Paste into a notepad window, Excel spreadsheet, etc...<br>
<br>
<h1>In DOS</h1>
<br>
DIR *.rex* /S &gt;C:MYDATA.TXT<br>
The results will be formatted as:<br>
"\path\to\first\item"<br>
"\path\to\second\item"

<br><br>

<?php include ("Last-modified.txt");  ?>


<?php include ("foot.html"); ?>
<!-- END -->