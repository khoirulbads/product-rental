<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    use HasFactory;

    protected $table = 'regions';
    protected $keyType = 'string';
    public $incrementing = false;

    protected $fillable = ['region_name'];

    public function pricing()
    {
        return $this->hasMany(ProductPricing::class);
    }
}
