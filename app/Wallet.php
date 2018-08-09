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
        $this->belongsToMany(UserData::class);
    }
    public function transaction()
    {
        $this->hasMany(Transaction::class);
    }
}
