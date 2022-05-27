<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'name',
        'quantity',
        'booked',
    ];
    public function bookings(){
    return $this->belongsTo(Booking::class, 'id', 'post_id');
}
}
