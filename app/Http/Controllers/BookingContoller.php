<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Homestay;
use Carbon\Carbon;
use Illuminate\Http\Request;

class BookingContoller extends Controller
{

    public function booking(Request $request, Homestay $homestay){
        $this->validate($request,[
            'jumlah'=> 'required',
        ]);

        function lama(){
            $start = Carbon::parse("2022-11-20");
            $end = Carbon::parse("2022-11-24");
      
            return $end->diffInDays($start);  
        }

        Booking::create([
            'user_id'=>auth()->user()->id,
            'homestay_id'=>$homestay,
            'jumlah' => $request->jumlah,
            'total' => $request->jumlah * $request->harga * lama(),
            'start' => $request->start,
            'end' => $request->end,
        ]);


    }
}
