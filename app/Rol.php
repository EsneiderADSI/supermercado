<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    
    protected $table = 'role';
    protected $primaryKey = 'idRole';
    protected $fillable = ['idRole','roleName'];

    const CREATED_AT = 'name_of_created_at_column';
	const UPDATED_AT = 'name_of_updated_at_column';
	public $timestamps = false;
}
