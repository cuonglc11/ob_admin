<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wallets extends Model
{
    use HasFactory;
    protected $table =  'watllets';
    protected $fillable = [
        'status','blance','customer_id','private_key'
    ];
    public function user()
    {
        return $this->belongsTo(User::class, 'customer_id', 'id')->select(['id', 'name' ,'email']);
    }
}
