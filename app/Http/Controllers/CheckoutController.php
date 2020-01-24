<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transaction;
use App\TravelPackage;
use App\TransactionDetail;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
class CheckoutController extends Controller
{
    //
    public function index($id)
    {
    	$items = Transaction::with(['transaction_details','users','travel_package'])->findOrFail($id);
    	return view('pages.checkout',compact('items'));
    }

    public function process(Request $request,$id)
    {
    	$travel_package = TravelPackage::findOrFail($id);
    	$transaction = Transaction::create([

    		'travel_package_id' => $id,
    		'users_id'=>Auth::user()->id,
    		'additional_visa' => 0,
    		'transaction_total'=> $travel_package->price,
    		'travel_status' => 'IN_CART'
    	]);
    	TransactionDetail::create([
    		'transaction_id'=>$transaction->id,
    		'username'=> Auth::user()->username,
    		'nationality'=> 'ID',
    		'is_visa'=> false,
    		'doe_pasport'=> Carbon::now()->addYears(5)

    	]);

    	return redirect()->route('checkout',$transaction->id);
    }

    public function create(Request $request, $id)
    {
    	$data = $request->all();
    	$data['transaction_id'] = $id;
    	TransactionDetail::create($data);

    	$transaction = Transaction::with(['travel_package'])->find($id);
    	if ($request->is_visa) {
    		$transaction->transaction_total += 50.000;

    		$transaction->additional_visa += 50.000;

    	}

    	$transaction->transaction_total += $transaction->travel_package->price;
    	$transaction->save();
    	return redirect()->route('checkout',$id);

    }

    public function remove(Request $request,$detail_id)
    {
    	$items = TransactionDetail::findOrFail($detail_id);
    	$transaction = Transaction::with(['travel_package','transaction_details'])->findOrFail($items->transaction_id);
		if ($request->is_visa) {
    		$transaction->transaction_total -= 50.000;

    		$transaction->additional_visa -= 50.000;

    	}

    	$transaction->transaction_total -= $transaction->travel_package->price;
    	$transaction->save();

    	$items->delete();
    	return redirect()->route('checkout',$items->transaction_id);



    }

    public function success($id)
    {
    	$transaction = Transaction::findOrFail($id);
    	$transaction->travel_status = 'PENDING';
    	$transaction->save();
    	return view('pages.success');

    }


}
