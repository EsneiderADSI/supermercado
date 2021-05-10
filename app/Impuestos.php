<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Impuestos extends Model
{
    protected $table = 'tax';
    protected $primaryKey = 'idTAX';
    protected $fillable = ['idTAX','taxName'];

    const CREATED_AT = 'name_of_created_at_column';
	const UPDATED_AT = 'name_of_updated_at_column';
	public $timestamps = false;
}
