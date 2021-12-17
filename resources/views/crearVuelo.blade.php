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
    Crear vuelo
@endsection

@section('contenido')
    <a href="{{ route("home") }}" class="btn btn-danger volver"><i class="fas fa-long-arrow-alt-left"></i> Volver</a>
    <h1>Crear vuelo</h1>
    <div class="contenido">
        {{-- FORMULARIO CREAR VUELO --}}
        <div class="h-auto d-flex align-items-start justify-content-start formulario  p-5">
            <form id="formulario-vuelo" method="get" action="{{ route('vuelo.store') }}" class="w-100">
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

        <div class="lista w-100 p-5 d-flex align-items-start justify-content-center">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">NOMBRE</th>
                    <th scope="col">ORIGEN</th>
                    <th scope="col">DESTINO</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($vuelos as $vuelo)
                      <tr>
                          <td>{{ $vuelo -> id }}</td>
                          <td>{{ $vuelo -> nombre }}</td>
                          <td>{{ $vuelo -> origen }}</td>
                          <td>{{ $vuelo -> destino }}</td>
                          <td><a href="{{ route("vuelo.borrar", $vuelo -> id)}}" data-toggle="tooltip" data-placement="top" title="Eliminar vuelo"><i class="fas fa-trash-alt"></i></a></td>
                      </tr>
                    @endforeach
        
                </tbody>
              </table>
        </div>
    </div>
@endsection