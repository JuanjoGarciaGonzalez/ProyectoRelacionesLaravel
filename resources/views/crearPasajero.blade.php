<style>
    @import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap');

    h1 {
        text-align: center;
        margin: 25px auto 0 auto !important;
        font-family: 'Bebas Neue', cursive !important;
    }

    .fas {
        color: white;
    }

    .volver {
        color: white;
        position: fixed;
        top: 100px;
        left: 20px;
    }

    .submit {
        width: 100%
        margin: 0 auto;
        text-align: center;
    }

</style>

@extends('plantilla-navbar-footer')

@section('titulo')
    Crear pasajero
@endsection

@section('contenido')
    <a href="{{ route("home") }}" class="btn btn-danger volver"><i class="fas fa-long-arrow-alt-left"></i> Volver</a>
    <h1>Crear pasajero</h1>
    {{-- FORMULARIO CREAR PASAJERO --}}
    <div class="h-auto w-100 mt-5 d-flex align-items-center justify-content-center">
        <form id="formulario-pasajero" method="POST" action="" class="w-25 p-3">
            <div class="form-group">
              <label for="nombre">Nombre</label>
              <input type="text" class="form-control" id="nombre" placeholder="Introduce tu nombre" name="nombre">
            </div>
    
            <div class="form-group">
                <label for="apellidos">Apellidos</label>
                <input type="text" class="form-control" id="apellidos" placeholder="Introduce tus apellidos" name="apellidos">
              </div>
    
            <div class="form-group">
            <label for="edad">Edad</label>
            <input type="number" class="form-control" id="edad" placeholder="Introduce tu edad" name="edad">
            </div>

            <div class="form-group">
            <label for="">Sexo</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="sexo" id="hombre">
                <label class="form-check-label" for="hombre">
                  Hombre
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="sexo" id="mujer" checked>
                <label class="form-check-label" for="mujer">
                  Mujer
                </label>
            </div>
            </div>

            <div class="submit">
                <button type="submit" class="btn btn-success submit">Crear</button>
            </div>
          </form>
    </div>

@endsection