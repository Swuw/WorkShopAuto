@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        {{ __('You are logged in!') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container user">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div>
                    Hello, {{ $user->name }} {{$user->second_Name}}!
                </div>
            </div>
        </div>
    </div>

    <div class="container auto">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div>
                    @if ( count($cars) >= 2 && $role == 'user')
                    You cars:
                    @elseif ($role == 'user')
                    You car:
                    @endif
                    @foreach( $cars as $car )
                    <div class="car">{{ $car->manufacturer }} {{ $car->model }}, {{$car->year}}</div><br>
                        @if(!$works["$car->id"]->isEmpty())
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th scope="col">Date</th>
                                        <th scope="col">Mileage</th>
                                        <th scope="col">Type of work</th>
                                        <th scope="col">Descriptions job</th>
                                        <th scope="col">Recommendation</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                            @foreach($works["$car->id"] as $work)
                                        <tr>
                                            <th scope="row">{{ $work->created_at}}</th>
                                            <td>{{ $work->mileage}}</td>
                                            <td>{{ $work->type_of_work}}</td>
                                            <td>{{ $work->descriptions_job}}</td>
                                            <td>{{ $work->recommendation}}</td>
                                        </tr>
                            @endforeach
                                    </tbody>
                                </table>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    @if($worksMaster)
        <table class="table table-bordered">
            <thead>
            <tr>
                <th scope="col">Date</th>
                <th scope="col">CarInfo</th>
                <th scope="col">Mileage</th>
                <th scope="col">Type of work</th>
                <th scope="col">Descriptions job</th>
                <th scope="col">Remark of work</th>
                <th scope="col">Recommendation</th>
                <th scope="col">Spend time(h)</th>
            </tr>
            </thead>
            <tbody>
                @foreach($worksMaster as $workM)
                <tr>
                    <th scope="row">{{ $workM->created_at }},<br> {{ $workM->updated_at }}</th>
                    <td>{{ $carsForMaster[$workM->id_car][0]['manufacturer']}},<br> {{ $carsForMaster[$workM->id_car][0]['model']}},<br> {{ $carsForMaster[$workM->id_car][0]['year']}},<br> {{ $carsForMaster[$workM->id_car][0]['vin']}}</td>
                    <td>{{ $workM->mileage}}</td>
                    <td>{{ $workM->type_of_work}}</td>
                    <td>{{ $workM->descriptions_job}}</td>
                    <td>{{ $workM->remark_of_work}}</td>
                    <td>{{ $workM->recommendation}}</td>
                    <td>{{ $workM->spend_time}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif

    @if($errorCar)
    <div class="error">
        <div class="error-car">{{ $errorCar }}</div>
    </div>
    @endif

    @if ( count($cars) <= 2 && $role == 'user')
    <div class="container-add ">
        <div class="add-car">
            <button class="add-car-new">Add new car</button>
        </div>
        <form class="add-car-form hide" action="/addCar" method="GET">
            <input type="hidden" name="owner_id" value="{{$userId}}">
            <label for="manufacturer">Choose manufactured*</label>
            <select name="manufacturer" id="manufacturer" required>
                <option value="Abarth">Abarth</option>
                <option value="Acura">Acura</option>
                <option value="Alfa Romeo">Alfa Romeo</option>
                <option value="Aston Martin">Aston Martin</option>
                <option value="Audi">Audi</option>
                <option value="Bentley">Bentley</option>
                <option value="BMW">BMW</option>
                <option value="Buick">Buick</option>
                <option value="Cadillac">Cadillac</option>
                <option value="Chevrolet">Chevrolet</option>
                <option value="Chrysler">Chrysler</option>
                <option value="Citroen">Citroen</option>
                <option value="Dacia">Dacia</option>
                <option value="Dodge">Dodge</option>
                <option value="Ferrari">Ferrari</option>
                <option value="Fiat">Fiat</option>
                <option value="GMC">GMC</option>
                <option value="Honda">Honda</option>
                <option value="Hummer">Hummer</option>
                <option value="Hyundai">Hyundai</option>
                <option value="Infiniti">Infiniti</option>
                <option value="Isuzu">Isuzu</option>
                <option value="Jaguar">Jaguar</option>
                <option value="Jeep">Jeep</option>
                <option value="Kia">Kia</option>
                <option value="Lamborghini">Lamborghini</option>
                <option value="Lancia">Lancia</option>
                <option value="Lancia">Lancia</option>
                <option value="Land Rover">Land Rover</option>
                <option value="Lexus">Lexus</option>
                <option value="Lincoln">Lincoln</option>
                <option value="Lotus">Lotus</option>
                <option value="Maserati">Maserati</option>
                <option value="Mazda">Mazda</option>
                <option value="Mercedes-Benz">Mercedes-Benz</option>
                <option value="Mercury">Mercury</option>
                <option value="Mini">Mini</option>
                <option value="Mitsubishi">Mitsubishi</option>
                <option value="Nissan">Nissan</option>
                <option value="Opel">Opel</option>
                <option value="Peugeot">Peugeot</option>
                <option value="Pontiac">Pontiac</option>
                <option value="Porsche">Porsche</option>
                <option value="Ram">Ram</option>
                <option value="Renault">Renault</option>
                <option value="Saab">Saab</option>
                <option value="Saturn">Saturn</option>
                <option value="Scion">Scion</option>
                <option value="Seat">Seat</option>
                <option value="Skoda">Skoda</option>
                <option value="Smart">Smart</option>
                <option value="SsangYong">SsangYong</option>
                <option value="Subaru">Subaru</option>
                <option value="Suzuki">Suzuki</option>
                <option value="Tesla">Tesla</option>
                <option value="Toyota">Toyota</option>
                <option value="Volkswagen">Volkswagen</option>
                <option value="volvo">Volvo</option>
                <option value="wiesmann">Wiesmann</option>
            </select>
            <br>
            <label for="model">Model*:</label>
            <input type="text" id="model" name="model" required>
            <br>
            <label for="vin">VIN*:</label>
            <input type="text" id="vin" name="vin" required>
            <br>
            <label for="year">Year*:</label>
            <select name="year" id="year" required>
                @if (date('Y'))
                    @for ($i = 1960; $i <= date('Y'); $i++)
                        <option value="{{$i}}">{{$i}}</option>
                    @endfor
                @endif
            </select>
            <br>
            <label for="fuel">Fuel*:</label>
            <select name="fuel" id="fuel" required>
                <option value="gasoline">Gasoline</option>
                <option value="diesel">Diesel</option>
                <option value="ethanol">Ethanol</option>
                <option value="lpg">LPG</option>
                <option value="cng">CNG</option>
                <option value="electric">Electric</option>
            </select>
            <br>
            <label for="engineName">Name engine:</label>
            <input type="text" id="engineName" name="engineName">
            <br>
            <label for="engineValue">Engine value:</label>
            <input type="text" id="engineValue" name="engineValue" >
            <br>
            <label for="transmission">Transmission:</label>
            <select name="transmission" id="transmission" required>
                <option value="auto">Auto</option>
                <option value="manual">Manual</option>
            </select>
            <br>
            <label for="typeTransmission">Model Transmission:</label>
            <input type="text" id="typeTransmission" name="typeTransmission" >
            <br>
            <label for="moreInfo">More info:</label>
            <input type="text" id="moreInfo" name="moreInfo" >
            <br>
            <input type="submit" value="Submit">
        </form>
    </div>
    @elseif($role != 'user')
        <div class="container-add "></div>
    @else
    <div class="container-add ">
        <div>If your need to add new car please contact with Administrator</div>
    </div>
    @endif
@endsection


