
  @extends('Layouts/app')

    @section('title', env('APP_NAME'))
    
  @section('content')

  <img class ="image" src ="image/tartelete.jpg" alt ="tartelete">

  <p>soyez les bien venu sur mon blog de cuisine  pour plus de detail <a  href="{{route('pContacte')}}" >contactez nous</a>  <p/>
  {{env('APP_NAME')}}
  {{config('app.name')}}  
  @endsection ('content')
