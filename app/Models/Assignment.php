<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assignment extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'status', 'address', 'city', 'date', 'price', 'handyman_id'];

    public function handyman()
    {
        return $this->belongsTo(User::class, 'handyman_id');
    }
}
