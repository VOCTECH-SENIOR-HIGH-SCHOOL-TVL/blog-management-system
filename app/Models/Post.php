<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;


class Post extends Model
{


    use HasFactory;

    // Sluggable
    use Sluggable;
    use SluggableScopeHelpers;  

    protected $path = '/storage/images/';
    
    public function getPictureAttribute($file) {
        return $this->path . $file;
    }

    protected $guarded = [];

    public $timestamps = false;

    public function user() {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => ['title'],
                'onUpdate' => true,
            ]
        ];
    }

    public function likes()
    {
        return $this->hasMany(Like::class)->where('like', true);
    }
}
