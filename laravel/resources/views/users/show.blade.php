@extends('layout')
@section('title',"Usuario {$user} ");

@section('content')

<h1 class="mt-5"> Detalles del Usuario
</h1>
<p >Nombre de Usuario-> {{$user->name}} </p>
<p>Email-> {{$user->email}} </p>
<a href="{{ route('users.index') }}">Volver a Listas de Usuarios</a>
<a style="margin-left:50px" href="{{ route('users.editar',['id'=>$user->id]) }}">Editar Usuario {{$user->name}} </a>





@endsection









