<?php include ("head.html"); ?>

<h1>How to get context menu entries to have underline keyboard
  shortcuts</h1>
In the context menu (right click) underlined characters are keyboard
shortcuts. Details for the context menu are held in the windows
registry. Use the&nbsp; registry editor (carefully) to modify the
windows registry.<br>
<ol>
  <li>The default underlining is the first character.</li>
  <li>If there is more than one starting with the same character,
    then both entries will have their first character underlined. To
    activate a subsequent entry, you need to type that character as
    many times as there are entries.</li>
  <li>You can chose to underline a different character by using the
    data field of the REG_SZ entry at the same level as the entry.</li>
  <li>By default there is nothing "(value not set)" in the the data
    field.</li>
  <li>You can place any text you want in this field (prefably
    something relevant e.g. "Unix style utilities - WinXs" in
    HKEY_LOCAL_MACHINE\SOFTWARE\Classes\Folder\shell\WinXs)</li>
  <li>If you want something other the first character, you precede
    that character with an &amp; e.g. "Uni&amp;x style utilities -
    WinXs"</li>
</ol>
<br><br>

<?php include ("Last-modified.txt");  ?>


<?php include ("foot.html"); ?>
<!-- END -->