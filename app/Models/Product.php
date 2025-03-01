<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';
    protected $keyType = 'string';
    public $incrementing = false;

    protected $fillable = [
        'name', 'description', 'sku', 'category', 'status', 'image_url',
        'short_description', 'weight', 'manufacturer', 'created_by', 'updated_by'
    ];

    public function attributes()
    {
        return $this->hasMany(AttributeValue::class);
    }

    public function pricing()
    {
        return $this->hasMany(ProductPricing::class);
    }
}
