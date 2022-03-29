@extends('layouts.app')

@section('content')
<h1>CRUD - LARAVEL</h1>
<a class="btn btn-link float-end" href="{{ route('products.create') }}">Inserir Produto</a>

@if (session('success'))
 <div class="alert alert-success">
        {{ session('success')}}
 </div>
@endif

<table class="table table-striped table-hover">
    <thead>
        <tr></tr>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">NOME</th>
            <th scope="col">PREÇO</th>
            <th scope="col">DESCRIÇÃO</th>
            <th scope="col">AÇÃO</th>
        </tr>
    </thead>
    <tbody>

@foreach ($products as $product)
        <tr>
            <th scope="row">{{ $loop->iteration}}</th>
            <td>{{ $product->name}}</td>
            <td>{{ $product->price}}</td>
            <td>{{ $product->description}}</td>
            <td>
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Ação</button>

                    <ul class="dropdown-menu" aria-labelledby="actionDropdown">
                        <li><a class="dropdown-item" href="{{ route('products.show', $product->id)}}" >Visualizar</a></li>
                        <li><a class="dropdown-item" href="{{ route('products.edit', $product->id)}}" >Editar</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <form action="{{ route('products.destroy', $product->id)}}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" class="dropdown-item">Deletar</button>
                            </form>
                        </li>
                    </ul>
                </div>
            </td>
        </tr>
@endforeach
    </tbody>
</table>
@endsection