@extends('layouts.main')


@section('content')

 <div class="container-lg" style="margin: 0 auto;">

    <h2 class="text-center mt-5" style="font-weight:bold; color: orangered">SuperLiga - Denmark</h2>

    <div class="row mt-5">
        @if(isset($response['data']))
        @foreach ($response['data'] as $match)
            
        
        <div class="col-lg-4 col-md-4 col-sm-12 text-center mb-3 mx-5">
            <div class="card" style="width:28rem;">
                <img src="" alt="">
            <div class="card-body">
                <div class="card-title"><img src="{{$match['teams']['home']['img']}}" style="width:50px;" alt=""><b>{{$match['teams']['home']['name']}}</b> {{$match['scores']['home_score']}} - <img src="{{$match['teams']['away']['img']}}" style="width:50px;" alt=""><b>{{$match['teams']['away']['name']}}</b> {{$match['scores']['away_score']}}</div> 
                
               
                <div class="card-text">{{$match['league']['name']}} - {{$match['league']['country_name']}}</div>
                <div class="card-text">{{$match['status_name']}}</div>
                <div class="card-text">{{$match['time']['time']}} {{$match['time']['timezone']}}</div>
            </div>

            </div>
        </div>

        @endforeach

        @else
        <h2 class="text-center mt-5" style="font-weight:bold; color: green">There are No Matches!!!</h2>

        @endif
        
    </div>
    
 </div>
 
@endsection