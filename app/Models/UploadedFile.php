<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UploadedFile extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     * 
     * @var array
     */
    protected $fillable = [
        'name',
        'original_name',
    ];

    public function path(): Attribute
    {
        return Attribute::make(
            get: fn ($value, $attributes) => asset('storage/' . $attributes['name']),
        );
    }
}
