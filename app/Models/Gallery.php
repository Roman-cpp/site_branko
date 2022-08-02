<?php

namespace App\Models;

use App\Observers\GalleryObserver;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @property $images Collection Картинки в галерее.
 */
class Gallery extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'name'
    ];

    /**
     * Связь с таблицей images один ко многим
     *
     * @return HasMany
     */
    public function images(): HasMany
    {
        return $this->hasMany(Image::class);
    }



}
