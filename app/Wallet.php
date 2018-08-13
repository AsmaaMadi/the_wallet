<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wallet extends Model
{
    protected $fillable = [
        'name'
    ];
    public function userData()
    {
        $this->belongsToMany(UserData::class,userData_wallet,wallet_id,userData_id);
    }
    public function transaction()
    {
        $this->hasMany(Transaction::class);
    }
}
