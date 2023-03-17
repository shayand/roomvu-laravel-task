<?php

namespace App\Http\Requests;

class BalanceReqs extends BaseApiFormReqs
{
    public function rules()
    {
        return [
            'user_id' => 'required|int'
        ];
    }
}
