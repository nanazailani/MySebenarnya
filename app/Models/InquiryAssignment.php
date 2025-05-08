<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InquiryAssignment extends Model
{
    public function inquiry()
    {
        return $this->belongsTo(Inquiry::class);
    }

    public function agency()
    {
        return $this->belongsTo(Agency::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
