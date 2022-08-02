<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Image extends Model
{
    use HasFactory;

    protected $fillable = [
        'file_name',
        'gallery_id'
    ];

    /**
     * Обратная связь с таблицей gallery один ко многим
     *
     * @return BelongsTo
     */
    public function gallery():BelongsTo {
        return $this->belongsTo(Gallery::class);
    }
}
