<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InquiryProgress extends Model
{
    public function inquiry()
    {
        return $this->belongsTo(Inquiry::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
