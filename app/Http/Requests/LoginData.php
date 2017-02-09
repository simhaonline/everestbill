<?php

namespace EverestBill\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginData extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'email'    => 'email',
            'password' => 'min:5|max:32',
        ];
    }
}
