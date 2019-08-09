@extends('layout')

@section('content')

<div class="row">
        <div class="col-sm-8">
        <h2>
        Nuevo producto
        <a href="{{route('products.index') }}" class="btn btn-primary btn-sm">editar</a>
        </h2>
        
        Formulario
        </div>

        <div class="col-sm-4">
          @include('products.fragment.aside')
        </div>

</div>

@endsection 