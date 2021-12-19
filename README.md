# PS4Pizero
Following is the Write up on how to use the Raspbery Pi Zero W to host a web server and a USB emulator

**Things required**
1. Raspbery Pi Zero W 
2. Sd Card minimum of 16 GB

**How to Setup V3 Image**
1. Restore the image into a SD card (using software like balenaetcher)
2. Place SD card into the slot of the Raspbery Pi Zero W 
3. Connect the two micro usb cable from the pi to PS4
4. Power up the PS4
5. One Time Setup
    1. PS4 Network Connection -> Wifi -> Manual setup
    2. In PS4 find the Wifi Network called PIZero and connect to it using password as password
    3. Rest all value set to Automatic
6. PS4 -> Browser -> visit https://7.7.7.1
7. Click on load jail break and wait
    1. It will notify WEBKit is sucessfull -> click on ok and wait
    2. A popup will thrown Say USB emulation staterted and wait for ps4 pop up
    3. Once the usb message dissaper then click ok
    4. Hen will load autmatically

**Known Issue**
1. After Reboot we have to wait for a 45 sec to 1 minute in order for the pi zero to boot up
2. if you visited the 7.7.7.1 in early stages it may say bad gate way 502. it means that pi is loading in 20 seconds it will be ready
    1. Refresh the page until you see the Exploit page
    
**Pros**:
1. One Device for both web server and USB emulation
2. You can leave the device in the PS4 itself, need not to remove and plug in again


**Changes on V3**
1. All unecessary service has been removed in order to boot faster
2. Using Nigix as server instead of Apache


**Implementation Notes**:
1. Raspbian lite os has been modified 
2. Added a Web server which hosts the file
3. Made use of the Piz Zero as mass storage simulation functionality to inject the USB at th right time

**Video Link**
https://www.youtube.com/watch?v=2NCoceX7zKU

**Image V2 Link**
https://1fichier.com/?a18u3gu203qbr9qp56af

**Image V3 Link**
https://1fichier.com/?2oi5d6j8fpsp2u3qu8vl
