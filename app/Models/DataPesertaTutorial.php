<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class DataPesertaTutorial extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function kelas(): HasMany
    {
        return $this->hasMany(PenjadwalanKelas::class);
    }

    public function penjadwalan(): HasMany
    {
        return $this->hasMany(PenjadwalanTutorial::class);
    }
}
