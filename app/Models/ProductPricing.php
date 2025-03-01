<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductPricing extends Model
{
    use HasFactory;

    protected $table = 'product_pricing';
    protected $keyType = 'string';
    public $incrementing = false;

    protected $fillable = ['product_id', 'region_id', 'rental_period_id', 'price'];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function region()
    {
        return $this->belongsTo(Region::class);
    }

    public function rentalPeriod()
    {
        return $this->belongsTo(RentalPeriod::class);
    }
}
