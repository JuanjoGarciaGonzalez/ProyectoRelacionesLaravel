<style>
    .botones {
        width: 30%;
        margin: 100px auto 0 auto;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
</style>
@extends("plantilla-navbar-footer")

@section("titulo")
    Home
@endsection

@section("contenido")
    <div class="botones">
        <a href="{{ route("crearPasajero") }}" class="btn btn-success">Crear pasajero</a>
        <a href="{{ route("crearVuelo") }}" class="btn btn-success">Crear vuelo</a>
        <a href="#" class="btn btn-info">Asignar y listar</a>
    </div>
@endsection