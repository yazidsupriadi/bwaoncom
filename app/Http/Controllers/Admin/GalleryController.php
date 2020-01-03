<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Gallery;
use App\TravelPackage;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $items = Gallery::all();
        return view('pages.admin.gallery.index',compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $travel_package = TravelPackage::all();
    return view('pages.admin.gallery.create',compact('travel_package'));
    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data = $request->all();
        $data['image'] = $request->file('image')->store(
            'assets/gallery','public'
        );
        Gallery::create($data);
        return redirect()->route('gallery.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    $item = Gallery::findOrFail($id);
    $travel_package = TravelPackage::all();
    return view('pages.admin.gallery.edit',compact('travel_package','item'));
    
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

        $data = $request->all();
        $data['image'] = $request->file('image')->store(
            'assets/gallery','public'
        );
        $item = Gallery::findOrFail($id);
        $item->update($data);
        return redirect()->route('gallery.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //

        $item = Gallery::findOrFail($id);
        $item->delete();
        return redirect()->route('gallery.index');

    }
}
