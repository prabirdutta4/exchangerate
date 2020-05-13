<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CurrencyRate extends Model
{
	protected $table;
    protected $fillable = ['from_country', 'to_country', 'from_currency','to_currency','rate'];
	
}