<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresas extends Model
{
    protected $table = 'enterprise';
    protected $primaryKey = 'idEnterprise';
    protected $fillable = ['idEnterprise','enterpriseName', 'address', 'phoneNumber'];

    const CREATED_AT = 'name_of_created_at_column';
	const UPDATED_AT = 'name_of_updated_at_column';
	public $timestamps = false;
}

