<?php

namespace App\Models;

use App\Traits\HasAuthor;
use App\Traits\HasHistories;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory, HasAuthor, HasHistories;

    protected $guarded = [];

    protected $casts = [
        "photos" => "array",
        "specifications" => "json",
        "active" => "boolean",
    ];

    public function scopeActive($query, $active = 1)
    {
        return $query->where("active", $active);
    }
}
