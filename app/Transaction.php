<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    //
    protected $table = 'transactions';

    protected $fillable = ['travel_package_id','users_id','additional_visa','transaction_total','travel_status'];

    public function transaction_details()
    {
    	return $this->hasMany(TransactionDetail::class);
    }

    public function users()
    {
    	return $this->belongsTo(User::class,'users_id','id');
    }
    public function travel_package()
    {
    	return $this->belongsTo(TravelPackage::class,'travel_package_id','id');
    }
}
