<?php include ("head.html"); ?>

<h1>Firefox: How to fix "DownThemAll gets stuck loading"</h1>
<ol>
  <li>Find your profile.<br>
    <br>
    <ul>
      <li>It will be in a folder in C:\Users\xxxxx\AppData\Roaming\Mozilla\Firefox\Profiles\ where xxxxx is your user name.</li>
      <li>A list of profiles will appear.</li>
      <li>Click on the profile with "default" in the name.</li>
      <li>e.g. C:\Users\Donald\AppData\Roaming\Mozilla\Firefox\Profiles\c1jwvb7f.default-1355187822368</li>
    </ul>
    <br>
  </li>
  <li>Look for the file named "dta_queue.sqlite".<br>
    <br>
    <ul>
      <li>Rename the file to something like "dta_queue.sqlite.bak".</li>
      <li>DownThemAll should work now.</li>
    </ul>
  </li>
</ol>

<br><br>

<?php include ("Last-modified.txt");  ?>


<?php include ("foot.html"); ?>
<!-- END -->