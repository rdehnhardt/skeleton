<?php

namespace App\Http\Transformer;

use App\Models\User;
use League\Fractal\TransformerAbstract;

class UserTransformer extends TransformerAbstract
{
    /**
     * Turn this item object into a generic array
     *
     * @param User $user
     * @return array
     */
    public function transform(User $user)
    {
        return [
            'id' => (int)$user->id,
            'name' => $user->name,
            'email' => $user->email,
            'picture' => "/storage/profile/{$user->picture}",
            'createdAt' => $user->created_at->format('Y-m-d H:i:s'),
        ];
    }
}