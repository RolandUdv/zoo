<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    // table name
    protected $table = 'categories';
    // primary key
    public $primaryKey = 'category_id';
    // timestamps
    public $timestamps = true; // no need for this
}
