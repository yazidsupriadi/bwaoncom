<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    //
    protected $table = 'transactions';

    protected $fillable = ['travel_packages_id','users_id','additional_visa','transactional_total','travel_status'];

    public function transaction_detail()
    {
    	return $this->hasMany(TransactionDeatil::class);
    }

    public function users()
    {
    	return $this->belongsTo(User::class,'users_id','id');
    }
    public function travel_package()
    {
    	return $this->belongsTo(TravelPackage::class,'travel_packages_id','id');
    }
}
