# PS4PaspberryPi
Following is the Write up on how to use the Raspbery Pi (Zero W, Zero 2 W, 4 B) to host a Web server, DNS Server and a USB emulator

**Things required**
1. Raspbery **Pi Zero W** or **Pi Zero 2 W** or **Pi 4 B**
2. Sd Card minimum of 400 MB

**How to Setup**
1. Restore the image into a SD card (using software like balenaetcher)
2. Place SD card into the slot of the Raspbery Pi
3. For Pi Zero W and Pi Zero 2 W (connect from the USB marked Pi USB port to PS4, second cable not needed) ![image](https://user-images.githubusercontent.com/2664857/149229582-18780783-6d47-4d12-89ab-1898da33e1c7.png)
4. For Pi 4 B (connect one USB C cable from pi to PS4)
5. Power up the PS4
6. One Time Setup
    1. PS4 Network Connection -> Wifi -> Manual setup
    2. In PS4 find the Wifi Network called PiZero and connect to it using password as password
    3. For DNS set the primary DNS as 7.7.7.1
    4. Rest all automatic values
7. PS4 -> Browser -> visit http://7.7.7.1 **or** PS4 -> Settings -> Help
8. Click on load jail break and wait
    1. It will notify WEBKit is sucessfull -> click on ok and wait
    2. A popup will thrown Say USB emulation staterted and wait for ps4 pop up
    3. Once the usb message dissaper then click ok
    4. Hen will load autmatically

**How to make the Pi as client in local network**
1. Main page -> Rasbberry Pi (button)
2. Select the desired Wifi Network ID and fill in the password for the network
3. Click **Connect to WiFi** button , wait for 5 sec
4. Click **Reboot Pi** button
5. Find the Pi's IP address in your local network (by visisting Router Page , host name would be pizero, for ex 192.168.0.124) and make it static , so that same IP assign always
6. PS4 Network Connection -> Wifi -> Manual setup
7. Select you local network 
8. For DNS set the primary DNS as static IP which you used in Router
9. Rest all automatic values
10. PS4 -> Browser -> visit http://(static IP) **or** PS4 -> Settings -> Help
11. Jailbreak

**Gold Hen**
1. The Goldhen payload come from a file call payload.js, this payload JS file can be updated via
2. Place a new GoldHen bin under “Sdcard:/usr/html/Bin/Goldhen/”
3. PS4 ->  Guide / Help Menu -> GoldHen Update (button)
4. After thsi update the new gold hen will be used (even after restarting)
5. Note: Once updated the bin file will be deleted and you only have to do this if a new bin come one

**How does the bin loading work**
1. Jailbreak
2. We are you the Gold Hen bin listner, first enable the option under , PS4 -> settings -> goldhen -> Binloader
3. Then come to PS4 -> settings -> guide -> choose payload button
4. Note: The raw bin file is being traansmitted using python code
           
**Other Bin Files**
The website will form dynamicall based on the bin file placed on the “/usr/html/Bin/”.
So if you want a new bin of your choice, Add it using sftp/sdcard update and then visit 
PS4 ->  Guide Menu -> and looks for the new button

**How Can i update the bin file**
With Ver 8 the html folder is opened for update, So we have below choice on updating
1. sftp://7.7.7.1 (or static IP on ur local network). **username: root** and **password: password**
4. If you run a a linux machine() - Using a SD card reader coennec the SD card to PC and chnage it
  
 
**Pros**:
1. One Device for both web server, dns server and USB emulation
2. you can switch between offline and online mode , without a PC
3. One micro usb cable is enough to boot the device
4. You can leave the device in the PS4 itself, need not to remove and plug in again
5. Smallest size OS and booting before PS4


**Changes on V8**
1. Dynamic web page based on the Bin folder
2. Option to load bin via goldhen bin loader
3. Option to update GoldHen
4. Automatic node discovery added – useful when Pi is connected to local network, we can access the pi using hostname http://pizero.local instead of IP address
5. Full support for ssh and sftp, which required to update the payloads
6. From RaspberryPi page we can change the default root password
7. The network page sorts the wifi list based on signal quality (the more nearer to will appear on top of the list)
8. Fixed the issue which took longer load time on Pi4 B due to network discovery
9. Fixed the issue which making to enter the password thrice (rng tool was missing in pizw)
10. Boot up time of all device in various mode is less than PS4, so no delay at all
11. Shutdown option in RaspberryPi page fixed

**Image - v8** (At most capability, power to user)
1. Pi Zero W - https://github.com/PaulJenkin/PS4RaspberryPi/releases/download/untagged-5611f3d1924ac4e7314d/PiZW-v8-Rebuilt5.zip
2. Pi Zero 2 W - https://github.com/PaulJenkin/PS4RaspberryPi/releases/download/untagged-5611f3d1924ac4e7314d/PiZ2W-v8-Rebuilt5.zip
3. Pi 4 B - https://github.com/PaulJenkin/PS4RaspberryPi/releases/download/untagged-5611f3d1924ac4e7314d/Pi4B-v8-Rebuilt5.zip

**Discord Server**
https://discord.gg/58N4Y4KZbB

**Video Link**
https://www.youtube.com/watch?v=2NCoceX7zKU



**creedits to**
1. Sleirsgoevy
2. Chendochap
