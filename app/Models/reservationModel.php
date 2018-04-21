<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class reservationModel extends Model
{
    public $timestamps = false;
    protected $table = 'reservation';
    protected $primaryKey = 'id';
    protected $fillable =
    [
      'reserve_no',
      'pat_res_lname',
      'pat_res_fname',
      'pat_res_mdinit',
      'dateofbirth',
      'mobile_no',
      'hmo_credited',
      'doc_name',
      'status',
      'action',
      'request_date'
    ];
    protected $dates = ['dateofbirth','request_date'];
}
