<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provedor extends Model
{
    protected $table = 'provider';
    protected $primaryKey = 'idProvider';
    protected $fillable = ['idProvider','phoneNumber', 'providerName'];

    const CREATED_AT = 'name_of_created_at_column';
	const UPDATED_AT = 'name_of_updated_at_column';
	public $timestamps = false;
}
