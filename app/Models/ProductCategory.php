<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    protected $table = 'product_categories';
    protected $primaryKey = 'id';
    public $timestamps = true;

    protected $fillable = [
        'category_name',
    ];
}
