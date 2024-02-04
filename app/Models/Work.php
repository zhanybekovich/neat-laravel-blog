<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'description',
        'body',
        'image',
        'is_active',
        'category_id',
        'work_categories',
    ];

    public function category()
    {
        return $this->belongsTo(WorkCategory::class);
    }

    public function services()
    {
        return $this->belongsToMany(Service::class);
    }
}
