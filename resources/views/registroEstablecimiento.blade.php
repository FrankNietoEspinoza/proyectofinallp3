@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">
                    <h1>Registro Establecimiento</h1>
                </div>
                <div class="card-body">
                    <form method="post" action="/establecimiento/direccion">
                        @csrf

                        <div class="form-group">
                            <label for="nombre">Nombre:</label>
                            <input type="text" name="nombre" class="form-control" placeholder="Ingrese nombre">
                        </div>

                        <div class="form-group">
                            <label for="direccion">Dirección:</label>
                            <input type="text" name="direccion" class="form-control" placeholder="Ingrese dirección">
                        </div>

                        <input type="hidden" name="distrito_id" value="1">
                        <input type="hidden" name="responsable_id" value="1">

                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" value="Guardar">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
