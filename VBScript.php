<?php include ("head.html"); ?>

<h1>VBScript (Visual Basic Scripting Edition) </h1>
allows you to write scripts to mechanise (automate) windows operations.<br>

<br>

A simple example for Windows Vista replacing mouse movements with
keystrokes. Taskbar command "Show Windows Side by side" (Tile Windows
Vertically)<br>

<ol>

  <li>Create a file called e.g. "VerticallyTile.vbs" </li>
  <li>with these 2 lines in it
<pre> Set objShell = CreateObject("Shell.Application")
 objShell.TileVertically
</pre>
  </li><li>Place it in (or make it accessible from) the start menu</li>
  <li>Invoke it by the Windows key followed by "V" (the initial letter of the vbs file)</li>
</ol>


Thus you can now use 2 keys instead of 2 mouse clicks.<br>

<br>

You can do the same with objShell.TileHorizontally, and objShell.MinimizeAll
<br><br>

<?php include ("Last-modified.txt");  ?>


<?php include ("foot.html"); ?>
<!-- END -->