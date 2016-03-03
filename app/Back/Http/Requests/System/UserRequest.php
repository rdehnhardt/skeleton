<?php

namespace App\Back\Http\Requests\System;

use App\Back\Http\Requests\BackRequest;

class UserRequest extends BackRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        switch ($this->method()) {
            case 'POST': {
                return [
                    'email' => 'required|email|unique:users,email',
                    'role' => 'required',
                    'name' => 'required',
                ];
            }
            case 'PUT':
            case 'PATCH': {
                return [
                    'email' => "required|email|unique:users,email,{$this->users}",
                    'name' => 'required',
                    'role' => 'required',
                ];
            }
        }
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }
}
