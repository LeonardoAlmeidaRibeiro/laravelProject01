@extends('site.layout')

@section('title', 'Detalhes')

@section('conteudo')

    <div class="row container">
        <div class="col s12 m6">
            <img src="{{ $produto->imagem }}">
        </div>

        <div class="col s12 m6">
            <h3> {{ $produto->nome }}</h3>
            <h5> Preço: {{ number_format($produto->preco,2,',','.' )}}</h5>
            <p> {{ $produto->descricao }}</p>
            <p> Postado por: {{ $produto->user->firstName }}</p>
            <p> Categoria: {{ $produto->categoria->nome }}</p>
            <button class="btn orange btn large">Comprar</button>
        </div>
    </div>

@endsection
