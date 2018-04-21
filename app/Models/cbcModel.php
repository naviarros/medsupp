<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class cbcModel extends Model
{
    protected $table = 'bloodcount';
    public $timestamps = false;
    protected $fillable =
    [
      'patient_id',
      'lastname',
      'firstname',
      'middlename',
      'edad',
      'report_date',
      'bday',
      'gender',
      'birthplace',
      'wbc',
      'rbc',
      'hgb',
      'hct',
      'mcv',
      'mch',
      'mchc',
      'rdw_cv',
      'plat_count',
      'mpv'
    ];
    protected $dates = ['report_date', 'bday'];
}
