<?php

namespace App;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends \TCG\Voyager\Models\User
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'email_verified', 'activation_token'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function scopeByActivationColumns(Builder $builder, $email, $token) {
        return $builder->where('email', $email)->where('activation_token', $token);
    }

    public function orders(){
        return $this->hasMany('App\Order');
    }

    public function page()
    {
        return $this->hasOne('App\CustomPage');
    }

    public function userDetail()
    {
        return $this->hasOne('App\UserDetail');
    }

    public function ratings()
    {
        return $this->hasMany('App\Rating');
    }
    public function wishlist(){
        return $this->hasMany('App\Wishlist');
    }
}
