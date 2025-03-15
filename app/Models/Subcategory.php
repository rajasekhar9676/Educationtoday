<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    use HasFactory;
    protected $fillable = ['category_id', 'name', 'meta_title', 'meta_banner', 'thumbnail', 'meta_description', 'meta_keywords'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function magazines()
    {
        return $this->hasMany(Magazine::class, 'subcategory_id');
    }
}




