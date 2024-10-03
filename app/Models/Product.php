<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @method static whereHas(string $string, \Closure $param)
 */
class Product extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function images(): HasMany
    {
        return $this->hasMany(Image::class);
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(ProductCategory::class, foreignKey: 'product_category_id');
    }
}
