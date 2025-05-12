<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Nilai extends Model
{
    protected $table = 'nilai';
    protected $fillable = ['tugas_id', 'mahasiswa_id', 'nilai'];

    public function materiTugas(): BelongsTo
    {
        return $this->belongsTo(MateriTugas::class, 'tugas_id');
    }

    public function mahasiswa(): BelongsTo
    {
        return $this->belongsTo(User::class, 'mahasiswa_id');
    }
}