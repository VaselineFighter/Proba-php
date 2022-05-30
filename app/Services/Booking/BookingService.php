<?php
namespace App\Services\Booking;

use App\Models\Booking;

class BookingService implements BookingServiceInterface
{
    public function storeBooking($data)
    {
        $booked = $data['booked'];   
        foreach ($booked as $book){
            Booking::firstOrCreate([
                'user_id'=>$data['user_id'],
                'post_id'=>$data['post_id'],
                'booked'=>$book
            ]);
        }
    }
}
