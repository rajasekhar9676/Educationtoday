<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PanelDiscussion extends Model {
    use HasFactory;

    protected $fillable = ['heading', 'content', 'video'];
}
