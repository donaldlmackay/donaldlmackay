<?php include ("head.html"); ?>

<h1>Troubleshooting Explorer.exe Crashing Issues</h1>
<h3>aaa</h3><br>
<p>Troubleshooting Explorer.exe Crashing Issues</p><br>
<p>I have seen lot of scenarios where users posting Explorer.exe crashing or stopped working issues. After troubleshooting lot of issues I'm posting here some common fixes that might help.</p>
<p>1. Most of the times the Explorer crashes due a bad or corrupt Context Menu the best way to troubleshoot is to download the ShellExView <a href="http://www.nirsoft.net/utils/shexview.html">http://www.nirsoft.net/utils/shexview.html</a> is an excellent tool to view and manage all installed shell extensions. The rule is to disable non-Microsoft context menu handlers *one-by-one* and verify if the problem is solved. If disabling one does not solve the problem, undo the disabled item and disable the next non-Microsoft handler. Do the same until the problem is solved and finally identify the culprit. Scroll right to see the Company Name column in ShellExView.</p>
<p>2. Then next thing to do is to run SFC /SCANNOW. The sfc /scannow command (System File Checker) scans the integrity of all protected Windows 7 system files and replaces incorrect corrupted, changed, or damaged versions with the correct versions if possible. Follow this document for further help SFC /SCANNOW Command - System File Checker <a href="http://www.sevenforums.com/tutorials/1538-sfc-scannow-command-system-file-checker.html">http://www.sevenforums.com/tutorials/1538-sfc-scannow-command-system-file-checker.html</a></p><br>
<p>3. If these steps files the Create a New Windows Profile <a href="http://www.sevenforums.com/tutorials/2974-user-accounts.html">http://www.sevenforums.com/tutorials/2974-user-accounts.html</a> sometimes a corrupt Windows Profile. Follow this Microsoft document for more help in creating New Profile and moving the files <br><a href="http://windows.microsoft.com/en-US/windows-vista/Fix-a-corrupted-user-profile">http://windows.microsoft.com/en-US/windows-vista/Fix-a-corrupted-user-profile</a> Fix a corrupted user profile</p>
<p>4. If that fails then it might some some corrupt Windows Files that is causing the issue we could try to do a Repair Install. Follow this article for more info <a href="http://www.sevenforums.com/tutorials/3413-repair-install.html">http://www.sevenforums.com/tutorials/3413-repair-install.html</a> Repair Install</p>
<p>5. If you still have the problem we have to investigate more then download the below Registry file</p>
<p>Download : <a href="http://www.sevenforums.com/attachments/crashes-debugging/91585d1281984549-explorer-crashing-constantly-dump-file-windbg-included-explorer.reg">http://www.sevenforums.com/attachments/crashes-debugging/91585d1281984549-explorer-crashing-constantly-dump-file-windbg-included-explorer.reg</a><br> Registry Fix</p>
<p>Right click on the .reg file and click on Merge.<br> Click on the Run button in the Security Warning pop-up.<br> Click on Continue (UAC), Yes, and OK when prompted.</p>
<p>Then once the Explorer crashes it will create a Dump File under C:\Localdump then follow this article <a href="http://www.sevenforums.com/tutorials/83172-dump-files-upload-seven-forums.html">http://www.sevenforums.com/tutorials/83172-dump-files-upload-seven-forums.html</a><br> Dump files - Upload to Seven Forums from Step 2</p>
<p>Thanks to <a href="http://social.answers.microsoft.com/Profile/en-US/?user=Andre.Ziegler&amp;referrer=http%3a%2f%2fsocial.answers.microsoft.com%2fForums%2fen-US%2fw7repair%2fthread%2fdba5e884-60db-4d47-aef1-acf4c3b46df6&amp;rh=sHqKC%2bamND6vlWBB474zzpT1L%2bqDsHy6W3P1ZOxeRyo%3d&amp;sp=forums">http://social.answers.microsoft.com/Profile/en-US/?user=Andre.Ziegler&amp;referrer=http%3a%2f%2fsocial.answers.microsoft.com%2fForums%2fen-US%2fw7repair%2fthread%2fdba5e884-60db-4d47-aef1-acf4c3b46df6&amp;rh=sHqKC%2bamND6vlWBB474zzpT1L%2bqDsHy6W3P1ZOxeRyo%3d&amp;sp=forums</a><br> Andre.Ziegler for creating the Registry file

<br><br>

<?php include ("Last-modified.txt");  ?>


<?php include ("foot.html"); ?>
<!-- END -->