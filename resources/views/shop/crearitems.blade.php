@extends('layouts.main')

@section('container')
<div class="container">
<div class="col 12">
    <form class="col s12 l8" role="form" method="POST" action="/additems">
        {{ csrf_field() }}
        <div class="row">

            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                <div class="input-field col s12">
                    <i class="material-icons prefix">account_circle</i>
                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
                    <label for="name" class="col-md-4 control-label">Nombre</label>


                    @if ($errors->has('name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                    @endif
                </div>
            </div>
        </div>

        <div class="row">
            <div class="form-group{{ $errors->has('price') ? ' has-error' : '' }}">
                <div class="input-field col s12">
                    <i class="material-icons prefix">euro_symbol</i>
                    <input id="price" type="text" class="form-control" name="price" value="{{ old('price') }}" required >
                    <label for="price" class="col-md-4 control-label">Precio</label>


                    @if ($errors->has('price'))
                    <span class="help-block">
                        <strong>{{ $errors->first('price') }}</strong>
                    </span>
                    @endif
                </div>
            </div>
        </div>
        <div class="row">
            <div class="form-group{{ $errors->has('currency') ? ' has-error' : '' }}">
              <div class="input-field col s12">
                <select name="currency" lass="form-control">
                  <option value="€">Euros €</option>
                  <option value="$">Dolares $</option>
                </select>
                <label>Moneda</label>
              </div>
            </div>
        </div>
        <div class="row">
            <div class="form-group{{ $errors->has('tag') ? ' has-error' : '' }}">
                <div class="input-field col s12">
                    <i class="material-icons prefix">email</i>
                    <input id="tag" type="text" class="form-control" name="tag" value="{{ old('tag') }}" required>
                    <label for="tag">Categoria</label>


                    @if ($errors->has('tag'))
                    <span class="help-block">
                        <strong>{{ $errors->first('tag') }}</strong>
                    </span>
                    @endif
                </div>
            </div>
        </div>
        <div class="row">
            <div class="form-group{{ $errors->has('stock') ? ' has-error' : '' }}">
                <div class="input-field col s12">
                    <i class="material-icons prefix">email</i>
                    <input id="stock" type="text" class="form-control" name="stock" value="{{ old('stock') }}" required>
                    <label for="stock">Cantidad en el almacen</label>


                    @if ($errors->has('stock'))
                    <span class="help-block">
                        <strong>{{ $errors->first('stock') }}</strong>
                    </span>
                    @endif
                </div>
            </div>
        </div>
        <div class="row">
            <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
                <div class="input-field col s12">
                    <i class="material-icons prefix">description</i>
                    <input id="image" type="text" class="form-control" name="image" value="{{ old('image') }}" required>
                    <label for="image">Imagen (link externo)</label>


                    @if ($errors->has('image'))
                    <span class="help-block">
                        <strong>{{ $errors->first('image') }}</strong>
                    </span>
                    @endif
                </div>
            </div>
        </div>
        <div class="row">
            <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                <div class="input-field col s12">
                    <i class="material-icons prefix">description</i>
                    <textarea id="description" name="description" class="materialize-textarea" data-length="250"></textarea>
                    <label for="description">Textarea</label>
                    @if ($errors->has('description'))
                    <span class="help-block">
                        <strong>{{ $errors->first('description') }}</strong>
                    </span>
                    @endif
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