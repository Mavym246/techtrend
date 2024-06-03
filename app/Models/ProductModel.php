<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductModel extends Model
{
    use HasFactory;

    protected $table = 'product';
    protected $primaryKey = 'id_product';
    protected $fillable = ["name", "price", "description", "image", "release_date", "category_id"];
    public $timestamps = false;
}
