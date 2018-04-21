<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class patientModel extends Model
{
    public $timestamps = false;

    protected $table = 'patient';
    protected $primarykey = 'id';
    protected $fillable = [
      'patient_img',
      'frst_name',
      'mdle_name',
      'lst_name',
      'patient_bday',
      'patient_age',
      'gender',
      'marital_status',
      'patient_address',
      'brgy',
      'cty_name',
      'rgn_name',
      'occupation',
      'action_taken',
      'stats',
      'consultreport',
      'date_created'
    ];
    protected $dates = ['patient_bday','date_created'];
}
