<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Parking extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'parking_name','parking_address','total_spaces','open_hour','close_hour','latitude','longitud','deleted_at'

    ];
    protected $date = ['deleted_at'];
}
