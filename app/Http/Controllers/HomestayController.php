<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Homestay;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomestayController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.listhome.index',[
            'tags' => Tag::all(),
            'homestays' => Homestay::all(),
            'bookings' => Booking::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.listhome.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            
            'name' => 'required|min:3',
            'body' => 'required|min:3',

        ]);

        // $image = $request->image;
        // $image->store('homepic');

        $homestay = Homestay::create([
           
            'name' => $request->name,
            'body' => $request->body,
            'harga' => $request->harga
        ]);

        if ($request->has('tag')) {
            $homestay->tag()->attach($request->tag);
        }

       // return to_route('welcome')->with('success', 'Homestay Berhasil Ditambah');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Homestay $homestay)
    {
        return view('admin.listhome.show', [
            "homestay" => $homestay
        ]);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Homestay $homestay)
    {
        return view('admin.listhome.edit', [
           "homestay" => $homestay 
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Homestay $homestay)
    {
        Storage::delete('public/homepic/' , $homestay->image);

        $homestay->delete();

        return to_route('admin.listhome.index')->with('succes', 'Berhasil dihapus');
    }
}
