<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Nilai;

class MateriTugas extends Model
{
    protected $table = 'materi_tugas';
    protected $fillable = ['mata_kuliah_id', 'tipe', 'judul', 'deskripsi', 'tanggal_upload'];

    public function mataKuliah(): BelongsTo
    {
        return $this->belongsTo(MataKuliah::class);
    }

    public function nilai(): HasMany
    {
        return $this->hasMany(Nilai::class, 'tugas_id');
    }
}
