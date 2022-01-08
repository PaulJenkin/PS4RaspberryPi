#!/bin/sh

case "$1" in
    start|"")
		TIMEOUT=20
		counter=0
		connection=0

		until [ $counter -eq $TIMEOUT ]
		do
			if echo $(iwconfig 2>/dev/null) | grep -q "ESSID:off"; then
				sleep 1
				counter=$((counter+1))
				connection=0
			else
				connection=1
				break
			fi
		done

		if [ $connection -eq 0 ]; then
			echo none > /sys/class/leds/led0/trigger

			echo 1 > /sys/class/leds/led0/brightness
			sleep 0.5
			echo 0 > /sys/class/leds/led0/brightness
			sleep 0.5
			echo 1 > /sys/class/leds/led0/brightness
			sleep 0.5
			echo 0 > /sys/class/leds/led0/brightness
			sleep 0.5
			echo 1 > /sys/class/leds/led0/brightness
			sleep 0.5
			echo 0 > /sys/class/leds/led0/brightness
			sleep 0.5
			rm -f /etc/wpa_supplicant.conf
			/bin/sh /usr/html/Resources/Router/zrun.sh
			reboot
		fi
	;;
    stop) ;;
    *)
	exit 1
	;;
esac
