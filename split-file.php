<?php include ("head.html"); ?>

<h3>To split a text file at delimiters e.g. Minicrib at change of letter</h3>
<ol>
 
 <li>To split a text file use the "csplit" command.</li>

 <li>In windows use a Unix emulator which has the Unix command "csplit".</li>

 <li>A good Unix emulator is "cygwin".</li>

 <li>Place the file to be split into the folder C:\cygwin64\home\yyyyyy where yyyyyy is the user name</br>
e.g. C:\cygwin64\home\Donald

 <li>Syntax of csplit command is csplit input-file /delimiter/ {number of times}</br>

e.g. csplit aaa.txt /###/ {*}

 <li>Output is in the form of files named:- xx01, xx02 ... xxnn.</li>

 <li>To make these files useable use a renamer to append ".txt" to file-names</br>
 e.g:- xx01.txt, xx02.txt ... xxnn.txt</li>
</ol>

</br></br>

<?php include ("Last-modified.txt");  ?>


<?php include ("foot.html"); ?>
<!-- END -->