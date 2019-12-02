#!/bin/bash
echo "Automatic Speedtests by @damianhog.com."
echo "Getting PNG-File from Link"
LINK=https$(speedtest --share --simple | sed -nr 's/Share results: http\s*//p')
echo $LINK
date=$(date +%F)
hour=$(date +%H)
if [ -d "/var/www/html/speedtest/"$date ]; then
	echo "Directory already exists."
else
	echo "Creating Directory."
	mkdir /var/www/html/speedtest/$date  && cp /var/www/html/src/index.php /var/www/html/speedtest/$date/
fi
echo "Switching Directory."
cd /var/www/html/img/speedtest/$date
wget -q $LINK -O $hour.png
echo "Speedtest finished"
sleep 3300