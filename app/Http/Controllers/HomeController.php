<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;
use App\Models\Booking;

class HomeController extends Controller
{
    public function getDetailsPage($id)
    {
        $room = Room::find($id);
        return view('home.room_details', compact('room'));
    }

    public function addBooking(Request $request, $id)
    {
        $request->validate([
            'startDate' => 'required|date',
            'endDate' => 'required|date|after_or_equal:startDate',
        ]);

        // $room = Room::findOrFail($id);

        // $startDate = new \DateTime($request->startDate);
        // $endDate   = new \DateTime($request->endDate);
        // $diffDays  = $endDate->diff($startDate)->days;

        // if ($diffDays == 0) {
        //     $diffDays = 1;
        // }
        // $total = $room->price * $diffDays;

        $data = new Booking();
        $data->room_id = $id;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->start_date = $request->startDate;
        $data->end_date = $request->endDate;
        $data->total = $request->total;

        $data->save();
        return redirect()->back()->with('message', 'Room booked successfully');
    }
}
