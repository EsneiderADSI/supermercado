<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipoproducto extends Model
{
    protected $table = 'producttype';
    protected $primaryKey = 'idPRODUCTType';
    protected $fillable = ['idPRODUCTType','nameProductType'];

    const CREATED_AT = 'name_of_created_at_column';
	const UPDATED_AT = 'name_of_updated_at_column';
	public $timestamps = false;
}
