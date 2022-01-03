# PS4PaspberryPi
Following is the Write up on how to use the Raspbery Pi (Zero W, Zero 2 W, 4 B) to host a web server and a USB emulator

**Things required**
1. Raspbery **Pi Zero W** or **Pi Zero 2 W** or **Pi 4 B**
2. Sd Card minimum of 200 MB

**How to Setup**
1. Restore the image into a SD card (using software like balenaetcher)
2. Place SD card into the slot of the Raspbery Pi
3. For Pi Zero W and Pi Zero 2 W (connect one micro USB cable from pi to PS4, second cable not needed)
4. For Pi 4 B (connect one USB C cable from pi to PS4)
5. Power up the PS4
6. One Time Setup
    1. PS4 Network Connection -> Wifi -> Manual setup
    2. In PS4 find the Wifi Network called PiZero and connect to it using password as password
       1. if it Fials come back select PiZero then try typing password again
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

  
**Pros**:
1. One Device for both web server and USB emulation
2. One micro usb cable is enough to boot the device (if you are ok to wait 10 seconds after PS4 startup screen)
3. You can leave the device in the PS4 itself, need not to remove and plug in again
4. Smallest size OS


**Changes on V7**
1. Fixed the Issue with SPance on WIFI SSID, and & symbols
2. Added DNS Server which redirect all PS4 related web traficc to PI
3. Redirecting the Help page to Jailbreak


**Implementation Notes**:
1. Buildroot custom os is being used
2. Added a Web server which hosts the file
3. Made use of the Piz Zero as mass storage simulation functionality to inject the USB at th right time

**Image - v7** (Extended Local Network Support and DNS Server)
1. Pi Zero W - https://1fichier.com/?rwdjj9vu7r10qn5947x1
2. Pi Zero 2 W - https://1fichier.com/?r35fe3xrixvx2e1uu66y
3. Pi 4 B - https://1fichier.com/?0jt584zqobgpclxvtpy3

**Image V6 -rebuild Links**
1. Pi Zero W  - https://1fichier.com/?62q7z9cgcgl5q8fwf7jw
2. Pi Zero 2 W - https://1fichier.com/?k6u01vt2xiszwx9d81m0
3. Pi 4 B - https://1fichier.com/?51k6g0lfzm6mo0mxbhqg

**Video Link**
https://www.youtube.com/watch?v=2NCoceX7zKU



**creedits to**
1. Sleirsgoevy
2. Chendochap
