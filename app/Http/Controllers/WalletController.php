<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddMoneyReqs;
use App\Http\Requests\BalanceReqs;
use App\Models\User;
use App\Models\UserTransaction;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response as HttpCode;


class WalletController extends Controller
{
    /**
     * @param BalanceReqs $reqs
     * @return \Illuminate\Http\JsonResponse
     */
    public function getBalance(BalanceReqs $reqs): \Illuminate\Http\JsonResponse
    {
        try{
            $userId = $reqs->get('user_id');
            $userDetails = User::where('id',$userId)->get()->first();
            $ret = ['balance' => $userDetails->balance];
            return response()->json($ret,HttpCode::HTTP_OK);
        } catch (\Exception $exception){
            throw new HttpResponseException(response()->json(['data' => 'failed','message' => 'user not found'],HttpCode::HTTP_UNPROCESSABLE_ENTITY));
        }
    }

    public function addMoney(AddMoneyReqs $reqs)
    {
        try{
            $userId = $reqs->get('user_id');
            $amount = $reqs->get('amount');

            $transaction = new UserTransaction();
            $transaction->user_id = $userId;
            $transaction->amount = $amount;
            $transaction->saveOrFail();

            $ret = ['reference_id' => $transaction->id];
            return response()->json($ret,HttpCode::HTTP_CREATED);
        } catch (\Exception $exception){
            throw new HttpResponseException(response()->json(['data' => 'failed','message' => 'there was a problem with transaction'],HttpCode::HTTP_UNPROCESSABLE_ENTITY));
        }
    }
}
