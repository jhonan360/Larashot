@extends('layouts.app')

@section('content')
<div class="jumbotron text-center">
<h1>WELCOME TO {{ config('app.name')}}</h1>
 <center><nav class="nav">
   <ul class="nav nav-pills">
    <li class="nav-item">
      <a class="nav-link"href="/">Home</a>
    </li>
    <li>
      <a class="nav-link" href="/about">About me</a>
    </li>
  </ul>
</nav></center>
</div>
<div class="row">
  <form action="/messages/create" method="post">
    <div class="form-group @if ($errors->has('message')) has-danger @endif">
      {{csrf_field()}}
      <input type="text" name="message" class="form-control" placeholder="¿Qué estás pensando?">
      @if ($errors->has('message'))
      @foreach($errors->get('message') as $error)
      <div class="form-control-feedback">{{$error}}</div>
      @endforeach
      @endif
    </div>
  </form>
</div>
<div class="row">
  @forelse($messages as $message)
  @include('messages.message')
  @empty
  <p>No hay mensajes</p>
  @endforelse
  @if (count($messages))
  <div class="mt-2 mx-auto">
    {{$messages->links('pagination::bootstrap-4')}}
  </div>
  @endif
</div>

@endsection