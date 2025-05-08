<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Agency extends Model
{
    public function inquiryAssignments()
    {
        return $this->hasMany(InquiryAssignment::class);
    }
}
