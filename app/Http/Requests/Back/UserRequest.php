<?php

namespace App\Http\Requests\Back;

use Illuminate\Foundation\Http\FormRequest;

/**
 * @property mixed user
 */
class UserRequest extends FormRequest
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
                    'email' => "required|email|unique:users,email,{$this->user}",
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