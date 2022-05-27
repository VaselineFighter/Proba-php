<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'post_id',
        'booked',
    ];
    public function quantitys(){
        $this->hasMany(Post::all(),'post_id','id');
    }

}
