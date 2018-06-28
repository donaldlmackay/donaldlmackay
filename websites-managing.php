<?php include ("head.html"); ?>

<h1>Managing Websites</h1>
<h3>Text editor</h3>
For websites using HTML5 and CSS3, editing files in a text editor is easier (for an old hand - at least) than using a dedicated website development environment.
<p class="indent">
<ul>
<li><a href="http://www.snapfiles.com/get/notepadplus.html">Notepad++</a> (freeware) is a good choice, as it offers customizable syntax highlighting, code completion, macro recording and playback, search/replace (with support for Regular Expressions), code collapse, <a href="notepad-plus-multi-view.html">multi-view editing</a>, tag matching, and a lot more.</li>
<li>However for the very basics, the SeaMonkey browser, "<a href="#composer">composer</a>" feature can be useful (see below).</li>
</ul>
</p>
<h3>Whole Website Look and Feel</h3>
To ensure all pages on a website, have a common look and feel and have consistent navigation, you need a common framework to each page. Typically this will be a header on the top and a navigator on the left. There are many tools which can help produce this common framework. All rely on automatically "including" one part of a page within another<br>
<p class="indent">
<ul>
<li><a href="http://dennisbareis.com/ppwdownl.htm">PPWIZARD</a> - HTML Preprocessor Include. PPWIZARD is a program run from the DOS command prompt that includes external files (such as the header and navigator) into your HTML file.</li>
<li><a href="http://www.w3schools.com/php/php_includes.asp">Server Side Includes</a> for php. PHP inserts the content of one file (such as the header and navigator) into another file before the server executes it.</li>
<li>Embedding a <a href="http://www.w3schools.com/html/html_iframe.asp">frame</a> within a page. An iframe is used to display a web page within a web page. The outer page has the header and navigator.</li>
<li>Breaking a page up into <a href="http://www.w3schools.com/tags/tag_frameset.asp%20html%20frameset">frames</a>.There is an outer page for each page and it includes the frame with the header and navigator.<br></li>
</ul>
Of the choices above, HTML Preprocessor PPWIZARD has proved easiest and most flexible.
</p>
<h3>Image Manipulation</h3>
<p class="indent">
<ul>
<li><a href="http://www.snapfiles.com/get/irfan.html">IrfanView</a> (freeware) image viewer/editor. It includes, batch conversion (resizing etc), image adjustment, image editing, resizing, panorama stitching, and a lot more.</li>
<li><a href="http://www.snapfiles.com/get/paintnet.html">Paint.NET</a> (freeware) image editor replacement for Microsoft Paint. It includes clone stamp, layers with transparency, Red-Eye removal, image resizing, sharpening, and a lot more.</li>
<li><a href="http://www.snapfiles.com/get/photoscape.html">PhotoScape</a> (freeware) image editor - cropping, Animated GIF creator, and a lot more.</li>
<li><a href="http://www.snapfiles.com/get/gimp.html">GIMP</a> (freeware) image editor often compared to Photoshop. It includes layer support, masks, filters, effects, and a lot more.</li>
<li><a href="http://polaroid-dust-scratch-removal-software.en.softonic.com/">Polaroid Dust and Scratch Removal</a> (freeware)  - does what it says - for old and scratched photos.</li>
<li><a href="http://www.filehippo.com/search?q=screen+snapshot">Snipping Tool</a> (freeware) - screen snapshots built into windows vista onwards. Also many other freeware alternatives, all can take a capture a screen shot of a rectangle of any part of the screen and then annotate, and save the image.</li>
</ul>
</p>
<h3>Browsers</h3>
<p class="indent">
<ul>
<li><a href="http://www.snapfiles.com/get/phoenixmoz.html">Firefox</a> (freeware) - has loads of extensions (add-ons) for Web Development.</li>
<li><a href="http://www.snapfiles.com/get/googlechrome.html">Google Chrome</a> (freeware) - has a developer tool which makes debugging CSS and HTML problems very clear.</li>
<li><a href="http://windows.microsoft.com/en-GB/internet-explorer/products/ie/home/">Internet Explorer 9.0</a> (freeware) - has a developer tool which makes debugging CSS and HTML problems very clear. Does it look like to the one from Google Chrome?</li>
<li><a href="http://www.seamonkey-project.org/">SeaMonkey</a><a href="SeaMonkey"></a> (freeware) - similar to a cut down version of Firefox which supports some of the Firefox extensions.</li>
<li>SeaMonkey has a builtin WYSIWYG-Editor "composer". Two "composer" features can be useful. One is starting with a completely new webpage and using composer to make links and add formatting like headings, lists, tables, links etc. Another is to examine existing webpages and see structure such as tables and other HTML layout tags.</li>
</ul>
</p>
<h3>FTP</h3>
File Transfer Protocol (FTP) is a standard way to transfer files from one place to another over the Internet, that is to upload a copy from your own hard disk to a website.
<p class="indent">
<ul>
<li><a href="http://www.snapfiles.com/get/filezilla.html">FileZilla</a> (freeware) FTP client with an Explorer style interface showing local and remote folders. Simply works the way it's supposed to.</li>
</ul>
</p>

If you need to move files between 2 computers using FTP, one of them will need to run an FTP Server. All web hosts that run websites will be using an FTP Server.

<ul>
<li><a href="http://www.snapfiles.com/get/quickeasyftpserver.html"> Quick 'n Easy FTP Server Lite</a> (freeware) is easy to set up and run on any computer. Once started, it runs automatically. It will send and receive files to and from and computer sending it requests from an FTP client.</li>
</ul>





<br><br>

<?php include ("Last-modified.txt");  ?>


<?php include ("foot.html"); ?>
<!-- END -->