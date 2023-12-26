<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Screen\AsSource;
use Orchid\Filters\Filterable;
use Orchid\Filters\Types\Like;


class Post extends Model
{
    use HasFactory;
    use AsSource;

    protected $fillable = [
        'title',
        'description',
        'body',
        'author',
        'hero'
    ];

    protected $allowedSorts = [
        'title',
        'created_at',
        'updated_at'
    ];

    protected $allowedFilters = [
        'title' => Like::class,
    ];
}
