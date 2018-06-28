<?php include ("head.html"); ?>

<h1>How to view registry on another hard drive</h1>
<a href="http://www.pcreview.co.uk/forums/registry-secondary-attached-hard-drive-t1581259.html">http://www.pcreview.co.uk/forums/registry-secondary-attached-hard-drive-t1581259.html</a><br>
<br>
Run regedt32, then from the Local Machine Hive, choose Registry|Load Hive.<br>
Then navigate to the location of the hive you want to edit/read.<br>
Give it some tempname (doesn't matter what).<br>
Then when your done, move the cursor back to tempname,<br>
then Registry|Unload Hive, Registry|Exit

<br><br>

<?php include ("Last-modified.txt");  ?>


<?php include ("foot.html"); ?>
<!-- END -->