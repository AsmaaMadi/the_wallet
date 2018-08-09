<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = [
        'amount'
    ];
    public function category()
    {
        $this->belongsTo(Category::class);
    }
    public function wallet()
    {
        $this->belongsTo(Wallet::class);
    }
    public function userData()
    {
        $this->belongsTo(UserData::class);
    }
}
