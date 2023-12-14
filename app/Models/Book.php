<?php

namespace App\Models;

use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Contracts\Database\Query\Builder as QueryBuilder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function scopeTitle(Builder $query, String $title): Builder
    {
        return $query->where('title', 'LIKE', "%" . $title . "%");
    }

    public function scopePopular(Builder $query): Builder
    {
        return $query->withCount('reviews')->orderBy('reviews_count', 'DESC');
        // $query->withCount('reviews')->withAvg('reviews', 'rating')->having('reviews_count', '>=', 10)->orderBy('reviews_avg_rating', 'DESC')->limit(10)->get();
    }

    public function scopeHighestRated(Builder $query): Builder
    {
        return $query->withAvg('reviews', 'rating')->orderBy('reviews_avg_rating', 'desc');
    }
}
