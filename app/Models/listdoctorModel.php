<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class listdoctorModel extends Model
{
    public $timestamps = false;

    protected $table = 'doctors';
    protected $primaryKey = 'id';
    protected $fillable =
    [
      'last_name',
      'first_name',
      'middle_name',
      'doc_address',
      'spclty',
      'date_emplyd',
      'doc_bday',
      'ttle_degree',
      'health_insurance',
      'doc_age',
      'doc_no',
      'state_reg',
      'cstat',
      'countryy',
      'day_avail',
      'time_avail',
      'status'
    ];
    protected $dates = ['date_emplyd', 'doc_bday'];
    protected $time = ['time_avail'];
}
