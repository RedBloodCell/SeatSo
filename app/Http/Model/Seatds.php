<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Seatds extends Model
{
    protected $table = 'seat_distribution';
    protected $primaryKey = 'seat_id';
    public $timestamps = false;
}
