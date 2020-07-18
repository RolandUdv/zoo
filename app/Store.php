<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    // table name
    protected $table = 'stores';
    // primary key
    public $primaryKey = 'id';
    // timestamps
    //public $timestamps = true; // no need for this
}
