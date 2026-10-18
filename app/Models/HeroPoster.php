<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HeroPoster extends Model
{
    protected static $posters = [
        [
            'src' => 'images/poster-1.jpg',
            'alt' => 'Poster Mainan 1',
            'style' => 'width: 45%; top: 5%; left: 0%; z-index: 1;',
            'shadow' => 'shadow',
        ],
        [
            'src' => 'images/poster-4.jpg',
            'alt' => 'Poster Mainan 4',
            'style' => 'width: 45%; top: 10%; right: 0%; z-index: 2;',
            'shadow' => 'shadow',
        ],
        [
            'src' => 'images/poster-3.jpg',
            'alt' => 'Poster Mainan 3',
            'style' => 'width: 50%; bottom: 5%; left: 10%; z-index: 3;',
            'shadow' => 'shadow',
        ],
        [
            'src' => 'images/poster-2.jpg',
            'alt' => 'Poster Mainan 2',
            'style' => 'width: 50%; bottom: 10%; right: 10%; z-index: 4;',
            'shadow' => 'shadow-lg',
        ],
    ];

    public static function getAllPosters()
    {
        return collect(static::$posters)->map(function ($poster) {
            $poster['url'] = asset($poster['src']);
            return (object) $poster;
        });
    }
}