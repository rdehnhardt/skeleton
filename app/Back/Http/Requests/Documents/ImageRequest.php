<?php

namespace App\Back\Http\Requests\Documents;

use App\Back\Http\Requests\BackRequest;

class ImageRequest extends BackRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $rules = [
            'image' => 'required|mimes:jpg,png,gif,svg,jpeg',
            'title' => 'required',
            'description' => 'required',
        ];

        switch ($this->method()) {
            case 'PUT':
            case 'PATCH': {
                $rules['title'] .= ",{$this->images}";
            }
        }

        return $rules;
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
