<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Translatable\HasTranslations;

class Setting extends Model {
    use SoftDeletes, HasFactory, HasTranslations;

    protected $fillable = [
        'title',
        'author',
        'description',
        'keywords',
        'logo',
        'favicon'
    ];

    protected array $translatable = [
        'title',
        'author',
        'description',
        'keywords'
    ];

    protected function casts(): array {
        return [
            'title' => 'array',
            'author' => 'array',
            'description' => 'array',
            'keywords' => 'array'
        ];
    }
}
