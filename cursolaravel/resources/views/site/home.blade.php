@extends("site.layout")
@section('title',"essa é a página home")

@section('conteudo')
    <h1>essa é a home</h1>

    {{-- isso é um comentário --}}

    {{ isset($nome) ? "existe" : "não existe"}}
    {{$teste ?? "padrão"}}

@endsection
