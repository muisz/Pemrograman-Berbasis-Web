<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\TransactionItem;

class Transaction extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name',
        'deskripsi',
        'tanggal_transaksi',
        'jenis_transaksi',
        'total',
    ];

    public function items()
    {
        return $this->hasMany(TransactionItem::class);
    }
}
