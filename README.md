# MakeBusy tests

## Test cases for Kazoo MakeBusy

Please see [MakeBusy](https://github.com/2600hz/make-busy) how to write tests.

## Run tests with docker image

```sh
./run-test.sh Callflow/Device/Call.php

TAP version 13
ok 1 - KazooTests\Applications\Callflow\Call::testSomethingElse
ok 2 - KazooTests\Applications\Callflow\Call::testMain with data set #0 ('kamailio.kazoo')
1..2
```

You can also run tests with verbose output (to see what is going on):

```sh
./run-test-verbose.sh Callflow/Device/Call.php
```
Please see [example log output](doc/sample.log)

