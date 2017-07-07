@extends('layouts.app')

@section('content')
<div class="row">
<h1 class="col-md-5">{{$user->name}}</h1>
@if(Auth::check())
@if(Auth::user()->username != $user->username)
@if(Auth::user()->isFollowing($user))
<form action="/{{$user->username}}/unfollow" method="post" class="col-md-1">
	{{csrf_field()}}
	@if(session('success'))
	<span class="text-success">{{session('success')}}</span>
	@endif
	<button class="btn btn-danger">Unfollow</button>
</form>

@else

<form action="/{{$user->username}}/follow" method="post" class="col-md-1">
	{{csrf_field()}}
	@if(session('success'))
	<span class="text-success">{{session('success')}}</span>
	@endif
	<button class="btn btn-primary">Follow</button>
</form>
@endif
@endif
@endif
<div>
<div class="row">
	@forelse($user->messages as $message)
	<div class="col-6"> @include('messages.message')</div>
	@empty
	<p>{{$user->name}} no tiene mensajes</p>
	@endforelse
</div>        
@endsection