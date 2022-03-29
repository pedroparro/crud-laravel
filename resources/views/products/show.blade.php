@extends('layouts.app')

@section('content')
<h1>Visualizar Produto</h1>
<hr/>

<div class="bg-dark text-white rounded p-3">
    <h5 class="text-warning">Nome</h5>
    <p class="fw-bold">{{$product->name}}</p>

    <h5 class="text-warning">Preço</h5>
    <p class="fw-bold">{{$product->price}}</p>

    <h5 class="text-warning">Descrição</h5>
    <p class="fw-bold">{{$product->description}}</p>
</div>

@endsection