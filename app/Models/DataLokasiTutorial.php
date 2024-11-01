<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class DataLokasiTutorial extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    
    public function tutorial(): HasMany
    {
        return $this->hasMany(DataTutorial::class);
    }

    public function penjadwalan(): HasMany
    {
        return $this->hasMany(PenjadwalanTutorial::class);
    }

    public function kelas(): HasMany
    {
        return $this->hasMany(PenjadwalanKelas::class);
    }
}
