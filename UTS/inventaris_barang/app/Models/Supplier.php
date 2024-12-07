<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Barang;

class Supplier extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
    ];

    public function barangs() {
        return $this->hasMany(Barang::class);
    }
}
