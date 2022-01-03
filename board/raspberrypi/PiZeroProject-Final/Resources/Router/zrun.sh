#!bin/sh

# making it as a WifiRouter

cp -f /usr/html/Resources/Router/interfaces /etc/network/interfaces
chmod a+x /etc/customscript/S90hostapd

