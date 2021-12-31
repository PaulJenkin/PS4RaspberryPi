# PS4PaspberryPi
Following is the Write up on how to use the Raspbery Pi (Zero W, Zero 2 W, 4 B) to host a web server and a USB emulator

**Things required**
1. Raspbery **Pi Zero W** or **Pi Zero 2 W** or **Pi 4 B**
2. Sd Card minimum of 200 MB

**How to Setup**
1. Restore the image into a SD card (using software like balenaetcher)
2. Place SD card into the slot of the Raspbery Pi
3. Connect the two micro usb cable from the pi to PS4
4. Power up the PS4
5. One Time Setup
    1. PS4 Network Connection -> Wifi -> Manual setup
    2. In PS4 find the Wifi Network called PiZero and connect to it using password as password
    3. Rest all value set to Automatic
6. PS4 -> Browser -> visit http://7.7.7.1
7. Click on load jail break and wait
    1. It will notify WEBKit is sucessfull -> click on ok and wait
    2. A popup will thrown Say USB emulation staterted and wait for ps4 pop up
    3. Once the usb message dissaper then click ok
    4. Hen will load autmatically

   
**Pros**:
1. One Device for both web server and USB emulation
2. One micro usb cable is enough to boot the device (if you are ok to wait 10 seconds after PS4 startup screen)
3. You can leave the device in the PS4 itself, need not to remove and plug in again
4. Smallest size OS


**Changes on V5**
1. Removed all Apache modules and replaced with Nginx (in order to avoid issues in SSH access)
2. Always use one micro usb cable on data port.
3. The Pi loads along with PS4 it may take a 5 seconds delay to open web page


**Implementation Notes**:
1. Buildroot custom os is being used
2. Added a Web server which hosts the file
3. Made use of the Piz Zero as mass storage simulation functionality to inject the USB at th right time

**Direction of the Next relase**
1. Add BuildRoot configuration and Postbulish scripts for each model in GITHUB
2. Add Samba file server which can assist in updating the JB
3. Revise all the model to load even faster


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
