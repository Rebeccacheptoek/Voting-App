<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdministratorController extends Controller
{
    function index()
    {
        return view('core/admin.index');
    }
}
