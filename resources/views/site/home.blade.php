@extends('site.layout')

@section('title', 'Produtos')


@include('includes.mensagem', ['titulo' => 'Mensagem de sucesso!'])

@component('components.sidebar')
    @slot('paragrafo')
        Texto Qualquer
    @endslot
@endcomponent
@section('conteudo')
    <h1> Essa é a nossa Home</h1>
@endsection

@push('style')
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
@endpush
@push('script')
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
@endpush
