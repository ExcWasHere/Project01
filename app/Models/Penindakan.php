<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class Penindakan extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'penindakan';
    protected $primaryKey = 'no_sbp';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'no_sbp',
        'penyidikan_id',
        'tanggal_sbp',
        'lokasi_penindakan',
        'pelaku',
        'uraian_bhp',
        'jumlah',
        'kemasan',
        'perkiraan_nilai_barang',
        'potensi_kurang_bayar',
        'status',
        'created_by',
        'updated_by'
    ];

    protected $casts = [
        'tanggal_sbp' => 'datetime',
        'status' => 'string',
        'perkiraan_nilai_barang' => 'decimal:2',
        'potensi_kurang_bayar' => 'decimal:2'
    ];

    public function penyidikan(): BelongsTo
    {
        return $this->belongsTo(Penyidikan::class, 'penyidikan_id', 'no_spdp');
    }

    public function creator(): BelongsTo
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function updater(): BelongsTo
    {
        return $this->belongsTo(User::class, 'updated_by');
    }

    public function isProcessable(): bool
    {
        return $this->status === 'open';
    }

    public function markAsProcessed(): void
    {
        $this->status = 'processed';
        $this->save();
    }

    public function intelijen()
    {
        return $this->belongsTo(Intelijen::class, 'no_nhi', 'no_nhi');
    }

    public function dokumen()
    {
        return $this->hasMany(Dokumen::class, 'reference_id', 'no_sbp')->where('module', 'penindakan');
    }
}