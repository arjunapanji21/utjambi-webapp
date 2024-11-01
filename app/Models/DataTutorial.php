<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class DataTutorial extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function penjadwalan(): HasMany
    {
        return $this->hasMany(PenjadwalanTutorial::class);
    }

    public function lokasi(): BelongsTo
    {
        return $this->belongsTo(DataLokasiTutorial::class, 'kode_lokasi', 'kode_lokasi');
    }
}
