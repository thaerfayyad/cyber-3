<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certificate extends Model
{
    use HasFactory;

      protected $fillable = ['title', 'description', 'link', 'image'];
    protected $appends = ['image_path'];

    public function getImagePathAttribute()
    {
        return asset('storage/' . $this->image);

    }
}
