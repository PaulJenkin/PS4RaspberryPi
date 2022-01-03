#!/bin/sh

set -u
set -e

# Add a console on tty1
if [ -e ${TARGET_DIR}/etc/inittab ]; then
    grep -qE '^tty1::' ${TARGET_DIR}/etc/inittab || \
	sed -i '/GENERIC_SERIAL/a\
tty1::respawn:/sbin/getty -L  tty1 0 vt100 # HDMI console' ${TARGET_DIR}/etc/inittab
fi

#cp package/busybox/S10mdev ${TARGET_DIR}/etc/init.d/S10mdev
#chmod 755 ${TARGET_DIR}/etc/init.d/S10mdev
#cp package/busybox/mdev.conf ${TARGET_DIR}/etc/mdev.conf
rm -f ${TARGET_DIR}/etc/init.d/S80dnsmasq
rm -f ${TARGET_DIR}/etc/init.d/S90hostapd
chmod 755 ${TARGET_DIR}/etc/sudoers
cp board/raspberrypi/Executables/sudoers ${TARGET_DIR}/etc/sudoers
cp board/raspberrypi/Executables/nginx.conf ${TARGET_DIR}/etc/nginx/nginx.conf
cp -r board/raspberrypi/PiZeroProject-Final/. ${TARGET_DIR}/usr/html
cp board/raspberrypi/Executables/hostapd.conf ${TARGET_DIR}/etc/hostapd.conf
cp board/raspberrypi/Executables/interfaces ${TARGET_DIR}/etc/network/interfaces
cp board/raspberrypi/Executables/S02modules ${TARGET_DIR}/etc/init.d/S02modules
cp board/raspberrypi/Executables/IpDNSupd ${TARGET_DIR}/etc/network/if-up.d/IpDNSupd
chmod ugo+rwx ${TARGET_DIR}/usr/html

mkdir -p ${TARGET_DIR}/etc/customscript
cp -r board/raspberrypi/Executables/customscript/. ${TARGET_DIR}/etc/customscript
