<?php include ("head.html"); ?>

<h1>Installing Windows XP (WXP) On Oracle Virtualbox (OVB)</h1>
1. Convert CD to ISO file using ImgBurn <a href="http://www.imgburn.com/">http://www.imgburn.com/</a><br/><br/>
2. Watch these videos <br/>
<a href="http://www.youtube.com/watch?v=1RIyoGZcZe8">http://www.youtube.com/watch?v=1RIyoGZcZe8</a> Install WXP In Virtual Box<br/>
<a href="http://www.ghacks.net/2009/06/14/installing%20and%20configuring%20virtualbox%20for%20virtual%20oses/">  http://www.ghacks.net/2009/06/14/installing and configuring virtualbox for virtual oses/</a><br/>
<a href="http://www.ghacks.net/2009/06/15/installing%20a%20windows%20xp%20as%20a%20virtual%20machine%20on%20virtualbox/">  http://www.ghacks.net/2009/06/15/installing a windows xp as a virtual machine on virtualbox/</a><br/><br/>
3. Install OVB <a href="http://www.virtualbox.org/">http://www.virtualbox.org/</a><br/><br/>
4. Open OVB, then Machine new [Virtual Machine]<br/><br/>
5. Change default of 192 memory to 512MB.<br/><br/>
6. Use ISO file to install WXP [It will be in the drop down list, if you have created a previous Machine with WXP]<br/>
or it may be in somewhere like C:\Users\xxxx\Documents\vbox2\win xp
<h2>Things to remember</h2>
1. Create the virtual machine calling it something like WinXP.<br/><br/>
2. As part of the process of installing Windows XP remember to format (quick format) a partition before proceeding with the rest of the installation.<br/><br/>
3. After installation complete, when prompted to "hit any key to boot from cd...", do not do this as it will redo the installation.<br/><br/>
4. When WXP is running you can pause then stop it, via virtualbox. You then close virtualbox and when you next start virtualbox, you can resume windows xp from exactly where it left off. There is a 30 day clock before registration is mandatory. It seems that by keeping WXP is running, by pausing it through Virtualbox manager, the 30 day clock is not invoked. If you have to restart XP after a shutdown then the 30 day clock is invoked and XP will not work after 30 days.<br/><br/>
5. to make the VM window fill the screen: switch to scale mode by pressing right Ctrl and F simultaneously<br/>
<h2>Other Hot Keys for controlling the VM</h2>
<pre>
      Adjust Window size        Host (Right Ctrl) + A
      Switch to Scale Mode      Host + C
      Install Guest Additions   Host + D
      Take Screenshot           Host + E
      Switch to Fullscreen      Host + F
      Auto-resize Guest display Host + G
      ACPI Shutdown             Host + H
      Disable mouse integration Host + I
      Switch to Seamless Mode   Host + L
      Session information       Host + N
      Take Snapshot             Host + T
      Pause Virtual Machine     Host + P
      Close                     Host + Q
      Reset Virtual Machine     Host + R
      Settings                  Host + S
      Insert Ctrl + Alt + Del   Host + Delete
      Popup Menu                Host + Home
</pre>
<h2>Using WXP On OVB</h2>
1. To get shared files between WXP and windows 7 need to do 2 things:<br/><br/>
a. in OVB [the one that is running WXP] go to devices then drop down menu: install guest additions. Then accept reboot now.<br/><br/>
b. OVB manager: settings: shared folder: set a folder.<br/><br/>
2. Tried to run iPlayer on IE6 but would not work without upgrade of WinXP to SP2<br/><br/>
3. Tried to install firefox and chrome but as above upgrade needed<br/><br/>
4. Upgraded WinXP to SP2 and then run iPlayer and replay radio captured iPlayer with no difficulty.<br/><br/>
5. Project complete<br/>
<h2>Additions to WXP</h2>
1. Windows Installer
<a href="http://www.microsoft.com/downloads/details.aspx?familyid=889482fc-5f56-4a38-b838-de776fd4138c&displaylang=en/">  http://www.microsoft.com/downloads</a>  used to install some software such as text editors.<br/><br/>
<br><br>

<?php include ("Last-modified.txt");  ?>


<?php include ("foot.html"); ?>
<!-- END -->
