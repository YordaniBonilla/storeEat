@extends('layout')

@section('contenido')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Producto</div>
                <div class="panel-body">
                    <p><strong>Nombre</strong>{{ $product->name }}</p>
                    <p><strong>Descripción</strong>{{ $product->description }}</p>
                    <p><strong>Precio</strong>{{ $product->price }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection