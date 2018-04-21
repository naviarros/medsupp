<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class results extends Model
{
    //
    public $timestamps = false;
    protected $table = 'results';
    protected $primaryKey = 'id';
    protected $fillable = [
      'lstname',
      'frstname',
      'mdlename',
      'age',
      'cstatus',
      'ntnl',
      'res_img',
      'status',
      'patient_type',
      'remarks',
      'dprtment',
      'typeoflab',
      'definition_test',
      'created_at'
    ];
    protected $dates = ['created_at'];
}
