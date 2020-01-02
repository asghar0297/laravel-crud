<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $guarded = []; 

    // public function getStatusAttribute($attribute){
        
    //     return [

    //         0 => 'Inactive',
    //         1 => 'Active',
    //     ][$attribute];
    // }
    
    public function scopeActive($query){
    
        return $query->where('status',1);
    }
    
    public function scopeInactive($query){
    
        return $query->where('status',0);
    }

    public function company(){

        return $this->belongsTo('App\Company');
    }
}

