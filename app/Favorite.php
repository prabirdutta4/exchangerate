<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
	protected $table;
    protected $fillable = ['from_country', 'to_country', 'user_id'];
	
}