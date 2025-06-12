<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name'];
    
    public function products()
    {
        // カテゴリが複数の商品を持つ（1対多の関係）
        return $this->hasMany(Product::class);
    }
}
