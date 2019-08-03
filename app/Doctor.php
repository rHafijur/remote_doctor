<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $fillable=[
        'user_id','department','degree',
    ];
    public function user(){
        return $this->belongsTo('App\User');
    }
}
