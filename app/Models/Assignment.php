<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assignment extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'street', 'housenumber', 'postal_code', 'city', 'deadline', 'status', 'budget', 'handyman_id'];

    public function handyman()
    {
        return $this->belongsTo(User::class, 'handyman_id');
    }
}
