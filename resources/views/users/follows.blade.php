@extends('layouts.app')

@section('content')
@forelse ($user->follows as $follow)
<li>{{$follow->username}}</li>
@empty
<p>{{$user->name}} no tiene seguidores</p>
@endforelse
@endsection