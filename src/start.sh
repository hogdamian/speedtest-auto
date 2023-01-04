#!/bin/bash

# check if cron is installed
if ! command -v cron > /dev/null; then
  echo "Error: cron is not installed. Please install cron and try again."
  exit 1
fi

# check if script.sh exists
if ! [ -f "./script.sh" ]; then
  echo "Error: script.sh not found. Please make sure the script is in the same directory as this script."
  exit 1
fi

# add a cron job to run script.sh every hour
crontab -l | { cat; echo "0 * * * * /bin/bash $(pwd)/script.sh"; } | crontab -
echo "Successfully added cron job to run script.sh every hour."
