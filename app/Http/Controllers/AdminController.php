<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Room;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function getIndex()
    {
        if (Auth::id()) {
            $usertype = Auth()->user()->usertype;
            if ($usertype == 'user') {
                return view('home.index');
            } elseif ($usertype == 'admin') {
                return view('admin.index');
            } else {
                return redirect()->back();
            }
        }
    }
    public function getHomePage()
    {
        return view('home.index');
    }
    public function getCreatePage()
    {
        return view('admin.create_room');
    }
    public function getViewPage()
    {
        $data = Room::all();
        return view('admin.view_room', compact('data'));
    }
    public function addRoom(Request $request)
    {
        $data = new Room();
        $data->title = $request->title;
        $data->desc = $request->desc;
        $data->price = $request->price;
        $data->type = $request->type;
        $image = $request->image;
        if ($image) {
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $request->image->move('room', $imageName);
            $data->image = $imageName;
        }
        $data->save();
        return redirect()->back();
    }
}
