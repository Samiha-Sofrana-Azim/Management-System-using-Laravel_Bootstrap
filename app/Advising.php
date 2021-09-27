<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Advising extends Model
{
    function myStudent()
    {
        return $this->hasmany('App\Student','id','CNE');
        return $this->hasmany('model_path','f.key','l.key');
    }

    
// function myStudent(){
//         return $this->hasOne('App\Student','CNE','id');
//     }
}