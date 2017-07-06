@extends('layouts/main')



@section('container')
<div class="container">
<div class="col 12">

@if($request->session()->has('message'))
    @include('layouts/success')
@endif

    <form class="col s12 l8" role="form" method="POST" action="/edit">
        {{ csrf_field() }}
        <br />
        <div class="row">

            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">

                <div class="input-field col s6">
                    <i class="material-icons prefix">account_circle</i>
                    <input id="name" type="text" class="form-control" name="name" value="{{ Auth::user()->name }}" required autofocus>
                    <label for="name" class="col-md-4 control-label">Nombre</label>


                    @if ($errors->has('name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                    @endif
                </div>
            </div>


            <div class="form-group{{ $errors->has('surname') ? ' has-error' : '' }}">
                <div class="input-field col s6">
                    <input id="surname" type="text" class="form-control" name="surname" value="{{ Auth::user()->surname }}" placeholder="Placeholder" required >
                    <label for="surname" class="col-md-4 control-label">Apellidos</label>


                    @if ($errors->has('surname'))
                    <span class="help-block">
                        <strong>{{ $errors->first('surname') }}</strong>
                    </span>
                    @endif
                </div>
            </div>
        </div>

        <div class="row">

            <div class="form-group{{ $errors->has('user') ? ' has-error' : '' }}">
                <div class="input-field col s12">
                    <i class="material-icons prefix">assignment_ind</i>
                    <input id="user" type="text" class="form-control" name="user" value="{{ Auth::user()->user }}" required >
                    <label for="user" class="col-md-4 control-label">Nombre de usuario</label>


                    @if ($errors->has('user'))
                    <span class="help-block">
                        <strong>{{ $errors->first('user') }}</strong>
                    </span>
                    @endif
                </div>
            </div>
        </div>

        <div class="row">

            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <div class="input-field col s12">
                    <i class="material-icons prefix">email</i>
                    <input id="email" type="email" class="form-control" name="email" value="{{ Auth::user()->email }}" required>
                    <label for="email">Email</label>


                    @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                    @endif
                </div>
            </div>
        </div>

        <div class="row">

            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <div class="input-field col s6">
                    <i class="material-icons prefix">lock</i>
                    <input id="password" type="password" class="form-control" name="password" required>
                    <label for="password" class="col-md-4 control-label">Contraseña</label>


                    @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                    @endif
                </div>
            </div>
            <div class="form-group">
                <div class="input-field col s6">
                    <label for="password-confirm" class="col-md-4 control-label">Repetir contraseña</label>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="form-group">
                <div class="col-md-12 col-md-offset-4">
                    <button type="submit" class="btn btn-primary">
                        Enviar
                    </button>
                </div>
            </div>
        </div>
    </form>
        </div>
</div>


@endsection
