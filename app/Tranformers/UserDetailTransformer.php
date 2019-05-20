<?php

namespace App\Transformer;

use App\UserDetail;
use League\Fractal\TransformerAbstract;

class UserDetailTransformer extends TransformerAbstract
{

    public function transform(UserDetail $user)
    {
        return [
            'phone'        => (int) $user->phone,
            'company'      => $user->company,
            'city'         => $user->city,
            'country'      => $user->country,
            'address'      => $user->address,
            'house_number' => (int) $user->house_number,
            'zip'          => (int) $user->postal_code,
            'locality'     => $user->locality,
        ];
    }
}
