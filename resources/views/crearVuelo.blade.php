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
        width: 100%;
        margin: 0 auto;
        text-align: center;
    }
    
</style>

@extends('plantilla-navbar-footer')

@section('titulo')
    Crear vuelo
@endsection

@section('contenido')
    <a href="{{ route("home") }}" class="btn btn-danger volver"><i class="fas fa-long-arrow-alt-left"></i> Volver</a>
    <h1>Crear vuelo</h1>

    {{-- FORMULARIO CREAR VUELO --}}
    <div class="h-auto w-100 mt-5 d-flex align-items-center justify-content-center">
        <form id="formulario-pasajero" method="get" action="{{ route('vuelo.store') }}" class="w-25 p-3">
            @csrf
            <div class="form-group">
              <label for="nombre">Nombre</label>
              <input type="text" class="form-control" id="nombre" placeholder="Introduce el nombre" name="nombre">
            </div>
    
            <div class="form-group">
                <label for="origen">Origen</label>
                <input type="text" class="form-control" id="origen" placeholder="Introduce el origen" name="origen">
            </div>
    
            <div class="form-group">
                <label for="destino">Destino</label>
                <input type="text" class="form-control" id="destino" placeholder="Introduce el destino" name="destino">
            </div>

            <div class="submit">
                <button type="submit" class="btn btn-success submit">Crear</button>
            </div>
          </form>
    </div>
@endsection