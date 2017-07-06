@extends('layouts/main')



@section('container')
<div class="container">
<div class="col 12">

    <form class="col s12 l8" role="form" method="POST" action="/tienda/add">
        {{ csrf_field() }}
        <div class="row">

            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">

                <div class="input-field">
                    <i class="material-icons prefix">store</i>
                    <input id="name" type="text" class="form-control" name="name" required autofocus>
                    <label for="name" class="col-md-4 control-label">Nombre de la tienda</label>


                    @if ($errors->has('name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                    @endif
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
