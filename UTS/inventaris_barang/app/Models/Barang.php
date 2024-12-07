<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Kategori;
use App\Models\Supplier;

class Barang extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'kategori_id',
        'supplier_id',
    ];

    public function kategori() {
        return $this->belongsTo(Kategori::class);
    }

    public function supplier() {
        return $this->belongsTo(Supplier::class);
    }
}
