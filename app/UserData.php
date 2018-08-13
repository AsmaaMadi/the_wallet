<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Userdata extends Model
{
    protected $fillable = [
        'name', 'age', 'gender',
    ];

    public function saveUser($data)
    {
      //  $this->id = auth()->user()->id;
       // $this->id = $data['id'];
        $this->name = $data['name'];
        $this->email = $data['email'];
        $this->age = $data['age'];
        $this->gender = $data['gender'];
        $this->password = $data['password'];


        $newUser = new User();
        $newUser->id = $data->id;
        $newUser->email = $data->email;
        $newUser->id = $data->id;
        $newUser->name = $data->name;
        $newUser->password = $data->password;
        $this->user_id = 1;

        $this->save();
        $this->user()->save($newUser);
        return 1;
    }

    public function wallet()
    {
        $this->belongsToMany(Wallet::class,userdata_wallet,userdata_id,wallet_id);
    }
    public function transaction()
    {
        $this->hasMany(Transaction::class);
    }
    public function user()
    {
        return $this->hasOne(User::class);
    }
}
