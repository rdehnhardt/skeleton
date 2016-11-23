<?php

namespace App\Services\Users;

use App\Models\Role;
use Illuminate\Support\Facades\Validator;

class CreateRole
{
    /**
     * @var array
     */
    private $rules = [
        'name' => 'required|max:255|unique:roles',
    ];

    /**
     * @param array $data
     * @return mixed
     */
    public function isValid(array $data)
    {
        return Validator::make($data, $this->rules);
    }

    /**
     * @param array $data
     * @return bool
     */
    public function execute(array $data)
    {
        if (!$this->isValid($data)) {
            return false;
        }

        $role = new Role();
        $role->name = $data['name'];
        $role->slug = str_slug($data['name']);

        return $role->save();
    }
}