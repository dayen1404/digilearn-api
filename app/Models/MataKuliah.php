<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MataKuliah extends Model
{
    protected $table = 'mata_kuliah';
    protected $fillable = ['nama', 'deskripsi', 'video_link', 'dosen_id'];

    public function dosen(): BelongsTo
    {
        return $this->belongsTo(User::class, 'dosen_id');
    }

    public function pemberitahuan(): HasMany
    {
        return $this->hasMany(Pemberitahuan::class);
    }

    public function materiTugas(): HasMany
    {
        return $this->hasMany(MateriTugas::class);
    }

    public function enroll(): HasMany
    {
        return $this->hasMany(Enroll::class);
    }
}