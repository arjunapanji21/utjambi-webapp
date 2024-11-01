<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PenjadwalanTutorial extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function tutorial(): BelongsTo
    {
        return $this->belongsTo(DataTutorial::class, 'kode_tutorial', 'kode_tutorial');
    }

    public function jadwal(): BelongsTo
    {
        return $this->belongsTo(DataJadwalTutorial::class, 'kode_jadwal', 'kode_jadwal');
    }

    public function peserta(): HasMany
    {
        return $this->hasMany(PenjadwalanKelas::class);
    }

    public function tutor(): BelongsTo
    {
        return $this->belongsTo(DataTutor::class, 'kode_tutor', 'kode_tutor');
    }
}
