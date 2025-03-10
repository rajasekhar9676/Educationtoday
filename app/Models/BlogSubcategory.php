<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogSubcategory extends Model {
    use HasFactory;

    protected $fillable = [
        'category_id', 'name', 'meta_title', 'meta_banner', 'thumbnail',
        'meta_description', 'meta_keywords', 'subcategory_url'
    ];

    public function category() {
        return $this->belongsTo(BlogCategory::class, 'category_id');
    }
}
