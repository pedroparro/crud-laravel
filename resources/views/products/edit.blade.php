@extends('layouts.app')

@section('content')

<h1>Editar Produto</h1>
<hr/>
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{route('products.update',$product->id)}}" method="post">
    @csrf 
    @method('put')
    <input type="text" name="name" class="form-control mb-3" placeholder="Nome" value="{{$product->name}}">
    <input type="text" name="price" class="form-control mb-3" placeholder="Preço" value="{{$product->price}}">
    <textarea name="description" class="form-control mb-3" rows="4" placeholder="Descrição">{{$product->description}}</textarea>
    <button class="btn btn-primary float-end px-5" type="submit">Submit</button>
</form>
@endsection









