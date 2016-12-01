<?php
namespace KazooTests\Applications\Callflow;
use \MakeBusy\Common\Log;

class Call extends DeviceTestCase {

    // here you do changes to your setup required to run the test, like updating Kazoo's Device properties
    public function setUp() {
    }

    // here you revert all the changes made in setUp()
    public function tearDown() {
    }

    // here you can test SomethingElse, test function names must begin with test prefix
    public function testSomethingElse() {
    }

    // main entry, will be called once per each Kamailio target
    public function main($sip_uri) {
        $target = self::B_EXT .'@'. $sip_uri;
        $channel_a = self::ensureChannel( self::$a_device->originate($target) );
        $channel_b = self::ensureChannel( self::$b_device->waitForInbound() );

        self::ensureAnswer($channel_a, $channel_b);
        self::ensureEvent($channel_a->waitPark());
        self::ensureTwoWayAudio($channel_a, $channel_b);
        self::hangupBridged($channel_a, $channel_b);
    }
}
