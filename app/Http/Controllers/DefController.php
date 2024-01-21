<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;

class DefController extends Controller
{
    public function __construct()
    {
//        dd(Auth::user());
    }

    public function index(){
        $data = \request()->validate([
            'name' => 'string',
            'login' => 'string'
        ]);
        return User::all();
    }
}
