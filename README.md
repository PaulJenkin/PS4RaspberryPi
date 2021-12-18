# PS4Pizero
Following is the Write up on how to use the Raspbery Pi Zero W to host a web server and a USB emulator

Things required
1. Raspbery Pi Zero W 
2. Sd Card

How to Do
1. Restore the image into a SD card
2. and place it into SD card slot of the Raspbery Pi Zero W 
3. Power up the PS4
4. Connect the two micro usb cable from the pi to PS4
5. One Time Setup
    1. PS4 Network Connection -> Wifi -> Manual setup
    2. In PS4 find the Wifi Network called PiZero and connect to it using password as password
    3. Set the IP address as 10.0.0.2
    4. Subnet mask as 255.255.255.0
    5. default gateway as 10.0.0.1
6. PS4 -> Browser -> visit https://10.0.0.1
7. Click on load jail break and wait
    1. the jailbreak and insert usb will happen automatically
    2. If it ask for USB then wait the pi itself will emulate the USB
    3. Once u see the message close the pop up


Pro:
1. One Device for both web server and USB emulation

Cons:
1. This version was done as proof of concept, So it take 3 minutes to host the Pizero server

Video Link
https://www.youtube.com/watch?v=2NCoceX7zKU
