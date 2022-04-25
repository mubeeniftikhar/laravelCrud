<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Room;
class ShowRoomsController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request, $roomType = null)
    {
      //$rooms = DB::table('rooms')->get();
     // $rooms = Room::get();
    /*   if($request->query('id') !== null ) {
          $rooms = $rooms->where('room_type_id', $request->query('id'));
      } */
      // if (isset($roomType)) {
      //   $rooms = Room::where('room_type_id', '!=', $roomType)->get();
      // }
      // else {
      //   $rooms = Room::get();
      // }

      $rooms = Room::byType($roomType)->get();

      return view('rooms.home', ['rooms'=>$rooms]);
    }
}
