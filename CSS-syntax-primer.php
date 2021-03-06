<?php include ("head.html"); ?>

<h1>CSS syntax primer</h1>
<pre>
<b><u>CSS legal name</u></b> must begin with ... a letter(a-z), followed by any number of dashes, underscores, letters, or numbers.
Note while CSS is not case sensitive, try to use only lower case.

<u><b>CSS class</b></u> groups similar elements; e.g. all tables used for laying out pictures could have &lt;table class"=PicClass"...

<u><b>CSS id</b></u>    selects specific item  e.g. a tables used for laying out a video could have &lt;table class"=picclass" id="YouTubeVideo"...

<u><b>CSS div</b></u>   groups together chunks of web page
 e.g. &lt;div id="navigation"&gt; groups together all left side of page
 e.g. &lt;div id="content"&gt;    groups together all rest      of page

<b><u>CSS element {declaration;}</u></b>
 e.g. h2 {font-size:   1.5em;}

<b><u>CSS element {declaration1; ... declarationn;}</u></b>
 e.g. h2
       {
        color: green;
        font-size:   1.5em;
        font-weight: bold;
        font-family: sans-serif;
       }

<b><u>CSS element1, ... elementn {declaration;}</u></b>
 e.g. h2, h3, h4
       {color: green;}

<b><u>CSS element1 ... elementn {declaration;}</u></b>
 e.g.�site-map
     {
      background-position:          0px -322px;
      height:                       100%;
     }
 e.g.�site-map h4
     {
      font-size:                    1em;
      font-weight:                  bold;
      }
 e.g.�site-map li
     {
      list-style-type:              none;
      padding:                      0;
      }
 e.g.�site-map li ul
     {
      font-size:                    0.75em;
      font-family:                  sans-serif;
      margin:                       0;
      padding:                      0;
     }

<b><u>CSS element.class</u></b>
 e.g. p.intro {margin-left: 2em; }
      where "p"     is the element and
            "intro" is the class
      so this refers to the paragraphs with the class "intro"

<b><u>CSS element�id</u></b>
 e.g. p�firstname
      where "p"         is the element and
            "firstname" is the id
      so this refers to the paragraphs with the id "firstname"

<b><u>Selector            Example          Selects</u></b>
.class              .intro           all elements with class="intro"
�id                 �firstname       the element with id="firstname"
*                   *                all elements
element             p                all &lt;p&gt;   elements
element,element     div,p            all &lt;div&gt; elements and all &lt;p&gt; elements
element element     div p            all &lt;p&gt;   elements inside &lt;div&gt; elements
element&gt;element     div&gt;p            all &lt;p&gt;   elements where the parent is a &lt;div&gt; element
element+element     div+p            all &lt;p&gt;   elements that are placed immediately after &lt;div&gt; elements
[attribute]         [target]         all elements with a target attribute
[attribute=value]   [target=_blank]  all elements with target="_blank"
[attribute~=value]  [title~=flower]  all elements with a title attribute containing the word "flower"
[attribute|=value]  [lang|=en]       all elements with a lang attribute value starting with "en"
:link               a:link           all unvisited links
:visited            a:visited        all visited links
:active             a:active         the active link
:hover              a:hover          links on mouse over
:focus              input:focus      the input element which has focus
</pre>

<br><br>

<?php include ("Last-modified.txt");  ?>


<?php include ("foot.html"); ?>
<!-- END -->