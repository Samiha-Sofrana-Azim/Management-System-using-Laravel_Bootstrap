<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Advising;

class AdvisingController extends Controller
{
    function index(){
        return Advising::find(1)->myStudent;
    }
//     function index(){
//         return Advising::find(2)->myStudent;
//     }
  }
