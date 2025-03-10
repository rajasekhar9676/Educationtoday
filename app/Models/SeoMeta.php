<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SeoMeta extends Model
{
    use HasFactory;

    protected $table = 'seo_meta'; // ✅ Explicitly define the correct table name

    protected $fillable = ['meta_title', 'meta_description', 'meta_keywords'];

    public function seoable()
    {
        return $this->morphTo();
    }
}


