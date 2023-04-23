<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    use HasFactory;

    protected $fillable = [
        'beds', 'baths', 'area', 'city', 'code', 'street', 'street_nr', 'price','by_user_id'
    ];

    public function owner() {
        return $this->belongsTo(User::class,'by_user_id');
    }
}
