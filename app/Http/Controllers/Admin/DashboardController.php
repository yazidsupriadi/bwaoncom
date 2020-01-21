<?php

namespace App\Http\Controllers\Admin;
use App\Transaction;
use App\TravelPackage;
use App\User;
use App\Gallery;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index()
    {
    	$user = User::all();
    	$transaction = Transaction::all();
    	$gallery = Gallery::all();
    	$travel_package = TravelPackage::all();
    	return view('pages.admin.dashboard',compact('travel_package','transaction','user','gallery'));
    }
}
