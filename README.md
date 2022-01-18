**PS4RaspberryPi**
Following is the Write up on how to use the Raspberry Pi (Zero W, Zero 2 W, 4 B) to host a Web server, DNS Server, Key stroke Simulation, USB image and emulator
Things required
1.	Raspberry Pi Zero W or Pi Zero 2 W or Pi 4 B
2.	SD Card minimum of 500 MB

**How to Setup**
1.	Restore the image into a SD card (using software like balenaetcher)
2.	Place SD card into the slot of the Raspberry Pi
3.	For Pi Zero W and Pi Zero 2 W (connect from the USB marked Pi USB port to PS4, second cable not needed) 
 
4.	For Pi 4 B (connect one USB C cable from pi to PS4)
5.	Power up the PS4
6.	One Time Setup
    i.PS4 Network Connection -> Wifi -> Manual setup
    ii.	In PS4 find the Wifi Network called PiZero and connect to it using password as password
    iii. For DNS set the primary DNS as 7.7.7.1
    iv.	Rest all automatic values
7.	PS4 -> Browser -> visit http://7.7.7.1 or PS4 -> Settings -> Help
8.	Click on load jail break and wait
    i. It will notify WEBKit is successful -> click on ok and wait
    ii.	A popup will be thrown saying USB emulation started and wait for ps4 pop up
    iii. Once the USB message disappear then click ok
    iv.	Gold Hen will load automatically
    
**How to make the Pi as client in local network**
1.	Main page -> Raspberry Pi (button)
2.	Select the desired Wifi Network ID and fill in the password for the network
3.	Click Connect to WiFi button , wait for 5 sec
4.	Click Reboot Pi button
5.	Find the Pi's IP address in your local network (by visiting Router Page , host name would be pizero, for ex 192.168.0.124) and make it static , so that same IP assign always
6.	PS4 Network Connection -> Wifi -> Manual setup
7.	Select you local network
8.	For DNS set the primary DNS as static IP which you used in Router
9.	Rest all automatic values
10.	PS4 -> Browser -> visit http://(static IP) or PS4 -> Settings -> Help
11.	Jailbreak

**Auto JailBreak – Key stroke simulation**
1.	Main page -> Raspberry Pi (button) -> AutoJB enabled
2.	Once this is done you should have the auto login option enabled to make it work (setting -> Login Setting -> Log into PS4 Automatically (checked))
3.	Reboot once the PS4 is Reboots , it will automatically, selects all menu options till JB page, it will also click ok on webkit popup, 
4.	The auto sequence will stop at this point, user have to click the USB disappear button manually to completely the JB sequence
5.	Note: have already automated the entire sequence. since the JB success rate was dropping in the full sequence , we are stopping the auto sequence at webkit popup
6.	This can be disabled in Raspberry Pi page so in, further boot it doesn’t attempt the auto Sequence

**Free Storage to USB**
1.	When we write the img file to SD card the remaining space was being wasted 
2.	So during the first Boot the Raspberry pi will convert the remaining space as device
3.	This device can be mounted in two ways
a.	Main page -> Raspberry page, Load USB button
b.	SD Card -> PC
4.	Practical usage are , this will behave an external storage when loaded to PS4
a.	You can plug SD card into PC and add Files
b.	Mount it PS4 install it
c.	PS4 data can be save into it
d.	Make it as an extended storage
Gold Hen
1.	The Goldhen payload come from a file call payload.js, this payload JS file can be updated via
2.	Place a new GoldHen bin under “Sdcard:/usr/html/Bin/Goldhen/”
3.	PS4 -> Guide / Help Menu -> GoldHen Update (button)
4.	After thsi update the new gold hen will be used (even after restarting)
5.	Note: Once updated the bin file will be deleted and you only have to do this if a new bin come one

**How does the bin loading work**
1.	Perform a Jailbreak
2.	We are using the Gold Hen bin listener option,so first enable the option under , PS4 -> settings -> goldhen -> Binloader
3.	Then come to PS4 -> settings -> guide -> choose payload button
4.	Note: The raw bin file is being transmitted using python code

**Other Bin Files **
The website will be formed dynamically based on the bin file placed on the “/Bin”. So if you want a new bin of your choice, add it using FTP update and then visit PS4 -> Help Guide Menu -> and look for the new button

**How Can I update the bin file?**

Method 1
1.	ftp://7.7.7.1 (or static IP on your local network). 
2.	Port: 2121
3.	username: user 
4.	password: fusand

Method 2
1.	Insert the SD card in a PC .
2.	There should be device which has folder like GoldHen…
3.	Add the Bins there

**Pros:**
1.	One Device for web server, Key strokes, DNS server and USB emulation
2.	The SD Card is being utilized fully
3.	Keys stroke sequence allows the possibility of PS4 Automation
4.	You can switch between offline and online mode , without a PC
5.	One micro USB cable is enough to boot the device
6.	You can leave the device in the PS4 itself, need not to remove and plug in again
7.	Smallest size OS and booting before PS4

**Changes on 10**
1.	Auto Jailbreak - Ps4 Key Stroke till JB page
2.	Utilization of the remaining space of SD card as USB
3.	Pi 4 B – Ethernet to local network
4.	Issue on the Idle Time, Update Trainer 
5.	Removed cache on all pages , as it was breaking the live options

**Discord Server** https://discord.gg/58N4Y4KZbB
**Video Link** https://www.youtube.com/watch?v=2NCoceX7zKU

**Developers**
1.	PaulJenkin – Embed OS, Web Host, Key Stroke Simulation, USB utilization
2.	Dazen (d3structor84) – Apps Dev, Key stroke unmounts, Secure Root

**Credits to**
1.	Sleirsgoevy – Webkit, Offline Activator
2.	Chendochap – KeExploit
3.	TylerMods, Kameleon –Offline Trainer

