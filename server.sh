#! /bin/bash

CMD=$1
DIR="$(pwd)"

source "$DIR/vendor/softhub99/zest_framework/server.sh"

zest $CMD