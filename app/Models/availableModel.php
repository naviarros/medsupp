<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class availableModel extends Model
{
    public $timestamps = false;
    protected $table = 'schedule_list';
    protected $fillable =
    ['time_avail', 'status', 'date_avail'];
    protected $time = ['time_avail'];
    protected $dates = ['date_avail'];

}
