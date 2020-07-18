<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Animals extends Model
{
    // table name
    protected $table = 'animals';
    // primary key
    public $primaryKey = 'animal_id';
    // timestamps
    public $timestamps = true; // no need for this

    public function advertisements(){
        return $this->belongsTo(Advertisements::class);
    }
}
