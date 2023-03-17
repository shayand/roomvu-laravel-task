<?php

namespace App\Constant;

class Endpoints
{
    const USER_BALANCE_POST = 'get-balance';
    const USER_BALANCE_POST_ACTION = 'App\Http\Controllers\WalletController@getBalance';
    const USER_ADD_MONEY_POST = 'add-money';
    const USER_ADD_MONEY_POST_ACTION = 'App\Http\Controllers\WalletController@addMoney';
}
