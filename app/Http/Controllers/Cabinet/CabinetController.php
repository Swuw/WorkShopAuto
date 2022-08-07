<?php

namespace App\Http\Controllers\Cabinet;

use App\Http\Controllers\Controller;
use App\Models\Car;
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

    public function index() :View
    {

        $user = Auth::user();
        $idUser = Auth::id();
        $cars = Car::where('owner_id', $idUser)->get();



        return view('cabinet.cabinet',
            [
                'user' => $user,
                'cars' => $cars,
                'userId' => $idUser
            ]
        );
    }



}
