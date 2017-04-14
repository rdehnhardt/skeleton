<?php

namespace App\Http\Requests\Restricted;

use Auth;
use Illuminate\Foundation\Http\FormRequest;

class ProfileRequest extends FormRequest
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
        $user = Auth::user()->id;

        return [
            'name' => 'required',
            'email' => "required|email|unique:users,email,$user",
            'picture' => 'image|mimes:jpeg,jpg,png|image_aspect:1',
            'password' => 'confirmed',
        ];
    }
}
