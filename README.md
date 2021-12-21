# PS4Pizero
Following is the Write up on how to use the Raspbery Pi Zero W to host a web server and a USB emulator

**Things required**
1. Raspbery Pi Zero W 
2. Sd Card minimum of 200 MB

**How to Setup PS4Pizero V4 Image**
1. Restore the image into a SD card (using software like balenaetcher)
2. Place SD card into the slot of the Raspbery Pi Zero W 
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


**Changes on V4**
1. Using buildroot to create Embedded OS
2. Use Two micro usb cable for no wait time loads instantaneously, work with one cable on data port as well 


**Implementation Notes**:
1. Buildroot custom os is being used
2. Added a Web server which hosts the file
3. Made use of the Piz Zero as mass storage simulation functionality to inject the USB at th right time

**Image V4 Link**
https://1fichier.com/?rb9uj9b5ujg0kee0slg3

**Video Link**
https://www.youtube.com/watch?v=2NCoceX7zKU

**old Releases**
**Image V2 Link** - https://1fichier.com/?a18u3gu203qbr9qp56af
**Image V3 Link** - https://1fichier.com/?2oi5d6j8fpsp2u3qu8vl


**creedits to**
1. sleirsgoevy
2. Chendochap
