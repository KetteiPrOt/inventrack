<?php

namespace App\Models;

use App\Models\Products\Product;
use App\Models\Receipts\Receipt;
use App\Models\Shelves\Shelf;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Warehouse extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'active'];

    public $timestamps = false;

    public function receipts(): HasMany
    {
        return $this->hasMany(Receipt::class);
    }

    public function shelves(): HasMany
    {
        return $this->hasMany(Shelf::class);
    }

    public function products(): BelongsToMany
    {
        return $this->belongsToMany(Product::class)->withPivot('id', 'min_stock');
    }
}
