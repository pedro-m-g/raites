@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">
              Configuración
            </div>

            <div class="panel-body">
                <form method="POST">
                  {{ csrf_field() }}

                  <div class="form-group">
                    <label>Situación actual</label>
                    
                    <div class="radio">
                      <label>
                        <input type="radio" name="role" value="user"{{ $user->role == 'user' ? ' checked' : '' }}>
                        Requiero apoyo con el transporte
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="role" value="supporter" {{ $user->role == 'supporter' ? ' checked' : '' }}>
                        Ofrezco apoyo con el transporte
                      </label>
                    </div>
                  </div>
                  <div class="form-group">
                    <button class="btn btn-primary" type="submit">Guardar</button>
                  </div>
                </form>
            </div>
        </div>
    </div>
  </div>
</div>
@endsection