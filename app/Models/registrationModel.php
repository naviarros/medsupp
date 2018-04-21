<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class registrationModel extends Model
{
  protected $table = 'admin';
  protected $primarykey = 'admin_id';
  protected $fillable = array('admin_uname', 'admin_pw');
  protected $timestamps = false;
}
