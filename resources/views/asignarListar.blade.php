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
</style>

@extends("plantilla-navbar-footer")

@section("titulo")
    Asignar y listar
@endsection

@section("contenido")
    <a href="{{ route("home") }}" class="btn btn-danger volver"><i class="fas fa-long-arrow-alt-left"></i> Volver</a>
    <h1>Asignar</h1>

    <div class="h-auto w-100 d-flex align-items-center justify-content-center">
        <form id="formulario-asignar" method="get" action="{{ route('PasajerosVuelos.asignar') }}" class="w-25 p-3">
            <table class="table">
                <tbody>
                    <tr>
                        <td>
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Pasajeros</option>
                            </select>
                        </td>
        
                        <td>
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Vuelos</option>
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
    
    <h1>Listar</h1>

    <table class="table" style="margin-top: 20px">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">ID PASAJERO</th>
            <th scope="col">ID VUELO</th>
            <th scope="col">TITULAR</th>
            <th scope="col">ORIGEN</th>
            <th scope="col">DESTINO</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Larry</td>
            <td>the Bird</td>
            <td>@twitter</td>
          </tr>
        </tbody>
      </table>
@endsection