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

    .table {
        width: auto!important;
        margin: 0 auto 0 auto;
        text-align: center
    }

    .submit {
        width: 100%;
        margin: 0 auto;
        text-align: center;
    }

    hr {
        width: 80vw;
        margin: 0 auto;
        border-top: 1px solid black !important;
        color: black
    }

    .tabla-tickets {
        margin: 0 auto;
        width: 40vw;
        height: auto;
        max-height: 300px;
        overflow-y: scroll;
        border: 1px solid black;
    }
</style>

@extends("plantilla-navbar-footer")

@section("titulo")
    Asignar y listar tickets
@endsection

@section("contenido")
    <a href="{{ route("home") }}" class="btn btn-danger volver"><i class="fas fa-long-arrow-alt-left"></i> Volver</a>
    <h1>Asignar ticket</h1>

    <div class="h-auto w-100 d-flex align-items-center justify-content-center">
        <form id="formulario-asignar" method="post" action="{{ route('PasajerosVuelos.asignar') }}" class="w-25 p-3">
            @csrf
            <table class="table">
                <tbody>
                    <tr>
                        <td>
                            <select class="form-select" aria-label="Default select example" name="pasajero">
                                <option selected>Pasajeros</option>
                                @foreach ($pasajeros as $pasajero)
                                    <option value="{{ $pasajero->id }}">{{ $pasajero->nombre }}</option>
                                @endforeach
                            </select>
                        </td>
        
                        <td>
                            <select class="form-select" aria-label="Default select example" name="vuelo">
                                <option selected>Vuelos</option>
                                @foreach ($vuelos as $vuelo)
                                    <option value="{{ $vuelo->id }}">{{ $vuelo->nombre }}</option>
                                @endforeach
                            </select>
                        </td>
                    </tr>
                  </tbody>
            </table>

            <div class="submit">
                <button type="submit" class="btn btn-success submit">Asignar</button>
            </div>
        </form>
    </div>
    
    <hr>
    
    <h1>Listar tickets</h1>

    <div class="tabla-tickets">
        <table class="table" style="margin-top: 20px">
            <thead>
              <tr>
                <th scope="col">ID PASAJERO</th>
                <th scope="col">ID VUELO</th>
                <th scope="col">TITULAR</th>
                <th scope="col">ORIGEN</th>
                <th scope="col">DESTINO</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($pasajeros as $pasajero)
                    @foreach ($pasajero->vuelos as $vueloRelacionado)
                    @php
                        $idVuelo = $vueloRelacionado-> pivot -> vuelo_id;
                    @endphp

                        <tr>
                            <td>{{ $vueloRelacionado -> pivot -> pasajero_id }}</td>
                            <td>{{ $vueloRelacionado -> pivot -> vuelo_id }}</td>
                            <td>{{ $pasajero -> nombre }}</td>
                            <td>{{ $vuelos->find($idVuelo)-> origen }}</td>
                            <td>{{ $vuelos->find($idVuelo) -> destino }}</td>
                        </tr>
                    @endforeach
                @endforeach
    
            </tbody>
          </table>
    </div>

@endsection