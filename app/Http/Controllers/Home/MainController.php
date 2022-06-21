<?php

declare(strict_types=1);

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class MainController extends Controller
{



    public function index() :View
    {

        if (Auth::check())
        {

        }

        return view('home.main');
    }

}
