<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PenjadwalanKelas extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function tutorial(): BelongsTo
    {
        return $this->belongsTo(PenjadwalanTutorial::class, 'penjadwalan_tutorial_id');
    }

    public function peserta(): BelongsTo
    {
        return $this->belongsTo(DataPesertaTutorial::class, 'data_peserta_tutorial_id');
    }

    public function lokasi(): BelongsTo
    {
        return $this->belongsTo(DataLokasiTutorial::class, 'kode_lokasi', 'kode_lokasi');
    }
}
