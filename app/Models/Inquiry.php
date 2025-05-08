<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inquiry extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function progressUpdates()
    {
        return $this->hasMany(InquiryProgress::class);
    }

    public function assignment()
    {
        return $this->hasOne(InquiryAssignment::class);
    }
}
