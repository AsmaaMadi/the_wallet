<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserData extends Model
{
    protected $fillable = [
        'name', 'age', 'gender',
    ];

    public function wallet()
    {
        $this->belongsToMany(Wallet::class);
    }
    public function transaction()
    {
        $this->hasMany(Transaction::class);
    }
}
