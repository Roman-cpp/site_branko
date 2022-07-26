<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'name'
    ];

    public function allImg()
    {
        return $this->hasMany(Image::class);
    }
}
