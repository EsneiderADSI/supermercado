<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
    protected $table = 'product';
    protected $primaryKey = 'idPRODUCT';
    protected $fillable = ['idPRODUCT','nameProduct', 'productState', 'provider_idProvider', 'enterprise_idEnterprise', 'productType_idproductType'];

    const CREATED_AT = 'name_of_created_at_column';
	const UPDATED_AT = 'name_of_updated_at_column';
	public $timestamps = false;
}
