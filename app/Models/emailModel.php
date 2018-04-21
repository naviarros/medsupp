<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class emailModel extends Model
{
    protected $table = 'feedback';
    protected $fillable =
    [
      'name',
      'email',
      'comments'
    ];
}
