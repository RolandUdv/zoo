<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Advertisements extends Model
{
    // table name
    protected $table = 'advertisements';
    // primary key
    public $primaryKey = 'ad_id';
    // timestamps
    public $timestamps = true; // no need for this

    public function animals(){
        return $this->hasMany(Animals::class);
    }
}
