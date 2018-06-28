<?php include ("head.html"); ?>

<h1>Concatenate Text Files in Windows</h1>
<h3>To Concatenate all files in directory</h3>
<blockquote>copy *.txt destination.txt</blockquote>
<h3>To Concatenate specific files</h3>
<blockquote>copy a.txt+b.txt+c.txt destination.txt</blockquote>
<h3>To Concatenate groups of files</h3>
<blockquote>
  <div align="left">Create a batch file containing lists of the names of files to be joined e.g.<br>
    <br>
    copy head.txt+websites-cloud-rest.html+Last-modified.php+foot.txt websites-cloud.php<br>
    copy head.txt+Command-line-rest.html+Last-modified.php+foot.txt Command-line.php</div>
</blockquote>
<br><br>

<?php include ("Last-modified.txt");  ?>


<?php include ("foot.html"); ?>
<!-- END -->