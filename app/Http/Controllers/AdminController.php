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
                $room = Room::all();
                return view('home.index', compact('room'));
            } elseif ($usertype == 'admin') {
                return view('admin.index');
            } else {
                return redirect()->back();
            }
        }
    }
    public function getHomePage()
    {
        $room = Room::all();
        return view('home.index', compact('room'));
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
    public function getUpdatePage($id)
    {
        $data = Room::find($id);
        return view('admin.update_room', compact('data'));
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
    public function deleteRoom($id)
    {
        $data = Room::find($id);
        $data->delete();
        return redirect()->back();
    }
    public function editRoom(Request $request, $id)
    {
        $data = Room::find($id);
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
