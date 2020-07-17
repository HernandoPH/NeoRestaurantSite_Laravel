@extends('layoutRegistro')
@section('title',"Crear Usuario");

@section('content')
    

   <!--     <h1>Crear Usuarios</h1>    
        <form method="POST" action="{{ route('users.store') }} ">
            @csrf
                <label>Nombre</label>
                <input type="text" name="name" id="name">
                <label>Email</label>

                <input type="email" name="email" id="email">
                <label>Pass</label>

                <input type="password" name="password" id="password">

                <button type="submit">Crear Usuario</button>
        </form>-->
       
        <form method="POST" action="{{ url("usuarios/{$user->id}") }}">
            {{ method_field('PUT') }}
            @csrf

        <div class="register  ">
           
    <div class="row mt-6">
        <div class="col-md-3 register-left">
            <img  style="width: 100%;" src="{{asset('img/logo.png')}}" alt=""/>
            <h3>Si ya estas Registrado</h3>
            <span>Haz Login aqui</span>
            <input type="submit" name="" value="Login"/><br/>
        </div>
        <div class="col-md-9 register-right">
            <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Empleado</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Administrador</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <h3 class="register-heading">Editar a: {{$user->name}} </h3>

                    <!--Errores Notificacion-->
                  {{--  @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{$error}} </li>    
                        @endforeach
                        </ul>
                    </div>
                    @endif--}}
                    <!--Errores Notificacion-->
                    
                    <div class="row register-form">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" placeholder=" Nombre *" value="{{$user->name}} " />
                                @if ($errors->has('name'))
                                <p class="errores-registro">{{$errors->first('name')}} </p> 
                                @endif
                            </div>
                         
                            
                            <div class="form-group">
                                <input type="email" name="email" class="form-control" placeholder="Introduce tu Email *" value="{{$user->email}} " />
                                @if ($errors->has('email'))
                                <p class="errores-registro">{{$errors->first('email')}} </p> 
                                @endif
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" class="form-control" placeholder="Contraseña *" value="" />
                                @if ($errors->has('password'))
                                <p class="errores-registro">{{$errors->first('password')}} </p> 
                                @endif
                            </div>
                            <div class="form-group">
                                <input type="text" name="role" class="form-control" placeholder="Puesto/Rol" value="{{$user->name}} " />
                                
                            </div>
                            <div class="form-group">
                                <label style="font-weight: bold;">Género</label>

                                <div class="maxl">
                                    <label class="radio inline"> 
                                        <input type="radio" name="gender" value="male" checked>
                                        <span> Masculino </span> 
                                    </label>
                                    <label class="radio inline"> 
                                        <input type="radio" name="gender" value="female">
                                        <span>Femenino </span> 
                                    </label>
                                </div>
                            </div>
                            <input type="submit" class="btnRegister"  value="Registrarse"/>

                        </div>
                        <div class="col-md-6">
                        
                            
                            <div class="form-group">
                                <div class="Iam">

                                    <p>NeoRestaurant</p>
                                    <b>
                                      <div class="innerIam">
                                        Es calidad<br /> 
                                        Son buenos recuerdos<br />
                                        Es buena organizacion<br />
                                        Es buena comida<br />
                                        Unete a nosotros!
                                        </div>
                                    </b>
                                    
                                    </div>
                            </div>
                       
                            
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <h3  class="register-heading">Como Administrador</h3>
                    <div class="row register-form">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Primer Nombre*" value="" />
                            </div>
                          
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Email *" value="" />
                            </div>
                            <div class="form-group">
                                <input type="text" maxlength="10" minlength="10" class="form-control" placeholder="Telefono *" value="" />
                            </div>


                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Contraseña *" value="" />
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Pin Administrador *" value="" />
                            </div>
                          
                            
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="`Answer *" value="" />
                            </div>
                            <input type="submit" class="btnRegister"  value="Register"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
</form>




<a href="{{ route('users.index') }}">Volver a Listas de Usuarios</a>



@endsection

 

