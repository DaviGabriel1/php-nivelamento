@extends("site.layout")
@section('title',"essa é a página home")

@section('conteudo')
    <h1>essa é a home</h1>

    {{-- isso é um comentário --}}


    {{-- ESTRUTURA CONDICIONAL--}}

    {{ isset($nome) ? "existe" : "não existe"}}
    {{$teste ?? "padrão"}}

    @if("1" == 1)
        <h1>if no blade</h1>
    @endif

    @unless ("1" === 1)
        <h1>imprime se a preposição não for verdadeira</h1>
    @endunless

    @switch($idade)
        @case(1)
                <h1>idade errada</h1>
            @break
        @case(19)
                <h1>idade certa</h1>
            @break
        @default
            <h1>nenhuma idade certa</h1>
    @endswitch

    @guest
        <h1>imprime se não tiver um usuario autenticado</h1>
    @endguest

    @auth
        <h1>imprime se tiver um usuario autenticado</h1>
    @endauth

    {{-- ESTRUTURA DE REPETIÇÃO --}}

    @for($i = 1;$i<=10;$i++)
        <h3> {{$i}} <br></h3>
    @endfor

    @php
        $j = 1;
    @endphp

    @while ($j <=10)
        <h3> {{$j}} <br></h3>
        @php $j++ @endphp
    @endwhile

    @foreach ($frutas as $fruta)
        <span>{{$fruta}} , </span>
    @endforeach

    @forelse ($frutas as $fruta)
        <span>{{$fruta}} , </span>

    @empty
        array está vazio
    @endforelse

@endsection
