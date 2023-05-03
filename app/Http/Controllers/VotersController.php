<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VotersController extends Controller
{
    function index(){
        return view(  'core/voters.index');
    }
}
