#!/bin/sh
TIMEOUT=30
counter=0
connection=0

echo $(date) >> /root/offline

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

if [ $connection -eq 0  ]; then
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

  /bin/sh /usr/html/Resources/Router/zrun.sh
  reboot
fi
