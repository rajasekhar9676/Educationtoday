<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogPost extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'subcategory_id',
        'title',
        'slug',
        'thumbnail',
        'banner',
        'excerpt',
        'banner_source',
        'content',
    ];

    public function category()
    {
        return $this->belongsTo(BlogCategory::class);
    }

    public function subcategory()
    {
        return $this->belongsTo(BlogSubcategory::class);
    }

    public function seoMeta()
    {
        return $this->morphOne(SeoMeta::class, 'seoable');
    }
}

