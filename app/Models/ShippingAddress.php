<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShippingAddress extends Model
{
    use HasFactory;

    protected $table = 'shippingaddress';

    protected $fillable = [
        'users_id',
        'citymun',
        'szp',
        'housenumber',
        'landmark',
        'contact',
    ];


    public function users()
    {
        return $this->belongsTo(Users::class, 'users_id', 'citymun', 'szp', 'housenumber', 'landmark', 'contact',);
    }
}
