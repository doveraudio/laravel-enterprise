@extends('layouts.app')

@section('content')
@auth


<home-component :data.name="{{Auth::user()->name}}"></home-component>
@endauth
@guest
<register-component></register-component>
@endguest
@endsection