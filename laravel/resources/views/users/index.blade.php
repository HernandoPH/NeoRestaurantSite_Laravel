@extends('layout')
@section('title',"Usuarios");

@section('content')
    

        <h1>Usuarios</h1>
        <h2>{{$title}}</h2>
    
        @empty($users)
                <h2>NO HAY USUARIOS</h2>
            @else
                <ul>
                    @foreach($users as $user)
                        <li>{{$user->name}}
                            <a href="{{ route('users.show', ['id' => $user]) }}">Ver detalles</a>
                        </li>
                    @endforeach
                </ul>
        @endempty
  

@endsection

 

