@extends('layout')

@section('content')
<div class="row">
<div class="col-sm-8">
   <h2>
   {{$product->name}}
   <a href="{{route('products.edit',$product->id) }}" class="btn btn-primary btn-sm">editar</a>
   </h2>
   <p>
   {{$product->short}}
   </p>
   {!! $product->body !!}
</div>

<div class="col-sm-4">
    Mensaje
</div>
</div>

@endsection 