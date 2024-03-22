#!/usr/bin/env bash

# This script just starts the built-in PHP server and opens your browser
# with the correct address to take a look at the project.

host="localhost:7070"
url="http://$host"

php -S "$host" -t . &

if [[ $? -eq 0 ]];
    then
        sleep 5s

        echo -e "PHP server...OK\nStarting the browser... Wait a minute please"

        nice firefox "$url" || nice google-chrome "$url" &

        echo -e "To stop the server:\n\
        1. Type \"ps\" in your terminal.\n\
        2. Use kill <PID of PHP Server>"
    else
        echo "Couldn't start the server...Sorry"
fi