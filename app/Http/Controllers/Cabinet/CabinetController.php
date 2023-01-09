<?php

namespace App\Http\Controllers\Cabinet;

use App\Http\Controllers\Controller;
use App\Models\Car;
use App\Models\Work;
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
        $role = $user->getAttribute('role');
        $idUser = Auth::id();
        $cars = $works = [];
        if($role === 'user'){
            $cars = Car::where('owner_id', $idUser)->get();
            $carsArray = $cars->toArray();
            foreach ($carsArray as $carItem){
                $idCar = $carItem['id'];
                $works["$idCar"] = Work::where('id_car', $idCar)->get();
            }
        } elseif ($role === 'master') {

        }


        return view('cabinet.cabinet',
            [
                'user' => $user,
                'cars' => $cars,
                'works' => $works,
                'userId' => $idUser,
                'role' => $role,
                'errorCar' => ''
            ]
        );
    }

}
