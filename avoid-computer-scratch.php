<?php include ("head.html"); ?>

<h1>How to avoid setting up a computer from scratch</h1>
The professionals avoid setting up a computer from scratch on a regular basis.<br>
<h2>Amateur</h2>
Is there an easy way for the amateur to avoid setting up a computer from scratch. None obvious. At best it is a hassle, aggravating and annoying.<br>
Having set up a computer from scratch may be 10 times over the years,  starting with Windows 95/NT machines (anything earlier than that, is so  different as to be not relevant) some general principles to minimise  hassle. It starts with the old machine and what you should do with that.<br>
<ol>
  <li>Keep all your stuff in one place. What used to be called "My  Documents" or some such name. Back it up to an external hard drive, not  only data, pictures, music etc, but installers for programs such as  IrfanView, OpenOffice etc.</li>
  <li>When you install stuff, let it go into the default place "Program Files". If it won't, make a note of where it went.</li>
  <li>Make a list of all your "Program Files". Use a utility called "ls" http://www.freewareshare.com/detail.php?id=1760</li>
  <li>Make a list of all your programs. This is the list, you used to find it from Windows, Start then Programs.</li>
  <li>Note any significant settings or changes you make. For example macros  for one of file renaming tools used to semi-automate the loading of the  radio 4 recordings onto mp3 player. These are stored in a place that is  not obvious. So Include them in backup and have a tool to copy them  back if they get messed up.</li>
  <li>Send yourself an email with a copy of 3, 4, 5 (and maybe 2) above in  it. File it a purpose created email folder called something like  "computer set up".</li>
  <li>Update and resend email every time you make a change.... are you that disciplined?</li>
  <li>You now have a list of what you need to set up a computer.</li>
</ol>
<h2>Professional</h2>
<h3>Method 1 - Image copy.</h3>
Use a tool such as <a href="http://en.wikipedia.org/wiki/Ghost_%28software%29">Ghost</a>. It takes a complete copy of the disk (C drive).<br>
Computer A needs to be backed up and restored at a later date. Computer B  is running a copy of Ghost. It is connected to Computer A and takes an  Image copy of Computer A disk onto Computer B. At the time you want to  restore the copy, you connect Computer B to Computer A and write it back  again. If you have an office with 50 notionally identical Computer As  then you can restore them all simultaneously. This works well. <h3>Method 2 - Front Door, Back Door</h3>
The problem with Method 1 is that it assumes you will be recovering onto  an identical computer to the one you started with. Computers are hardly  ever that. Buy a computer six months later and they have improved it  and you can no longer buy the old (6 months ago) one. If you try and  start the computer with an image copy from a different computer, it  likely will not work - registry settings, software device drivers etc.  You need a way of fixing the problems that are stopping it working. You  may know that you can boot a computer from the C drive, floppy drive,  USB drive etc. It is part of the start up options you can use if needed.  So set up Computer A with 2 physical drives C and D. Restore the image  copy onto the C drive. Set up a fresh copy of the operating system onto D  drive. This is a factory clean copy of the operating system taken  straight from the installation CD/DVD. Change the start up options so  that Computer A boots from the D drive. Start the computer and change  any settings on C drive that are stopping it working properly (registry  settings, software device drivers etc). You need to know what you are  doing for this and have practiced it in a friendly stress free  environment.
<h3>Method 3 - Persevere</h3>
Even Method 2 doesn't work straight away. Typically new customers would  test every 6 months for the 1st 18 months. In test 1 new customers would  be lucky if they got computers working at a basic level. They would  likely find out that they had made lots of setting changes that they had  not recorded, so could not progress any further. In test 2 (6 months  later) they would return with all their settings noted, and probably get  the computers working. However they would likely take so long they  would not be able to test networking. So another 6 months later (test 3)  all is properly documented, restored and working.<br>
<br>
So go with the amateur method and document everything or be prepared for hassle
<br><br>

<?php include ("Last-modified.txt");  ?>


<?php include ("foot.html"); ?>
<!-- END -->