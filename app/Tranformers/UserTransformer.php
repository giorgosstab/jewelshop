<?php

namespace App\Transformer;

use App\User;
use League\Fractal\TransformerAbstract;

class UserTransformer extends TransformerAbstract
{
    /**
     * List of resources to automatically include
     *
     * @var array
     */
    protected $defaultIncludes = [
        'details'
    ];

    public function transform(User $user)
    {
        return [
            'id'      => (int) $user->id,
            'name'   => $user->name,
            'email'   => $user->email,
            'avatar' => secure_asset('storage/'.$user->avatar),
            'created_at' => $user->created_at->format('d M Y - H:i:s'),
        ];
    }

    /**
     * Include Product
     * @param  User  $user
     * @return \League\Fractal\Resource\Item
     */
    public function includeDetails(User $user)
    {
        return $this->item($user->userDetail, new UserDetailTransformer);
    }
}
