<?php

namespace App\Http\Controllers\Mock;

use App\Http\Controllers\Controller;

class OrderListOptionController extends Controller
{
    public function __invoke()
    {
        $data = [
            [
                'orderID' => '20180315A01N00010014',
                'branch' => '000',
                'account' => '99999999',
                'orderState' => 3,
                'frontOrderState' => 2,
                'orderCondition' => '指値 300円',
                'recvDateTime' => '20180315103000',
                'symbol' => '133128518',
                'exchange' => 'OE',
                'frontOrderType' => 20,
                'timeInForce' => 1,
                'price' => 300,
                'recvQuantity' => 2,
                'orderQuantity' => 2,
                'cumQuantity' => 0,
                'cancelQuantity' => 0,
                'leavesQuantity' => 2,
                'buySell' => 2,
                'tradeType' => 1,
                'accountType' => 3,
                'deliveryType' => 0,
                'expireDate' => '20180315',
                'comment' => 'コメント',
                'triggerInfo' => [
                    [
                        'condition' => '株価が1,137.5円以下になったら → 注文発注',
                        'triggerState' => 3,
                        'inputTime' => '20180411103341'
                    ]
                ],
                'tradeDetails' => [
                    [
                        'seqNum' => 1,
                        'detailID' => '20180411A01N09269028',
                        'recType' => 1,
                        'tradeDetailState' => 3,
                        'transactTime' => '20180411103341',
                        'rejReason' => 0,
                        'ordType' => 1,
                        'price' => 300,
                        'quantity' => 100,
                        'executionID' => 'E201803160005H',
                        'tradeDateTime' => '20180316123000',
                        'settleDate' => '20180322',
                        'commission' => 80,
                        'commissionTax' => 6
                    ]
                ]
            ]
        ];
        return response()->json($data);
    }
}