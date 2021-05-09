<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Personas extends Model
{
    protected $table = 'person';
    protected $primaryKey = 'idPerson';
    protected $fillable = ['idPerson','documentPerson', 'Role_idRole'];

    const CREATED_AT = 'name_of_created_at_column';
	const UPDATED_AT = 'name_of_updated_at_column';
	public $timestamps = false;
}
