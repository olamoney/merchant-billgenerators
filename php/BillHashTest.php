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
        $bill = new Bill();
        $bill->setAccessToken("test_token");
        $bill->setCommand("debit");
        $bill->setUniqueId("sale_id_1");
        $bill->setComments("optional");
        $bill->setUdf("user defined");
        $bill->setReturnUrl("http://txn_completed");
        $bill->setNotificationUrl("http://server_side_notification_url");
        $bill->setAmount(5.00);
        $bill->setCurrency("INR");
        $hash = $bill->getHash("merchant_sale");
        if (!strcmp($hash, "e71114e2423a401b8df867ffc16b4e1e34cc534bdb569898cc30ce220ce7c7044a8b3f608638c49c853d79d77c9f772d902bab39f460ff0fb5c5af963e8fd878PHP")) {
            echo "Hash : " . $hash;
            throw new \Exception();
        } else {
            echo "Hash : " . $hash;
        }
    }
}

$test = new BillHashTest();
$test->testHash();