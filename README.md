# PS4Pizero
Following is the Write up on how to use the Raspbery Pi Zero W to host a web server and a USB emulator

**Things required**
1. Raspbery Pi Zero W 
2. Sd Card minimum of 16 GB

**How to Do**
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
    1. The jailbreak and insert usb will happen automatically
    2. If it ask for USB then wait, the pi itself will emulate the USB
    3. Once u see the message close the pop up

**Pros**:
1. One Device for both web server and USB emulation
2. You can leave the device in the PS4 itself, need not to remove and plug in again

**Cons**:
1. V2 of the image is more slim version , right now the boot up time is at 1 minute 30 second

**Changes on Upcoming versions**
1. Will use the exploit ChendoChap/pOOBs4 and push the bin using socket connection

**Implementation Notes**:
1. Raspbian lite os has been modified 
2. Added a Web server which hosts the file
3. Made use of the Piz Zero as mass storage simulation functionality to inject the USB at th right time

**Video Link**
https://www.youtube.com/watch?v=2NCoceX7zKU

**Image V2 Link**
https://1fichier.com/?a18u3gu203qbr9qp56af
