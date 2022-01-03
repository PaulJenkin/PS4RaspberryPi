#!/bin/sh

case "$1" in
        start)
                printf "Starting hostapd: "
                start-stop-daemon -S -x /usr/sbin/hostapd -- -B /etc/hostapd.conf
                [ $? = 0 ] && echo "OK" || echo "FAIL"
                ;;
        stop)
                printf "Stopping hostapd: "
                start-stop-daemon -K -q -x /usr/sbin/hostapd
                [ $? = 0 ] && echo "OK" || echo "FAIL"
                ;;
        restart|reload)
                $0 stop
                $0 start
                ;;
        *)
                echo "Usage: $0 {start|stop|restart}"
                exit 1
esac

exit 0
