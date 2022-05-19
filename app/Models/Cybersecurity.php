<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use function PHPUnit\Framework\returnSelf;

class Cybersecurity extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'pages', 'cover_img', 'video', 'rating'];

    public function questions ()
    {
        return $this->hasMany(Question::class);
    }

    protected $appends = ['image_path'];

    public function getImagePathAttribute()
    {
        return asset('storage/' . $this->cover_img);

    }

    public function videos()
    {
        return $this->hasMany(Video::class);
    }
}
