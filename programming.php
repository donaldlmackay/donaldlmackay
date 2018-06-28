<?php include ("head.html"); ?>

<h1>Programming</h1>
<h3>Program design</h3>
For an old hand there is only one way to design a batch program (or any program that takes input and produces output) - use <a href="http://en.wikipedia.org/wiki/Jackson_structured_programming">Jackson Structured Programming</a>.<br>
<br>
There is a freeware Jackson Structured Programming diagramming tool available from <a href="http://www.his.se/english/university/contact/staff/henrik-engstrom/jsp-editor/">Henrik Engstrom</a>.<br> You can create the sequence, selection,
iteration, correspondences between input and output structures and thence the program structure.
<h3>Single Read Ahead Rule - Jackson Structured Programming</h3>
<p class="indent">
Place the initial read immediately after opening a file, prior to any component that uses a record; place subsequent reads in the component that processes a record, immediately after the record has been processed.
</p>
</ul>
<h3>Basic</h3>
BASIC is a general-purpose, high-level programming language designed for ease of use. There are numerous dialects:
<ul>
<li><a href="http://www.microsoft.com/visualstudio/en-us/products/2010-editions/visual-basic-express">Visual Basic Express</a>. - (freeware).  Cut down version of the full Microsoft Visual Basic</li>
<li><a href="http://msdn.microsoft.com/en-us/beginner/ff384126.aspx">Microsoft Small Basic</a>. - (freeware). Simplified variant with a bare minimum of concepts, and only 14 keywords.</li>
<li><a href="http://www.thinbasic.com/">ThinBasic</a>. - (freeware). Develop programs for Windows quickly and easily in a Basic like language.</li>
<li><a href="http://en.wikipedia.org/wiki/VBScript/">VBScript (Visual Basic Scripting Edition)</a>. - (builtin to windows). De-facto scripting language, modeled on Visual Basic, for Microsoft Operating Systems . It uses the Component Object Model to access elements of the environment within which it is running; for example, the FileSystemObject (FSO) is used to create, read, update and delete files. Can write Windows-oriented batch files through the Windows Scripting Host (WSH). With WSH, the Windows OS treats a VBScript file as an executable - in other words, like a batch (.bat) or executable (.exe) file. As a result, you can use VBScript's rich and powerful functions and syntax to compose system-level scripts.</li>
</ul>
<h3>REXX</h3>

<p class="indent">
</p><ul>
<li><a href="http://www.rexxinfo.org/html/rexxinfo2.html">Rexx</a>. Rexx is a procedural programming language designed for manipulation of objects such as words and numbers, that allows programs and algorithms to be written in a clear and structured way. Rexx can issue commands to its host environment.</li>
<li><a href="http://www.oorexx.org/">Open Object Rexx</a>. Extends classic Rexx to include classes (a base set of classes is supplied), objects, methods, subclassing, polymorphism, and data encapsulation. These extensions do not replace classic Rexx functions or preclude the development or running of classic Rexx programs. </li>
<li><a href="index.php">Rexx Extensions - Rexx/DW</a>.(Rexx Dynamic Windows). Cross-platform GUI that runs natively on Windows etc to provide <a href="http://dwindows.netlabs.org/en/site/index.xml">Dynamic Windows</a> widgets, such as Radio Button, Scrollbar, Calendar, File open/save, Messagebox etc.  For a full details <a href="programming.php#Widgets">see this list</a>.</li>
<li><a href="http://rexxtk.sourceforge.net/">Rexx Extensions - RexxTk</a>. An extension library providing access to the Tk Graphic User Interface Toolkit,  such as button, oval, polygon, rectangle, font, menu, listbox, OpenFile. For a full details <a href="http://rexxtk.sourceforge.net/functions.html">see this list</a>.</li>
</ul>

<a href="#Widgets"></a>
<h3>Dynamic Windows</h3>
<h4>Widgets supported</h4>
<ul>
<li>Entryfield /Editbox</li>
<li>Multiline Entryfield/Editbox</li>
<li>Combobox</li>
<li>Button</li>
<li>Radio Button</li>
<li>Spin Button</li>
<li>Checkbox</li>
<li>Container/Listview</li>
<li>Treeview</li>
<li>Splitbar/Paned</li>
<li>Bitmap/Pixmap/Image</li>
<li>Menu (Popup/Pulldown)</li>
<li>Notebook/Tabbed</li>
<li>Slider</li>
<li>Percent/Progress</li>
<li>Listbox</li>
<li>Render/Drawing Area</li>
<li>Scrollbar</li>
<li>Text/Status Bar</li>
<li>Scrollbox</li>
<li>Calendar</li>
<li>HTML (except OS/2)</li>
</ul>
<h4>Dialogs supported</h4>
<ul>
<li>File open/save</li>
<li>Directory chooser</li>
<li>Color chooser</li>
<li>Font chooser</li>
<li>Print<br /></li>
<li>Messagebox</li>
<li>Custom dialogs<br /></li>
</ul>
<br><br>

<?php include ("Last-modified.txt");  ?>


<?php include ("foot.html"); ?>
<!-- END -->