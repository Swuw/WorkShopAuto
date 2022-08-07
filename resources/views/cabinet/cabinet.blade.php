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
                    You cars:
                    @foreach( $cars as $car)
                    <div class="car">{{ $car->manufacturer }} {{$car->year}}</div><br>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

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
            <input type="text" id="year" name="year" required>
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

@endsection


