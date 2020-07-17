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
                            <a style="margin-left:50px" href="{{ route('users.editar',['id'=>$user->id]) }}">Editar Usuario {{$user->name}} </a>
                            <form action="{{ route('users.destroy',$user)}}" method="POST">
                                {{csrf_field()}}
                                {{method_field('DELETE')}}
                                <button type="submit">ELIMINAR</button>
                            </form>

                        </li>
                    @endforeach
                </ul>
        @endempty
  

@endsection

 

