<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Magazine extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'slug', 'month', 'year', 'banner', 'thumbnail', 'embed_url', 'category_id', 'subcategory_id'
    ];

    public function seoMeta()
    {
        return $this->morphOne(SeoMeta::class, 'seoable');
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function subcategory()
    {
        return $this->belongsTo(Subcategory::class);
    }

    public static function boot()
    {
        parent::boot();
    
        static::creating(function ($magazine) {
            // Generate slug before creating
            $magazine->slug = Str::slug($magazine->name . '-' . $magazine->year . '-' . $magazine->month);
        });
    
        static::created(function ($magazine) {
            // Ensure seoMeta is created after magazine is saved
            $magazine->seoMeta()->create([
                'meta_title' => $magazine->name, // Default title
                'meta_description' => 'Default description for ' . $magazine->name,
                'meta_keywords' => 'default, keywords, magazine'
            ]);
        });
    }
    
}










