<?php

namespace App\Front\Http\Requests;

class UserRequest extends FrontRequest
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
                    'name' => 'required',
                ];
            }
            case 'PUT':
            case 'PATCH': {
                return [
                    'email' => "required|email|unique:users,email,{$this->users}",
                    'name' => 'required',
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
