<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'price', 'category_id'];

    public function category()
    {
        //商品は1つのカテゴリに属している(1対1の関係)
        return $this->belongsTo(Category::class);
    }
    
    public function images()
    {
        // 商品は複数の画像を持つ（1対多の関係）
        return $this->hasMany(ProductImage::class);
    }
}
