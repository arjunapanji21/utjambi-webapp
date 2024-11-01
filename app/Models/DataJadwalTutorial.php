<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class DataJadwalTutorial extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function penjadwalan(): HasMany
    {
        return $this->hasMany(PenjadwalanTutorial::class);
    }
}
