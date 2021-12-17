<style>
    @import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap');

    .botones {
        width: 30%;
        margin: 50px auto 0 auto;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    h1 {
        text-align: center;
        margin: 25px auto 0 auto !important;
        font-family: 'Bebas Neue', cursive !important;
    }

    p {
        text-align: center;
        font-size: 1.5rem;
        font-style: italic;
    }
</style>
@extends("plantilla-navbar-footer")

@section("titulo")
    Home
@endsection

@section("contenido")
    <h1>Home</h1>
    <p>En este proyecto web Laravel8 puedes crear pasajeros y vuelos, además de relacionarlos para crear tickets que pueden ser posteriormente anulados.</p>
    <div class="botones">
        <a href="{{ route("pasajero.listar") }}" class="btn btn-success">Crear pasajero</a>
        <a href="{{ route("vuelo.listar") }}" class="btn btn-success">Crear vuelo</a>
        <a href="{{ route('PasajerosVuelos.listar') }}" class="btn btn-info">Asignar y listar</a>
    </div>
@endsection