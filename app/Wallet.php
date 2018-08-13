<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wallet extends Model
{
    protected $fillable = [
        'name'
    ];
    public function userdata()
    {
        $this->belongsToMany(Userdata::class);
    }
    public function transaction()
    {
        $this->hasMany(Transaction::class);
    }
}
