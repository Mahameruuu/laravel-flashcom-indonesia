<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mentor extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'position',
        'address',
        'gender',
        'phone_number',
    ];

    public function mentor()
    {
        return $this->belongsTo(Mentor::class);
    }
}
