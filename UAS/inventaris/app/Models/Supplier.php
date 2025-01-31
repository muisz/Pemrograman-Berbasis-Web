<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\TransactionItem;

class Supplier extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'keterangan',
    ];

    public function transaction_items()
    {
        return $this->hasMany(TransactionItem::class);
    }
}
