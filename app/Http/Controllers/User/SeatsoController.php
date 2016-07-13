<?php

namespace App\Http\Controllers\User;

use App\Http\Model\Seatds;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;

class SeatsoController extends CommonController
{
    public function seatso()
    {
        /*$results = DB::select('select * from seat_distribution');
        foreach ($results as $value) {
            echo $value->seat_id;
            echo $value->seat_row;
            echo $value->seat_column;
            echo $value->seat_occupy;
        }
        dd($results);*/
        return view('user.seatso');
    }
}
