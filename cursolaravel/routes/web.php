<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/empresa",function(){
    return view("site/empresa");
});

Route::any("/any",function(){
    return "permite qualquer tipo de rota http (get,post,put e delete)";
});

Route::match(["get","post"],"/match",function(){
    return "permite apenas tipos definidos";
});

Route::get("/produto/{id}/{categoria?}",function($id,$categoria = ''){
    return "o id do produto de categoria $categoria é $id";
});

Route::get("/sobre",function(){
    return view("site/empresa");
});

Route::redirect("/sobre","/empresa");
#Route::view("/empresa","site/empresa");

Route::get("/news",function(){
    return view("site/news");
})->name("noticias"); #nomeia rotas

Route::get("/novidades",function(){
    return redirect()->route("noticias");
});

?>
