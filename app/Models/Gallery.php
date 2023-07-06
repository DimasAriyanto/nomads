<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Gallery extends Model
{
    use HasFactory;

    protected $table = 'galleries';

    protected $fillable = [
        'image',
        'trevel_package_id'
    ];

    public function trevelPackage(): BelongsTo
    {
        return $this->belongsTo(TrevelPackage::class);
    }
}
