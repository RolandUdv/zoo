<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $table = 'users';

    public $primaryKey = 'id';

    public $timestamps = true;

    // public function bookings(){
    //     return $this->hasMany(Booking::class);
    // }
}
