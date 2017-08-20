<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Carbon\Carbon;

class Patient extends Model
{
    public function getAgeAttribute()
{
    return Carbon::parse($this->attributes['BirthDate'])->age;
}
}
