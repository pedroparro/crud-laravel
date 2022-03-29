@extends('layouts.app')

@section('content')

<h1>Inserir Produto</h1>
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

<form action="{{route('products.store')}}" method="post">
    @csrf 
    <input type="text" name="name" class="form-control mb-3" placeholder="Nome">
    <input type="text" name="price" class="form-control mb-3" placeholder="Preço">
    <textarea name="description" class="form-control mb-3" rows="4" placeholder="Descrição"></textarea>
    <button class="btn btn-primary float-end px-5" type="submit">Inserir</button>
</form>
@endsection