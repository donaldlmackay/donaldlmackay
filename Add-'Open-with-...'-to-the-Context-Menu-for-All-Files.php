<?php include ("head.html"); ?>

<h1>Add 'Open with ...' to the Context Menu for All Files</h1>
<a href="http://www.howtogeek.com/howto/windows-vista/add-open-with-notepad-to-the-context-menu-for-all-files/"
rel="bookmark" title="http://www.howtogeek.com/howto/windows-vista/add-open-with-notepad-to-the-context-menu-for-all-files">
http://www.howtogeek.com/howto/windows-vista/add-open-with-notepad-to-the-context-menu-for-all-files</a>
<p>The default method of opening unknown files forces you to go
  through a list of known applications and is generally a pain to
  deal with. That&#8217;s why I like to have a context menu option for
  &#8220;Open with Notepad&#8221; so that I can quickly open up files without
  having to go through a lot of trouble.</p>
<p>This registry hack is nothing new, it&#8217;s been around forever&#8230;
  think of this as a refresher course. Also note that you can use
  this same technique to substitute any other application that you&#8217;d
  like by adjusting the path in the registry to point to the
  different editor.</p>
<p><img alt="image" src="image1.png" height="212" width="307"></p>
<p><strong>Manual Registry Hack</strong></p>
<p>Open regedit.exe through the start menu search or run box, and
  then browse down to the following key:</p>
<blockquote>
  <p>HKEY_CLASSES_ROOT\*\shell</p>
</blockquote>
<p><img style="display: inline;" alt="" src="image2.png" class="lazyLoad" height="302" width="584"> </p>
<p>Right-click on &#8220;shell&#8221; and choose to create a new key, calling it
  &#8220;Open with Notepad&#8221;. Create a new key below that one called
  &#8220;command&#8221;. Double-click on the (Default) value in the right-hand
  pane and enter in the following:</p>
<blockquote>
  <p>notepad.exe %1</p>
</blockquote>
<p>The change should take effect immediately&#8230; just right-click on
  any file and you&#8217;ll see the next menu entry.<br>
  <img alt="" src="Open-with.PNG" height="387" width="678"><br>
</p>
<br><br>

<?php include ("Last-modified.txt");  ?>


<?php include ("foot.html"); ?>
<!-- END -->