<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'text',
        'url',
        'order',
        'parent_id',
    ];

    public function parent()
    {
        return $this->belongsTo(MenuItem::class);
    }

    public  function child()
    {
        return $this->hasMany(MenuItem::class);
    }
}
