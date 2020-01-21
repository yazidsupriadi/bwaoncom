<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\TravelPackage;
use App\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $items = Transaction::with(
                'travel_package','users','transaction_details'
        )->get();
        return view('pages.admin.transaction.index',compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

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
        $data['slug'] = Str::slug($request->title);
        TravelPackage::create($data);
        return redirect()->route('travel-package.index');
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
            $item =  Transaction::with(
                'travel_package','users','transaction_details'
        )->findOrFail($id);
            return view('pages.admin.transaction.detail',compact('item'));
    
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
        $item = Transaction::findOrFail($id);
            return view('pages.admin.transaction.edit',compact('item'));
    
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
        $data['slug'] = Str::slug($request->title);
        $item = Transaction::findOrFail($id);
        $item->update($data);
        return redirect()->route('transaction.index');
    
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
        $items = Transaction::findOrFail($id);
        $items->delete();
          return redirect()->route('transaction.index');
    
    }
}
