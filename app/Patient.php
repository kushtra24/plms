<?php

namespace App;

use Carbon\Carbon;

class Patient extends Model{
	
    public function getAgeAttribute(){
    return Carbon::parse($this->attributes['BirthDate'])->age;
}


}//end of class
