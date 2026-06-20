<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Seminar extends Model
{
    protected $primaryKey = 'id_event';

    public function getRouteKeyName()
    {
        return 'id_event';
    }

    protected $fillable = [
        'nama_ormawa',
        'nama_kegiatan',
        'narasumber',
        'tanggal',
        'jam',
        'lokasi',
        'kuota'
    ];
}