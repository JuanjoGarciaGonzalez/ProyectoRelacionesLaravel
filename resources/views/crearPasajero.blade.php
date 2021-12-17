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

    .contenido {
      width: 60vw;
      height: 60vh;
      margin: 20px auto 0 auto;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .formulario {
      border-right: 1px solid black;
      height: 100%;
      width: 30vw;
    }

    .lista {
      height: 100%;
      width: 30vw;
    }

    .lista .fas {
        color: red;
        font-size: 1.2rem;
    }

    .lista .fas:hover {
        color: rgba(255, 0, 0, 0.7);
    }

    label {
      font-weight: bold;
    }

</style>

@extends('plantilla-navbar-footer')

@section('titulo')
    Crear pasajero
@endsection

@section('contenido')
    <a href="{{ route("home") }}" class="btn btn-danger volver"><i class="fas fa-long-arrow-alt-left"></i> Volver</a>
    <h1>Crear pasajero</h1>
    <div class="contenido">
      {{-- FORMULARIO CREAR PASAJERO --}}
      <div class="h-auto d-flex align-items-start justify-content-start formulario p-5">
          <form id="formulario-pasajero" method="get" action="{{route('pasajero.store')}}" class="w-100">
            @csrf
              <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" id="nombre" placeholder="Introduce tu nombre" name="nombre" class="w-100">
              </div>
      
              <div class="form-group">
                  <label for="apellidos">Apellidos</label>
                  <input type="text" class="form-control" id="apellidos" placeholder="Introduce tus apellidos" name="apellidos" class="w-100">
                </div>
      
              <div class="form-group">
              <label for="edad">Edad</label>
              <input type="number" class="form-control" id="edad" placeholder="Introduce tu edad" name="edad" class="w-100">
              </div>
  
              <div class="form-group">
              <label for="">Sexo</label>
              <div class="form-check">
                  <input class="form-check-input" type="radio" name="sexo" id="hombre" value="hombre">
                  <label class="form-check-label" for="hombre" style="font-weight: normal">
                    Hombre
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="sexo" id="mujer" value="mujer">
                  <label class="form-check-label" for="mujer" style="font-weight: normal">
                    Mujer
                  </label>
              </div>
              </div>
  
              <div class="submit">
                  <button type="submit" class="btn btn-success submit w-100">Crear</button>
              </div>
            </form>
      </div>

        <div class="lista w-100 p-5 d-flex align-items-start justify-content-center">
          <table class="table">
              <thead>
                <tr>
                  <th scope="col">ID</th>
                  <th scope="col">NOMBRE</th>
                  <th scope="col">APELLIDOS</th>
                  <th scope="col">EDAD</th>
                  <th scope="col">SEXO</th>
                </tr>
              </thead>
              <tbody>
                  @foreach ($pasajeros as $pasajero)
                    <tr>
                        <td>{{ $pasajero -> id }}</td>
                        <td>{{ $pasajero -> nombre }}</td>
                        <td>{{ $pasajero -> apellidos }}</td>
                        <td>{{ $pasajero -> edad }}</td>
                        <td>{{ $pasajero -> sexo }}</td>
                        <td><a href="{{ route("pasajero.borrar", $pasajero -> id)}}" data-toggle="tooltip" data-placement="top" title="Eliminar pasajero"><i class="fas fa-trash-alt"></i></a></td>
                    </tr>
                  @endforeach
      
              </tbody>
            </table>
      </div>

    </div>


@endsection