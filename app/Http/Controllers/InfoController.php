<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Info;

class InfoController extends Controller
{
    function index(){
        return Info::find(1)->myAdvising;
    }

  }
