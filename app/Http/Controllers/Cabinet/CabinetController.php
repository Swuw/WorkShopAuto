<?php

namespace App\Http\Controllers\Cabinet;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;


class CabinetController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request) :View
    {

//        $user = Auth::user()->getAttributes();

        $user = $request->user()->getAttributes();



        dd($user);

        return view('cabinet.cabinet');
    }

}
