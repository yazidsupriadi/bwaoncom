<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TransactionDetail extends Model
{
    //
    protected $table = 'transaction_details';

    protected $fillable = ['transaction_id','username','nationality','is_visa','doe_passport'];

    

    public function transaction()
    {
    	return $this->belongsTo(Transaction::class,'transaction_id','id');
    }
    
}
