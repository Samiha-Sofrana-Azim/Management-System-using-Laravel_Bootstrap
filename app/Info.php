<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Info extends Model
{
    //

    // function myAdvising()
    // {
    //     return $this->hasmany('App\Advising','id','user_id');
    //     return $this->hasmany('model_path','f.key','l.key');
    // }
    function myAdvising()
    {
        return $this->belongstoMany('App\Advising');
        
    }

    

}
