<?php

namespace App\Http\Requests;

class AddMoneyReqs extends BaseApiFormReqs
{
    public function rules()
    {
        return [
            'user_id' => 'required|int',
            'amount' => 'required|int'
        ];
    }
}
