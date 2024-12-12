<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $guarded = [];

    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | SCOPES
    |--------------------------------------------------------------------------
    */

    public function scopeRelated(Builder $query, Article $article): void
    {
        $query->inRandomOrder()
            ->where('type', $article->type)
            ->where('id', '<>', $article->id)
            ->limit(3);
    }

    /*
    |--------------------------------------------------------------------------
    | ACCESORS
    |--------------------------------------------------------------------------
    */

    public function getOptimizedBodyAttribute(): string
    {
        $body = preg_replace('/<img /', '<img loading="lazy" ', $this->body);

        return preg_replace('/\[cta\]/', view('components.inline-cta')->render(), $body);
    }

    public function getReadingTimeAttribute(): string
    {
        return floor(str_word_count(strip_tags(html_entity_decode($this->body))) / 200).' perc';
    }

    /*
    |--------------------------------------------------------------------------
    | MUTATORS
    |--------------------------------------------------------------------------
    */
}
