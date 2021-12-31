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
    3. Rest all value set to Automatic
7. PS4 -> Browser -> visit http://7.7.7.1
8. Click on load jail break and wait
    1. It will notify WEBKit is sucessfull -> click on ok and wait
    2. A popup will thrown Say USB emulation staterted and wait for ps4 pop up
    3. Once the usb message dissaper then click ok
    4. Hen will load autmatically

**How to make the Pi as client in local network**
1. Main page -> Rasbberry Pi (button)
2. Select the desired Wifi network ID
3. Fill in the password for the network
4. Click connect to WiFi button
5. Restart the PS4 (which aslo restarts the Pi)
6. In PS4 update the Wifi Netwrok to you local
7. Find the Pi's IP address in your local network (by visisting Router Page , host name would be PiPS4Client, for ex 192.168.0.124)
8. PS4 -> Browser -> visit http://192.168.0.124
9. Jailbreak

  
**Pros**:
1. One Device for both web server and USB emulation
2. One micro usb cable is enough to boot the device (if you are ok to wait 10 seconds after PS4 startup screen)
3. You can leave the device in the PS4 itself, need not to remove and plug in again
4. Smallest size OS


**Changes on V6**
1. Added option to connect the pi to local network
2. Added option to Reboot the PI from PS4 itself
3. SSH enabled, username : root, password: password


**Implementation Notes**:
1. Buildroot custom os is being used
2. Added a Web server which hosts the file
3. Made use of the Piz Zero as mass storage simulation functionality to inject the USB at th right time


**Image V6 Links**
1. Pi Zero W  - https://1fichier.com/?73abvegre7hzhpx6xw1v
2. Pi Zero 2 W - https://1fichier.com/?js18ca9khak6cforfsih
3. Pi 4 B - https://1fichier.com/?d9j3vvnk6v5hc9s07z5e

**Image V5 Links**
1. Pi Zero W  - https://1fichier.com/?th25b546df6sop94dd4t
2. Pi Zero 2 W - https://1fichier.com/?pwnm9gzpnmtliebgyy5h
3. Pi 4 B - https://1fichier.com/?25x9xu3qai1434rs7gcb

**Video Link**
https://www.youtube.com/watch?v=2NCoceX7zKU



**creedits to**
1. Sleirsgoevy
2. Chendochap
