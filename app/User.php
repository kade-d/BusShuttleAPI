<?php

namespace App;


use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, Notifiable;

    protected $fillable = [
        'name', 'email', 'password', 'is_admin'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    //Source: coogle @ https://github.com/laravel/passport/issues/195#issuecomment-336543531
    public function withAccessToken($accessToken)
    {
        $this->accessToken = $accessToken;

        $token = $this->token();
        $token->scopes = $this->getScopes();
        $token->save();

        return $this;
    }

    private function getScopes(){
        $isAdmin = $this->getAttributeValue("is_admin");
        if($isAdmin == 1){
            return ["use", "administrate"];
        } else {
            return ["use"];
        }
    }

}
