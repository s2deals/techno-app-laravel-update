<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Download extends Model
{
    use HasFactory;
    protected $fillable = [
        'blog_id',
        'project_id',
        'product_id',
        'file_category',
        'file_category_slug',
        'file_extension',
        'file_name',
        'remarks',
        'description',
        'is_active',
    ];
}
