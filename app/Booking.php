<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $table = 'bookings';
    
    protected $guarded = ['id'];
    
    public function getArrivalDateAttribute($value)
    {
        $date = explode('-', $value);
        return $date[2].'-'.$date[1].'-'.$date[0];
    }
    
    public function getDepartureDateAttribute($value)
    {
        $date = explode('-', $value);
        return $date[2].'-'.$date[1].'-'.$date[0];
    }
    
    public function setArrivalDateAttribute($value)
    {
        $date = explode('/', $value);
        $this->attributes['arrival_date'] = $date[2].'-'.$date[1].'-'.$date[0];
    }
    
    public function setDepartureDateAttribute($value)
    {
        $date = explode('/', $value);
        $this->attributes['departure_date'] = $date[2].'-'.$date[1].'-'.$date[0];
    }
}
