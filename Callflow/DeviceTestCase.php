<?php
namespace KazooTests\Applications\Callflow;

use \KazooTests\TestCase;
use \MakeBusy\Kazoo\Applications\Crossbar\TestAccount;

class DeviceTestCase extends TestCase
{
    protected static $a_device;
    protected static $b_device;

    const A_EXT = 1001;
    const B_EXT = 1002;
    const A_NUMBER = '5552221001';
    const B_NUMBER = '5552221002';

    public static function setUpBeforeClass() {
        parent::setUpBeforeClass();

        $acc = new TestAccount("DeviceTestCase");

        self::$a_device = $acc->createDevice("auth");
        self::$a_device->createCallflow([self::A_EXT, self::A_NUMBER]);

        self::$b_device = $acc->createDevice("auth");
        self::$b_device->createCallflow([self::B_EXT, self::B_NUMBER]);

        // create virtual devices in managed FreeSwitch type "auth"
        self::sync_sofia_profile("auth", self::$a_device->isLoaded(), 2);
    }
}
