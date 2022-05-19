<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grc extends Model
{
    use HasFactory;

   protected $fillable = ['title', 'description', 'pages', 'cover_img', 'video'];
    protected $appends = ['image_path'];

    public function getImagePathAttribute()
    {
        return asset('storage/' . $this->cover_img);

    }
}
