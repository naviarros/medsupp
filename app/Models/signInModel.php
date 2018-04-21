<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;

class signInModel extends Model
{
    public $timestamps = false;

    protected $table = 'admin';
    protected $primarykey = 'id';
    protected $fillable = [
      'admin_uname',
      'password',
      'last_name',
      'first_name',
      'middle_name',
      'gender',
      'ages',
      'address',
      'civil',
      'bday',
      'spousename'
    ];
    protected $dates = ['bday'];
}
