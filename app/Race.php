<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Race extends Model
{
    public function User() {
        return $this->belongsTo(User::class);
    }

    public function Vehicle() {
        return $this->belongsTo(Vehicle::class);
    }

    public function Track() {
        return $this->belongsTo(Track::class);
    }
}
