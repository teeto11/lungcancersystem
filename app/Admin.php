<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
class Admin extends  Authenticatable
{

    //Mass assignable attributes
  protected $fillable = [
    'firstname','lastname', 'email', 'password',
];

//hidden attributes
 protected $hidden = [
     'password', 'remember_token',
 ];


}
