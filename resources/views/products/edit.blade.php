@extends('layout')

@section('content')

<div class="row">
        <div class="col-sm-8">
        <h2>
        Editar producto
        </h2>

        @include('products.fragment.error')
        
        {!! Form::model($product, ['route' => ['products.update', $product->id], 'method' => 'PUT']) !!}

        @include('products.fragment.form')

        {!! Form::close()!!}
        </div>

        <div class="col-sm-4">
          @include('products.fragment.aside')
        </div>

</div>

@endsection 