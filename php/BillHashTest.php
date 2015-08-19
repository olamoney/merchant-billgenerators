<?php
/**
 * User: parth
 * Date: 10/8/15
 * Time: 12:59 PM
 */
include "Bill.php";

class BillHashTest
{
    public function testHash()
    {
        // test_token|sale_id_1|optional|user defined|http://txn_completed|http://server_side_notification_url|INR|5.00
        // test_token|sale_id_1|optional|user defined|http://txn_completed|http://server_side_notification_url|INR|5.00
        $bill = new Bill();
        $bill->setAccessToken("test_token");
        $bill->setCommand("debit");
        $bill->setUniqueId("sale_id_1");
        $bill->setComments("optional");
        $bill->setUdf("user defined");
        $bill->setReturnUrl("http://txn_completed");
        $bill->setNotificationUrl("http://server_side_notification_url");
        $bill->setAmount("5.00");
        $bill->setCurrency("INR");
        $hash = $bill->getHash("merchant_salt");
        echo "Hash String [" . $bill . "]\n";
        if (0 != strcmp($hash, "7a97febb1ee0fd596936be066b1617ded7ac558248985a22f7dcc770ad399874f16ad5ff3e2168326582a96d68445ed297540b8a64affc36938a11e0cd1d64e7")) {
            echo "Hash Mismatch : " . $hash;
            throw new \Exception();
        } else {
            echo "Hash : " . $hash;
        }
    }
}

$test = new BillHashTest();
$test->testHash();