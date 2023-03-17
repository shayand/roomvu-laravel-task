<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\Response as HttpCode;
use Illuminate\Http\Exceptions\HttpResponseException;

class BaseApiFormReqs extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * @param Validator $validator
     * @return void
     * @throws HttpResponseException
     */
    protected function failedValidation(Validator $validator): void
    {
        Log::error('['.__CLASS__.'][failedValidation] Form Request Validation Exception');
        throw new HttpResponseException(response()->json(['data' => 'failed','message' => $validator->getMessageBag()],HttpCode::HTTP_UNPROCESSABLE_ENTITY));
    }
}
