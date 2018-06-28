<?php include ("head.html"); ?>


<!-- +++++start of main body+++++++ -->
<h1>Cloud Storage Backup</h1>
There are several cloud storage providers who will provide free online storage (backup). <br>
<ul>
 <li>25 GB SkyDrive (if you signed up before April 2012) 7GB for
  others.</li>
 <li>5 GB google - Google Drive (15 GB of storage across Gmail, Google Drive and Google+ Photos)</li>
 <li>5 GB amazon - Cloud Drive</li>
</ul>
You can use more than one together on Windows. If you nest the folders, the innermost one will be stored on all cloud storage providers. e.g.<br>
<blockquote>C:\Users\xxxxxx\SkyDrive\Google Drive\Cloud Drive<br>
</blockquote>
<h2>Moving amazon-cloud-drive folder </h2>
<a
 href="http://damianblog.com/2013/04/01/amazon-cloud-drive-location/">
 http://damianblog.com/2013/04/01/amazon-cloud-drive-location/</a><br>
<br>
Do this entirely at your own risk, and if you don’t know what this means, then don’t do it.<br>
You can use regedit to change the sync folder’s location, under "HKEY_CURRENT_USER\Software\Amazon\AmazonCloudDrive\SyncRoot" change "SyncRoot" to a different folder.<br>
<h2>Moving Google Drive folder</h2>
<a
 href="http://gappstips.com/docs-tips/view/106/change-the-google-drive-default-folder">
 http://gappstips.com/docs-tips/view/106/change-the-google-drive-default-folder</a><br>
<br>
<ol>
 <li>Click on the Google Drive icon in your system tray</li>
 <li>Choose Quit Google Drive</li>
 <li>Now move the Google Drive folder within Windows Explorer to a new location</li>
 <li>Restart Google Drive from Start --&gt; All Programs</li>
 <li>Google Drive will warn you that it can't find the folder, click on the Google Drive icon again and choose Error - Google Drive folder is missing</li>
 <li>A window will open up, choose Locate folder and go find the new Google Drive folder.</li>
</ol>
<h2>Moving SkyDrive folder</h2>
<a
 href="http://answers.microsoft.com/en-us/windowslive/forum/skydrive-files/move-skydrive-folder/3fa8e82b-2030-4327-bbe8-be27912515e3?msgId=aaea9657-b3d2-46a3-8a80-b003e4b90876">
 http://answers.microsoft.com/en-us/windowslive/forum/skydrive-files/move-skydrive-folder/3fa8e82b-2030-4327-bbe8-be27912515e3?msgId=aaea9657-b3d2-46a3-8a80-b003e4b90876</a><br>
<br>
<ol>
 <li>Wait until existing folder in sync.</li>
 <li>Disconnect Skydrive</li>
 <li>Move folder</li>
 <li>Reconnect Skydrive to new folder</li>
 <li>Wait for Skydrive to complete it's merge (which seems to be a check only).</li>
</ol>

<br><br>
<!-- +++++end of main body+++++++ -->


<?php include ("Last-modified.txt");  ?>


<?php include ("foot.html"); ?>
<!-- END -->