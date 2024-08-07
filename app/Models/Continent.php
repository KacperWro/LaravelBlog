<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

// might be unnecessary later, so this php file might be deleted later

class Continent extends Model
{
    use HasFactory;
    use Sluggable;

    protected $fillable = ['continentName', 'slug'];

    public function user()
    {
        return $this->belongsTo(Continent::class);
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'continentName'
            ]
        ];
    }
}
