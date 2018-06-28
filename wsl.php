<?php include ("head.html"); ?>

Windows Subsystem for Linux

<h1>Windows Subsystem for Linux (WSL)</h1>
Standard Windows does not provide a complete set of file and string manipulation utilities.
WSL gives access to the complete set of Linux (Unix) tools, through the "bash shell".
<br>
<ul>
<li>Details on how to install WSL can be found on:-<br>
<a href="https://msdn.microsoft.com/en-gb/commandline/wsl/install_guide">Microsoft: Install the Linux Subsystem on Windows 10</a><br><br></li>
<li>Rather easier to understand is:-<br>
<a href="https://www.howtogeek.com/249966/how-to-install-and-use-the-linux-bash-shell-on-windows-10/">HowToGeek: how to install and use the linux bash shell on windows 10</a></li>
</ul>
<h3>general utilities</h3>
<ul>
 <li>cksum, cal, cmp, comm,&nbsp; csplit, diff, du, file, grep, hd, more, pax, pr, sed, split, strings, tail, touch, uniq and wc.</li>
</ul>
<h3>filter programs</h3>
<ul>
 <li>cat, col, cut, dd, expand, fold, fmt, grex, nl, paste, sort and tr.</li>
</ul>
<h3>Commonly Used utilities</h3>
From the lists above, these are the ones used most often.
<pre>
<ul style="line-height: 50%">
 <li>Cat   - Concatenates files.</li>
 <li>Diff  - Compares files.</li>
 <li>Grep  - Scans one or more text files for a specified text string or <a href="regex.php">regular expression</a>.</li>
 <li>Split - Breaks a file up into pieces, either by number of lines or bytes.</li>
 <li>Touch - Set file modified date/time.</li>
 <li>Uniq  - Writes one copy of each unique line, i.e deletes duplicate lines</li>
</ul>
</pre>
<br><br>

<?php include ("Last-modified.txt");  ?>


<?php include ("foot.html"); ?>
<!-- END -->