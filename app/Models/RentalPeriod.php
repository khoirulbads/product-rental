<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RentalPeriod extends Model
{
    use HasFactory;

    protected $table = 'rental_periods';
    protected $keyType = 'string';
    public $incrementing = false;

    protected $fillable = ['duration'];

    public function pricing()
    {
        return $this->hasMany(ProductPricing::class);
    }
}
