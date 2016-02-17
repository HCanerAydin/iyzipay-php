<?php
require_once('../IyzipayBootstrap.php');

IyzipayBootstrap::init();

$sample = new CrossBookingSample;
$sample->should_send_money_to_sub_merchant();
$sample->should_receive_money_from_sub_merchant();

class CrossBookingSample extends Sample
{
    public function should_send_money_to_sub_merchant()
    {
        # create request class
        $request = new \Iyzipay\Request\CreateCrossBookingRequest();
        $request->setLocale(\Iyzipay\Model\Locale::TR);
        $request->setConversationId("123456789");
        $request->setSubmerchantKey("subMerchantKey");
        $request->setPrice("1");
        $request->setReason("reason text");

        # make request
        $response = Iyzipay\Model\CrossBookingFromSubMerchant::create($request, parent::options());

        # print response
        print_r($response);
    }

    public function should_receive_money_from_sub_merchant()
    {
        # create request class
        $request = new \Iyzipay\Request\CreateCrossBookingRequest();
        $request->setLocale(\Iyzipay\Model\Locale::TR);
        $request->setConversationId("123456789");
        $request->setSubmerchantKey("subMerchantKey");
        $request->setPrice("1");
        $request->setReason("reason text");

        # make request
        $response = Iyzipay\Model\CrossBookingFromSubMerchant::create($request, parent::options());

        # print response
        print_r($response);
    }
}