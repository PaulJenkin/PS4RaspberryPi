#!bin/sh
# making it as a node


#chmod a-x /etc/init.d/S80dnsmasq
chmod a-x /etc/customscript/S90hostapd
rm /etc/network/interfaces
cp -f /usr/html/Resources/Node/interfaces /etc/network/interfaces
rm /etc/wpa_supplicant.conf
cp -f /usr/html/wpa_supplicant.conf /etc/wpa_supplicant.conf
