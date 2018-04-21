<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class diagnosticModel extends Model
{
    protected $table = 'urinetest';
    public $timestamps = false;
    protected $fillable =
    [
      'urine_id',
      'lst_name',
      'frst_name',
      'mdle_name',
      'age',
      'dob',
      'sex',
      'rep_date',
      'bplace',
      'color',
      'clarity',
      'bilirubin',
      'specgrav',
      'occultblood',
      'ph',
      'urobilinogen',
      'nitrate',
      'leukocytes',
      'glucose',
      'ketones',
      'protein',
      'wbc',
      'rbc',
      'epithelial',
      'bacteria',
      'urineculture'
    ];
    protected $dates = ['dob','rep_date'];
}
