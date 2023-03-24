<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
class Product extends Model
{
    use HasFactory;
    protected $table = 'product';

    public function sale(): HasOne
    {
        return $this->hasOne(ProductSale::class);
    }
    public function store(): HasOne
    {
        return $this->hasOne(ProductStore::class);
    }
}
