require_relative "bill"
require "minitest/autorun"

class BillTest < Minitest::Test
  def test_hash
    bill1 = Bill.new
    bill1.accessToken = 'test_token'
    bill1.command = 'debit'
    bill1.uniqueId = 'sale_id_1'
    bill1.comments = 'optional'
    bill1.udf = 'user defined'
    bill1.returnUrl = 'http://txn_completed'
    bill1.notificationUrl = 'http://server_side_notification_url'
    bill1.amount = "5.00"
    bill1.currency = 'INR'
    puts bill1
    assert_equal(bill1.hash("merchant_salt"), '7a97febb1ee0fd596936be066b1617ded7ac558248985a22f7dcc770ad399874f16ad5ff3e2168326582a96d68445ed297540b8a64affc36938a11e0cd1d64e7')
  end
end
