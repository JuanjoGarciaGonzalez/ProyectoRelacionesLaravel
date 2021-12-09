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
</style>
@extends("plantilla-navbar-footer")

@section("titulo")
    Home
@endsection

@section("contenido")
    <h1>Home</h1>
    <div class="botones">
        <a href="{{ route("crearPasajero") }}" class="btn btn-success">Crear pasajero</a>
        <a href="{{ route("crearVuelo") }}" class="btn btn-success">Crear vuelo</a>
        <a href="#" class="btn btn-info">Asignar y listar</a>
    </div>
@endsection