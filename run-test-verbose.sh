#!/bin/sh
if [ -z $1 ]
then
	echo Please specify the test file
	exit
fi
docker exec -ti makebusy.kazoo ./run-test-verbose.sh tests/KazooTests/Applications/$1
