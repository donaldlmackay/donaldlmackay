<?php include ("head.html"); ?>

<h1>Thompson tg585 Router - Always use the same IP address</h1>
<ol>
<pre>
<h3>To set up Router to use the same address</h3>
In the router's (left nav) menu there is an option as follows:-
.
Home network
 - devices

   - device1 IP address ...64
   - device2 IP address ...65
   - device3 IP address ...66
   - device4 IP address ...67
   - device5 IP address ...68

On the top right there is a sort of menu (actually more of set of links that appear and disppear)
"Overview | Configure | Help"

Click on the "Configure" link

the devices lines now change to include options to edit and delete
  
   - device1 IP address ...64 edit delete
   - device2 IP address ...65 edit delete
   - device3 IP address ...66 edit delete
   - device4 IP address ...67 edit delete
   - device5 IP address ...68 edit delete
 - .
When I clicked on one of the edit links, there is a tick box "Always use the same address:"
 
I duly did this for all the devices.
 
I backed up the configuration and compared it with a previous backup.
I noted the extra lines now added in to the configuration:-

    lease add clientid=... pool=LAN_private addr=...64 expirytime=0 macaddr=...
    lease add clientid=... pool=LAN_private addr=...65 expirytime=0 macaddr=...
    lease add clientid=... pool=LAN_private addr=...66 expirytime=0 macaddr=...
    lease add clientid=... pool=LAN_private addr=...67 expirytime=0 macaddr=...
    lease add clientid=... pool=LAN_private addr=...68 expirytime=0 macaddr=...

I then turned the router off and on.

The IP addresses are the same and still have "Always use the same address:" ticked.

</pre>



<h3>Router state</h3>
<pre>
Wi-Fi MAC Address samsung       00-73-e0-c4-47-d9
Wi-Fi MAC Address LG            88 07 4B C4 F4 68
WLAN MAC  Address lenovo        E0 2C B2 16 B2 66

IP Address     Name                        Interface   Description   
                                                       
192.168.1.64   Dell-PC                     WLAN        Dell PC
192.168.1.65   Donald-PC                   WLAN        PB PC
192.168.1.66   Acer                        WLAN        Acer PC
192.168.1.67   android-4173123fa5215931    WLAN        Lenovo Tablet
192.168.1.68   Unknown-00-73-e0-c4-47-d9   WLAN        
192.168.1.69   Unknown-08-eb-74-7c-b3-1b   ethport1    RJ45 Socket
192.168.1.70   android-6dd70472e3e9cef0    WLAN        LG Phone
192.168.1.71   LAPTOP-MGVRAO8V             WLAN        Lenovo PC
192.168.1.254                              dsldevice   Router

</pre>

<br><br>

<?php include ("Last-modified.txt");  ?>


<?php include ("foot.html"); ?>
<!-- END -->