<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route("admin.clientes");
});


Route::group([ #group: junção do route e name
    "prefix"=> "admin",
    "as" => "admin."
],function(){ # Route::prefix("admin"): todas as rotas dessa function será /admin/x
    Route::get("dashboard",function(){ # Route::name("admin."): todas as rotas terá como nome admin.X
        return "dashboard";
    })->name("dashboard");

    Route::get("users",function(){
        return "users";
    })->name("users");

    Route::get("clientes",function(){
        return "clientes";
    })->name("clientes");

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
