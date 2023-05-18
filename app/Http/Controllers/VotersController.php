<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VotersController extends Controller
{
    function index(){
        return view(  'core/voters.index');
    }
    function home(){
        return view(  'core/voters.home');
    }
}
