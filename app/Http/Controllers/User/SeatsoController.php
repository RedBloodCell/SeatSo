<?php

namespace App\Http\Controllers\User;

use App\Http\Model\Seatds;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

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
        if($input =Input::all()){
            $id = $input['result'];
            DB::update("update seat_distribution set seat_occupy = 1 where seat_id = $id");
            return view('user.seatso');
        }else {
            return view('user.seatso');
        }
    }

    public function seatreport()
    {
        $input=Input::all();
        $o = 2;//$input['date'];
        $affected = DB::update("update seat_distribution set seat_occupy = 1 where seat_id = $o");
    }
}
