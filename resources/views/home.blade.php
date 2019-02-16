@extends('layouts.app')

@section('content')
@auth
WHY!?
<home-component></home-component>
@endauth
@guest
{{Auth::user()->name}}
<register-component></register-component>
@endguest
@endsection
