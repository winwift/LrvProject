<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\Image\Manipulations;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Post extends Model implements HasMedia
{
    use HasFactory ,InteractsWithMedia;

    protected $fillable = ['category_id',
        'title', 
        'slug',
        'category',
        'description',
        'is_published'
    ];

    protected $casts = [
        'is_published' => 'boolean',
    ];

    public function registerMediaConversions(Media $media = null): void
    {
        $this
            ->addMediaConversion('preview')
            ->fit(Manipulations::FIT_CROP, 300, 300)
            ->nonQueued();
    }

    public function post_media()
    {
        return static::all();
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }



        
}
    