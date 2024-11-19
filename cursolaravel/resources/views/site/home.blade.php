@extends("site.layout")
@section('title',"essa é a página home")

@section('conteudo')

<div class="row container">
    @foreach($produtos as $produto)
        <div class="col s12 m5">
            <div class="card">
                <div class="card-image">
                <img src="{{$produto->imagem}}">
                    <span class="card-title">{{$produto->name}}</span>
                    <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">visibility</i></a>
                </div>
                <div class="card-content">
                <p>{{Str::limit($produto->descricao,50)}}</p>
                </div>
                <div class="card-action">
                <a href="#">This is a link</a>
                </div>
            </div>
        </div>
    @endforeach


</div>
@endsection
