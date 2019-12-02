#!/bin/bash
echo "Starting Script."
# infinite loop
for (( ; ; ))
do
stunde=$(date +%X)
echo $stunde
if [ "$stunde" = "00:00:00" ]; then
	echo "It is  00:00 o'clock"
	echo "Starting Speedtest."
	sh ./script.sh
elif [ "$stunde" = "01:00:00" ]; then
	echo "It is  01:00 o'clock"
 	echo "Starting Speedtest."
	sh ./script.sh
elif [ "$stunde" = "02:00:00" ]; then
        echo "It is  02:00 o'clock"
        echo "Starting Speedtest."
        sh ./script.sh
elif [ "$stunde" = "03:00:00" ]; then
        echo "It is  03:00 o'clock"
        echo "Starting Speedtest."
        sh ./script.sh
elif [ "$stunde" = "04:00:00" ]; then
        echo "It is  04:00 o'clock"
        echo "Starting Speedtest."
        sh ./script.sh
elif [ "$stunde" = "05:00:00" ]; then
        echo "It is  05:00 o'clock"
        echo "Starting Speedtest."
        sh ./script.sh
elif [ "$stunde" = "06:00:00" ]; then
        echo "It is  06:00 o'clock"
        echo "Starting Speedtest."
        sh ./script.sh
elif [ "$stunde" = "07:00:00" ]; then
        echo "It is  07:00 o'clock"
        echo "Starting Speedtest."
        sh ./script.sh
elif [ "$stunde" = "08:00:00" ]; then
        echo "It is  08:00 o'clock"
        echo "Starting Speedtest."
        sh ./script.sh
elif [ "$stunde" = "09:00:00" ]; then
        echo "It is  09:00 o'clock"
        echo "Starting Speedtest."
        sh ./script.sh
elif [ "$stunde" = "10:00:00" ]; then
        echo "It is  10:00 o'clock"
        echo "Starting Speedtest."
        sh ./script.sh
elif [ "$stunde" = "11:00:00" ]; then
        echo "It is  11:00 o'clock"
        echo "Starting Speedtest."
        sh ./script.sh
elif [ "$stunde" = "12:00:00" ]; then
        echo "It is  12:00 o'clock"
        echo "Starting Speedtest."
        sh ./script.sh
elif [ "$stunde" = "13:00:00" ]; then
        echo "It is  13:00 o'clock"
        echo "Starting Speedtest."
        sh ./script.sh
elif [ "$stunde" = "14:00:00" ]; then
        echo "It is  14:00 o'clock"
        echo "Starting Speedtest."
        sh ./script.sh
elif [ "$stunde" = "15:16:00" ]; then
        echo "It is  15:00 o'clock"
        echo "Starting Speedtest."
        sh ./script.sh
elif [ "$stunde" = "16:00:00" ]; then
        echo "It is  16:00 o'clock"
        echo "Starting Speedtest."
        sh ./script.sh
elif [ "$stunde" = "17:00:00" ]; then
        echo "It is  17:00 o'clock"
        echo "Starting Speedtest."
        sh ./script.sh
elif [ "$stunde" = "18:00:00" ]; then
        echo "It is  18:00 o'clock"
        echo "Starting Speedtest."
        sh ./script.sh
elif [ "$stunde" = "19:00:00" ]; then
        echo "It is  19:00 o'clock"
        echo "Starting Speedtest."
        sh ./script.sh
elif [ "$stunde" = "20:00:00" ]; then
        echo "It is  20:00 o'clock"
        echo "Starting Speedtest."
        sh ./script.sh
elif [ "$stunde" = "21:00:00" ]; then
        echo "It is  21:00 o'clock"
        echo "Starting Speedtest."
        sh ./script.sh
elif [ "$stunde" = "22:00:00" ]; then
        echo "It is  21:00 o'clock"
        echo "Starting Speedtest."
        sh ./script.sh
elif [ "$stunde" = "23:00:00" ]; then
        echo "It is  23:00 o'clock"
        echo "Starting Speedtest."
        sh ./script.sh
elif [ "$stunde" = "24:00:00" ]; then
        echo "It is  24:00 o'clock"
        echo "Starting Speedtest."
        sh ./script.sh
fi
sleep 1
done