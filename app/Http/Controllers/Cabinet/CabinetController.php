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
        $cars = $works = $worksMaster = $carsForMaster = [];
        if($role === 'user'){
            $cars = Car::where('owner_id', $idUser)->get();
            $carsArray = $cars->toArray();
            foreach ($carsArray as $carItem){
                $idCar = $carItem['id'];
                $works["$idCar"] = Work::where('id_car', $idCar)->get();
            }
        } elseif ($role === 'master') {
            $worksMaster = Work::where('id_master', $idUser)->orderBy('updated_at', 'DESC')->limit(5)->get();
            foreach($worksMaster as $workM){
                $carsForMaster[$workM['id_car']] = Car::where('id', $workM['id_car'])->get();
            }
        }


        return view('cabinet.cabinet',
            [
                'user' => $user,
                'cars' => $cars,
                'works' => $works,
                'worksMaster' => $worksMaster,
                'carsForMaster' => $carsForMaster,
                'userId' => $idUser,
                'role' => $role,
                'errorCar' => ''
            ]
        );
    }

}
