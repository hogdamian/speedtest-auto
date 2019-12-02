# Automatic Speedtests via speedtest.net - with responsive webapplication
Speedtest-auto is a project that is used to perform an hourly speed test. All speed tests are downloaded as an image file to the server and displayed on a responsive web interface.


# Installation 
Unix Package

    sudo apt-get install speedtest-cli

or

    wget -O speedtest-cli https://raw.githubusercontent.com/sivel/speedtest-cli/master/speedtest.py
    chmod +x speedtest-cli
    
## Clone all files to /var/www/html
    
    cd /var/www/html
    wget https://github.com/hogdamian/speedtest-auto/archive/master.zip
    sudo apt-get install unzip
    unzip master.zip
    cd speedtest-auto-master && mv * ..
    
## Make Bash Scripts executable
    
    cd /var/www/html/src
    chmod +x script.sh 
    chmod +x start.sh
    
## Testing the script if working fine
    
    ./script.sh
    
# IN WORK
    
