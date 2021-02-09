@extends('trabajoFCT.layout')

@section('title', 'FormularioEmpresas')

@section('content')

<div class="container">
    <!-- Formulario para datos de Empresas -->
    <form method="POST" action="{{ route('empresas') }}">
      @csrf
      <div class="form-group row">
        <label for="nombre" class="col-sm-1 col-form-label"><b>{{ __('Name') }}</b></label>
        <div class="col-sm-10">
          <input type="text" name="nombre" class="form-control" id="nombre" placeholder="Jose antonio" value="{{ old('nombre') }}"><!-- Meter required en los input -->
          {!! $errors->first('nombre', '<small>:message</small>') !!}
        </div>
      </div>

      <div class="form-group row">
        <label for="cif" class="col-sm-1 col-form-label"><b>{{ __('CIF') }}</b></label>
        <div class="col-sm-10">
          <input type="text" name="cif" class="form-control" id="cif" placeholder="ejemplo" value="{{ old('cif') }}">
          {!! $errors->first('cif', '<small>:message</small>') !!}
        </div>
      </div>

      <div class="form-group row">
        <label for="direccion" class="col-sm-1 col-form-label"><b>{{ __('Direction') }}</b></label>
        <div class="col-sm-10">
          <input type="text" name="direccion" class="form-control" id="direccion" placeholder="calle manacor" value="{{ old('direccion') }}">
          {!! $errors->first('direccion', '<small>:message</small>') !!}
        </div>
      </div>

      <div class="form-group row">
        <label for="poblacion" class="col-sm-1 col-form-label"><b>{{ __('Population') }}</b></label>
        <div class="col-sm-10">
          <input type="text" name="poblacion" class="form-control" id="poblacion" placeholder="Palma" value="{{ old('poblacion') }}">
          {!! $errors->first('poblacion', '<small>:message</small>') !!}
        </div>
      </div>

      <div class="form-group row">
        <label for="cp" class="col-sm-1 col-form-label"><b>{{ __('CP') }}</b></label>
        <div class="col-sm-10">
          <input type="number" name="cp" class="form-control" id="cp" placeholder="07014" value="{{ old('cp') }}">
          {!! $errors->first('cp', '<small>:message</small>') !!}
        </div>
      </div>

      <div class="form-group row">
        <label for="telefono1" class="col-sm-1 col-form-label"><b>{{ __('Phone1') }}</b></label>
        <div class="col-sm-10">
          <input type="number" name="telefono1" class="form-control" id="telefono1" placeholder="971212343" value="{{ old('telefono1') }}">
          {!! $errors->first('telefono1', '<small>:message</small>') !!}
        </div>
      </div>

      <div class="form-group row">
        <label for="telefono2" class="col-sm-1 col-form-label"><b>{{ __('Phone2') }}</b></label>
        <div class="col-sm-10">
          <input type="number" name="telefono2" class="form-control" id="telefono2" placeholder="606235476" value="{{ old('telefono2') }}">
          {!! $errors->first('telefono2', '<small>:message</small>') !!}
        </div>
      </div>

      <div class="form-group row">
        <label for="fax" class="col-sm-1 col-form-label"><b>{{ __('Fax') }}</b></label>
        <div class="col-sm-10">
          <input type="number" name="fax" class="form-control" id="fax" placeholder="656345423" value="{{ old('fax') }}">
          {!! $errors->first('fax', '<small>:message</small>') !!}
        </div>
      </div>

      <div class="form-group row">
        <label for="correo" class="col-sm-1 col-form-label"><b>{{ __('E-Mail Address') }}</b></label>
        <div class="col-sm-10">
          <input type="email" name="correo" class="form-control" id="correo" placeholder="name@example.com" value="{{ old('correo') }}">
          {!! $errors->first('correo', '<small>:message</small>') !!}
        </div>
      </div>

      <fieldset class="form-group">
        <div class="row">
          <b class="col-form-label col-sm-1 pt-0">{{ __('Productive sector') }}</b>
          <div class="col-sm-10">
            <div class="form-check">
              <input class="form-check-input" type="radio" name="sectorProductivo" value="primario" {{ (old('sectorProductivo') == "primario") ? "checked" : ""}} id="primario">
              <label class="form-check-label" for="primario">
                {{ __('Primario') }}
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="sectorProductivo" value="secundario" {{ (old('sectorProductivo') == "secundario") ? "checked" : ""}} id="secundario">
              <label class="form-check-label" for="secundario">
                {{ __('Secundario') }}
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="sectorProductivo" {{ (old('sectorProductivo') == "terciario") ? "checked" : ""}} value="terciario" id="terciario">
              <label class="form-check-label" for="terciario">
                {{ __('Terciario') }}
              </label>
            </div>
            {!! $errors->first('sectorProductivo', '<small>:message</small>') !!}
          </div>
        </div>
      </fieldset>

      <div class="form-group row">
        <label for="actividadPrincipal" class="col-sm-1 col-form-label"><b>{{ __('Main activity') }}</b></label>
        <div class="col-sm-10">
          <input type="text" name="actividadPrincipal" class="form-control" id="actividadPrincipal" placeholder="Hosteleria" value="{{ old('actividadPrincipal') }}">
          {!! $errors->first('actividadPrincipal', '<small>:message</small>') !!}
        </div>
      </div>

      <fieldset class="form-group">
        <div class="row">
          <b class="col-form-label col-sm-1 pt-0">{{ __('Ownership') }}</b>
          <div class="col-sm-10">
            <div class="form-check">
              <input class="form-check-input" type="radio" name="titularidad" value="privada" {{ (old('titularidad') == "privada") ? "checked" : ""}} id="privada">
              <label class="form-check-label" for="privada">
                {{ __('Privada') }}
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="titularidad" value="publica" {{ (old('titularidad') == "publica") ? "checked" : ""}} id="publica">
              <label class="form-check-label" for="publica">
                {{ __('Publica') }}
              </label>
            </div>
            {!! $errors->first('titularidad', '<small>:message</small>') !!}
          </div>
        </div>
      </fieldset>

      <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </form>
  </div>

@endsection
