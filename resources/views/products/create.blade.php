@extends('layout')

@section('content')

<div class="row">
        <div class="col-sm-8">
        <h2>
        Nuevo producto
        <a href="{{route('products.index') }}" class="btn btn-primary btn-sm">editar</a>
        </h2>
        @include('products.fragment.error')

        {!! Form::open(['route' => 'products.store']) !!}

        @include('products.fragment.form')

        {!! Form::close()!!}

        </div>

        <div class="col-sm-4">
          @include('products.fragment.aside')
        </div>

</div>

@endsection 